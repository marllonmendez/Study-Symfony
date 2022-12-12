<?php

//namespace são como os diretorios, sempre deve ter antes de todo código
namespace App\Controller;

//use serve para apelidar, são instâncias que sempre devem está no código
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

//classes
class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}