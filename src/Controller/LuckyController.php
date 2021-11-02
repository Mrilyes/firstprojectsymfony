<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
   
     /**
     * @Route("/lucky/{max}", name="lucky")
     */


    public function number2(int $max): Response
    {

        $ma = random_int(0, $max);
        
        return $this->render('lucky/number.html.twig', [
            'ma' => $ma,
        ]);
    }



    // public function index(): Response
    // {
    //     return $this->render('lucky/index.html.twig', [
    //         'number' => $number,
    //     ]);
    // }

    
    
    // public function number(): Response
    // {
    //     $max = random_int(0, 100);
        
    //     return $this->render('lucky/number.html.twig', [
    //         'max' => $max,
    //     ]);
    // }

 }



        
