<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class ControleLogin extends Controller
{
    protected UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        helper(['form']);
    }

    public function index()
    {
        return view('login/index');
    }

   public function entrar()
    {
        $email = trim($this->request->getPost('email'));
        $senha = trim($this->request->getPost('senha'));

        if (empty($email) || empty($senha)) {
            return redirect()->back()->withInput()->with('erro', 'Informe e-mail e senha.');
        }

        $usuario = $this->usuarioModel
            ->where('email', $email)
            ->first();

        if (!$usuario) {
            return redirect()->back()->withInput()->with('erro', 'Usuário não encontrado.');
        }


        $usuarioAtivo = (
            $usuario['ativo'] === true ||
            $usuario['ativo'] === 't' ||
            $usuario['ativo'] === '1' ||
            $usuario['ativo'] == 1
        );

        if (!$usuarioAtivo) {
            return redirect()->back()->with('erro', 'Usuário desativado.');
        }


        $empresa = (new \App\Models\EmpresaModel())
            ->where('id', $usuario['empresa_id'])
            ->first();

        if (!$empresa) {
            return redirect()->back()->with('erro', 'Empresa não encontrada.');
        }


        $empresaAtiva = (
            $empresa['ativo'] === true ||
            $empresa['ativo'] === 't' ||
            $empresa['ativo'] === '1' ||
            $empresa['ativo'] == 1
        );

        if (!$empresaAtiva) {
            return redirect()->back()->with('erro', 'Empresa desativada. Acesso bloqueado.');
        }

        if (!password_verify($senha, $usuario['senha'])) {
            return redirect()->back()->withInput()->with('erro', 'Senha inválida.');
        }

        // atualiza login
        $this->usuarioModel->update($usuario['id'], [
            'ultimo_login' => date('Y-m-d H:i:s')
        ]);

        // recarrega usuário
        $usuario = $this->usuarioModel
            ->where('id', $usuario['id'])
            ->first();

        session()->set([
            'usuario_id'     => $usuario['id'],
            'empresa_id'     => $usuario['empresa_id'],
            'nome_usuario'   => $usuario['nome'],
            'email_usuario'  => $usuario['email'],
            'tipo_usuario'   => $usuario['tipo_usuario'],
            'usuario_logado' => true
        ]);

        $primeiroAcesso = (
            $usuario['primeiro_acesso'] === true ||
            $usuario['primeiro_acesso'] === 't' ||
            $usuario['primeiro_acesso'] === '1' ||
            $usuario['primeiro_acesso'] == 1
        );

        if ($primeiroAcesso) {
            return redirect()->to('/alterar-senha');
        }

        switch ($usuario['tipo_usuario']) {

            case 'DONO_EMPRESA':
            case 'CLIENTE':
            case 'FUNCIONARIO':
                return redirect()->to('/painel');

            default:
                return redirect()->to('/');
        }
    }

    public function sair()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}