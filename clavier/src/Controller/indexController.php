<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class indexController extends AbstractController{
    
    /**
     * @Route("/",name="home")
     */
    public function home(){
        return $this->render("home.html.twig");
    }
}