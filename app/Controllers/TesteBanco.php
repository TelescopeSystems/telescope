<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TesteBanco extends Controller
{
    public function index()
    {
        try {

            $db = Database::connect();

            $dados['mensagem'] = 'Conectou meu quuerido bora desenvolver ne .';

        } catch (\Throwable $e) {

            $dados['mensagem'] =
                'ERRO: ' .
                $e->getMessage();

        }

        return view('welcome_message', $dados);
    }
}