<?php

namespace App\Controllers;

use App\Models\EmpresaModel;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;
use CodeIgniter\Model;

class CadastroEmpresa extends Controller
{
	protected EmpresaModel $empresaModel;
	protected UsuarioModel $usuarioModel;

	public function __construct()
	{
		$this->empresaModel = new EmpresaModel();
		$this->usuarioModel = new UsuarioModel();  // criei a instancias das models 

	}

	public function index()
	{
		return view('empresa/cadastro');
	}

	public function salvar()
	{
	    $db = \Config\Database::connect();

	    try {

	        $tipoEmpresa      = trim($this->request->getPost('tipo_empresa'));
	        $nomeEmpresa      = trim($this->request->getPost('nome_empresa'));
	        $nomeFantasia     = trim($this->request->getPost('nome_fantasia'));
	        $nomeResponsavel  = trim($this->request->getPost('nome_responsavel'));
	        $emailContato     = trim($this->request->getPost('email_contato'));
	        $telefone         = trim($this->request->getPost('telefone'));
	        $cpf              = trim($this->request->getPost('cpf'));
	        $cnpj             = trim($this->request->getPost('cnpj'));


	        if (empty($tipoEmpresa)) {
	            throw new \Exception('Informe o tipo da empresa.');
	        }

	        if (empty($nomeEmpresa)) {
	            throw new \Exception('Informe o nome da empresa.');
	        }

	        if (empty($nomeResponsavel)) {
	            throw new \Exception('Informe o nome do responsável.');
	        }

	        if (empty($emailContato)) {
	            throw new \Exception('Informe o e-mail.');
	        }

	        if (empty($telefone)) {
	            throw new \Exception('Informe o telefone.');
	        }

	        if (empty($cpf) && empty($cnpj)) {
	            throw new \Exception('Informe CPF ou CNPJ.');
	        }



	        $usuarioExistente = $this->usuarioModel
	            ->where('email', $emailContato)
	            ->first();

	        if ($usuarioExistente) {
	            throw new \Exception('Este e-mail já está cadastrado.');
	        }


	        if (!empty($cpf)) {

	            $empresaCpf = $this->empresaModel
	                ->where('cpf', $cpf)
	                ->first();

	            if ($empresaCpf) {
	                throw new \Exception('CPF já cadastrado.');
	            }
	        }

	        if (!empty($cnpj)) {

	            $empresaCnpj = $this->empresaModel
	                ->where('cnpj', $cnpj)
	                ->first();

	            if ($empresaCnpj) {
	                throw new \Exception('CNPJ já cadastrado.');
	            }
	        }


	        $slug = url_title($nomeEmpresa, '-', true);

	        $slugExistente = $this->empresaModel
	            ->where('slug', $slug)
	            ->first();

	        if ($slugExistente) {
	            $slug .= '-' . time();
	        }

	        $plano = 'BASICO';


	        $dataVencimento = date(
	            'Y-m-d',
	            strtotime('+30 days')
	        );


	        $primeirasLetras = strtoupper(
	            substr(
	                preg_replace('/[^a-zA-Z]/', '', $nomeResponsavel),
	                0,
	                2
	            )
	        );

	        $documento = !empty($cpf)
	            ? preg_replace('/[^0-9]/', '', $cpf)
	            : preg_replace('/[^0-9]/', '', $cnpj);

	        $senhaInicial =
	            $primeirasLetras .
	            '@' .
	            substr($documento, 0, 5);

	        $senhaCriptografada = password_hash(
	            $senhaInicial,
	            PASSWORD_DEFAULT
	        );


	        $db->transStart();


	        $this->empresaModel->insert([
	            'tipo_empresa'     => $tipoEmpresa,
	            'nome_empresa'     => $nomeEmpresa,
	            'nome_fantasia'    => $nomeFantasia,
	            'slug'             => $slug,
	            'logo'             => null,
	            'nome_responsavel' => $nomeResponsavel,
	            'email_contato'    => $emailContato,
	            'telefone'         => $telefone,
	            'cpf'              => $cpf ?: null,
	            'cnpj'             => $cnpj ?: null,
	            'plano'            => $plano,
	            'data_vencimento'  => $dataVencimento,
	            'ativo'            => true
	        ]);

	        $empresaId = $this->empresaModel->insertID();

			
	        $empresaId = $this->empresaModel->getInsertID();


	        $this->usuarioModel->insert([
	            'empresa_id'       => $empresaId,
	            'nome'             => $nomeResponsavel,
	            'cpf'              => $cpf ?: null,
	            'email'            => $emailContato,
	            'senha'            => $senhaCriptografada,
	            'tipo_usuario'     => 'DONO_EMPRESA',
	            'telefone'         => $telefone,
	            'foto'             => null,
	            'primeiro_acesso'  => true,
	            'ativo'            => true
	        ]);

	        $db->transComplete();

			if ($db->transStatus() === false) {

			    dd([
			        'db_error' => $db->error(),
			        'empresa_errors' => $this->empresaModel->errors(),
			        'usuario_errors' => $this->usuarioModel->errors(),
			        'empresa_id' => $empresaId ?? null
			    ]);
			}

	        return redirect()
	            ->to('/cadastro-empresa')
	            ->with('sucesso',
	                'Empresa cadastrada com sucesso. Senha inicial: '
	                . $senhaInicial
	            );

	    } catch (\Exception $e) {

	        return redirect()
	            ->back()
	            ->withInput()
	            ->with('erro', $e->getMessage());
	    }
	}

}