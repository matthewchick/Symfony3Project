<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/our-car", name="offer")
     */
    public function indexAction()
    {
        return $this->render('CarBundle:Default:index.html.twig');
    }
}
