<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAO\IndexDAO;

final class GeneralController{


    public function getThreePoints(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = '3points';

        $data = $indexDAO->getAllData($tabel);
        
        $response = $response->withJson($data);

        return $response;
    }

    public function getAssistants(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = 'assistants';

        $data = $indexDAO->getAllData($tabel);

        $response = $response->withJson($data);

        return $response;
    }

    public function getBlocks(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = 'blocks';

        $data = $indexDAO->getAllData($tabel);

        $response = $response->withJson($data);

        return $response;
    }

    public function getPoints(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = 'points';

        $data = $indexDAO->getAllData($tabel);

        $response = $response->withJson($data);

        return $response;
    }

    public function getRebounds(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = 'rebounds';

        $data = $indexDAO->getAllData($tabel);

        $response = $response->withJson($data);

        return $response;
    }

    public function getSteals(Request $request, Response $response, array $args): Response{

        $indexDAO = new IndexDAO();
        $tabel = 'steals';

        $data = $indexDAO->getAllData($tabel);

        $response = $response->withJson($data);

        return $response;
    }
        
}