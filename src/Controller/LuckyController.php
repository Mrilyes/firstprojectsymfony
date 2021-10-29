<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky")
     */




    // public function index(): Response
    // {
    //     return $this->render('lucky/index.html.twig', [
    //         'number' => $number,
    //     ]);
    // }

    
    public function number(): Response
    {
        $max = random_int(0, 100);
        
        return $this->render('lucky/number.html.twig', [
            'max' => $max,
        ]);
    }

}
