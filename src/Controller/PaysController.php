<?php

namespace App\Controller;

use App\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaysController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        Country::creerPays();
        return $this->render('pays/index.html.twig', ["pays" => Country::$kindercountry]);
    }

    #[Route('/{nom}', name: 'afficherPays')]
    public function afficherPays($nom): Response
    {
        Country::creerPays();
        $kindercountry = Country::getCountryByNom($nom);
        return $this->render('pays/pays.html.twig', [
            "nom" => $kindercountry, "pays" => Country::$kindercountry
        ]);
    }
}
