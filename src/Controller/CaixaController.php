<?php

namespace App\Controller;

use CaixaFactory;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route(path: "/caixas", name: "caixas_")]
class CaixaController extends AbstractController
{

    #[Route(path: "", name: "all", methods: ["GET"])]
    function all(): Response
    {
        $caixa1 = CaixaFactory::create("Caixa numero 1", [1]);       

        $caixa2 = CaixaFactory::create("Caixa numero 2", [2]);
       
        $data = [$caixa1->asArray(), $caixa2->asArray()];
        return $this->json($data, 200, ["Content-Type" => "application/json"], ["body" => "Está tudo ok!"]);
    }
}  