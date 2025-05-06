<?php
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();


$app->get('/uma-api', function (Request $request, Response $response) {
    $data = [
        'mensagem' => 'Uma API REST é uma interface que permite a comunicação entre sistemas utilizando o protocolo HTTP e os métodos como GET, POST, PUT e DELETE.'
    ];
    $response->getBody()->write(json_encode($data, JSON_UNESCAPED_UNICODE));
    return $response->withHeader('Content-Type', 'application/json');
});


$app->get('/codigos', function (Request $request, Response $response) {
    $data = [
        '200' => 'OK - Requisição bem-sucedida.',
        '201' => 'Created - Recurso criado com sucesso.',
        '400' => 'Bad Request - Requisição malformada.',
        '401' => 'Unauthorized - Autenticação necessária.',
        '403' => 'Forbidden - Acesso negado.',
        '404' => 'Not Found - Recurso não encontrado.',
        '500' => 'Internal Server Error - Erro no servidor.'
    ];
    $response->getBody()->write(json_encode($data, JSON_UNESCAPED_UNICODE));
    return $response->withHeader('Content-Type', 'application/json');
});


$app->get('/erro', function (Request $request, Response $response) {
    $data = ['erro' => 'Não encontrado'];
    $response->getBody()->write(json_encode($data, JSON_UNESCAPED_UNICODE));
    return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
});

$app->run();