<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::inicio');
$routes->get('/cadastro-empresa', 'CadastroEmpresa::index');

$routes->post(
    '/cadastro-empresa/salvar',
    'CadastroEmpresa::salvar'
);

$routes->get('/', 'ControleLogin::index');

$routes->get('/login', 'ControleLogin::index');

$routes->post('/login/entrar', 'ControleLogin::entrar');

$routes->get('/sair', 'ControleLogin::sair');

// rotas de alterar senha
$routes->get('/alterar-senha', 'ControleAlterarSenha::index');

$routes->post(
    '/alterar-senha/salvar',
    'ControleAlterarSenha::salvar'
);