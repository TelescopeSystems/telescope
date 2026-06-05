<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class ControleAlterarSenha extends Controller
{
    protected UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        helper(['form']);
    }

    public function index()
    {
        if (!session()->get('usuario_logado')) {
            return redirect()->to('/login');
        }

        return view('login/alterar_senha');
    }

    public function salvar()
    {
        if (!session()->get('usuario_logado')) {
            return redirect()->to('/login');
        }

        $novaSenha = trim($this->request->getPost('nova_senha'));
        $confirmarSenha = trim($this->request->getPost('confirmar_senha'));

        if (empty($novaSenha)) {
            return redirect()->back()->with('erro', 'Informe a nova senha.');
        }

        if (strlen($novaSenha) < 6) {
            return redirect()->back()->with('erro', 'A senha deve possuir no mínimo 6 caracteres.');
        }

        if ($novaSenha !== $confirmarSenha) {
            return redirect()->back()->with('erro', 'As senhas não conferem.');
        }

        $usuarioId = session()->get('usuario_id');

        $this->usuarioModel->update($usuarioId, [
            'senha' => password_hash($novaSenha, PASSWORD_DEFAULT),
            'primeiro_acesso' => false
        ]);

        session()->destroy();

        return redirect()->to('/login')
            ->with('sucesso', 'Senha alterada com sucesso. Faça login novamente.');
    }
}