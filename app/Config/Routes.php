<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('portfolio-details', 'Home::portfolioDetails');
$routes->get('service-details', 'Home::serviceDetails');
$routes->get('privacy', 'Home::privacy');
$routes->get('terms', 'Home::terms');
$routes->get('starter-page', 'Home::starterPage');


/// rotas de cima do meu Home

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

// rota do painel 

$routes->get('/painel', 'Painel::index');


