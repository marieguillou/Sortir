<?php

namespace App\Controller;

use App\Entity\Ville;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class TestController extends AbstractController
{


    /**
     * @Route("/test", name="testGet", methods=['GET'])
     */
    public function getVille(VilleRepository $villeRepository): Response
    {
        $url = 'http://localhost:4200/accueil';
        return new JsonResponse($villeRepository->find(1));
    }

    /**
     * @Route("/test", name="testPost", methods=['POST'])
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
