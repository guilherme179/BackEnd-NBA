<?php

use function src\slimConfiguration;
use function src\jwtAuth;
use App\Controllers\GeneralController;
use App\Controllers\AuthController;

$app = new \Slim\App(slimConfiguration());


$app->post('/login', AuthController::class . ':login');

$app->get('/tree-points', GeneralController::class . ':getTreePoints')->add(jwtAuth());
$app->get('/assistants', GeneralController::class . ':getAssistants')->add(jwtAuth());
$app->get('/blocks', GeneralController::class . ':getBlocks')->add(jwtAuth());
$app->get('/points', GeneralController::class . ':getPoints')->add(jwtAuth());
$app->get('/rebounds', GeneralController::class . ':getRebounds')->add(jwtAuth());
$app->get('/steals', GeneralController::class . ':getSteals')->add(jwtAuth());

$app->run();