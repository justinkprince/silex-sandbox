<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$demo = $app['controllers_factory'];

$demo->get('/', function () use ($app) {
    return $app['twig']->render('demo/index.html.twig');
})->bind('demo_index');

$demo->get('/json-example', function () use ($app) {
    $data = [
        'key' => 'value',
        'otherKey' => 'otherValue',
    ];

    return $app->json($data);
})->bind('demo_json_example');

return $demo;
