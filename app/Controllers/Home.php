<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function inicio(): string
    {
        $empresaModel = new \App\Models\EmpresaModel();
        $usuarioModel = new \App\Models\UsuarioModel();

        $empresas = $empresaModel
            ->select('nome_empresa')
            ->findAll();

        $clientes = $usuarioModel
            ->where('tipo_usuario', 'CLIENTE')
            ->countAllResults();

        $funcionarios = $usuarioModel
            ->where('tipo_usuario', 'FUNCIONARIO')
            ->countAllResults();

        $donos = $usuarioModel
            ->where('tipo_usuario', 'DONO_EMPRESA')
            ->countAllResults();

        return view('inicio', [
            'empresas' => $empresas,
            'clientes' => $clientes,
            'funcionarios' => $funcionarios,
            'donos' => $donos
        ]);
        

    }
}
