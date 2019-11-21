<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SocialController extends AbstractController
{
    /**
     * @Route("/social", name="social")
     */
    public function contact(){
        return $this->render('social.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/profil", name="profil")
     */
    public function profil(){
        return $this->render('profil.html.twig');
    }
}

