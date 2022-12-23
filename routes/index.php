<?php

use function src\slimConfiguration;
use function src\jwtAuth;
use App\Controllers\GeneralController;
use App\Controllers\AuthController;

$app = new \Slim\App(slimConfiguration());


$app->post('/login', AuthController::class . ':login');

$app->get('/three-points', GeneralController::class . ':getThreePoints');
$app->get('/assistants', GeneralController::class . ':getAssistants');
$app->get('/blocks', GeneralController::class . ':getBlocks');
$app->get('/points', GeneralController::class . ':getPoints');
$app->get('/rebounds', GeneralController::class . ':getRebounds');
$app->get('/steals', GeneralController::class . ':getSteals');

$app->run();