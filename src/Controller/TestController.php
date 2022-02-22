<?php

namespace App\Controller;

use App\Entity\Ville;
use App\Repository\VilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @AsCon
 */

class TestController extends AbstractController
{



    public function villeGetTest(VilleRepository $villeRepository): Ville
    {
        $ville= new Ville("coucouVille","66666");
        return $ville;
    }

    /**
     * @Route("/test", name="testPost")
     */
    /*
    public function postVille(Request $request,EntityManagerInterface $entityManager): Response
    {


        $ville->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();
            $entityManager->persist($product);
            $entityManager->flush();
        }
        return

    }
    */
}
