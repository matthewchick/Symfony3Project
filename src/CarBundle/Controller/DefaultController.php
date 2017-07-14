<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/our-car", name="offer")
     */
    public function indexAction()
    {
        // get Repository => http://symfony.com/doc/current/doctrine.html
        $carRepository= $this->getDoctrine()->getRepository('CarBundle:Car');
        // Use QueryBuilder to improve performance
        $cars = $carRepository->findCarsWithDetails();
        /* $cars = $carRepository->findAll();   //retrieve all data */
        /*
        $cars = [
            ['make'=> 'BMW', 'name' => 'X1'],
            ['make'=> 'Honda', 'name' => 'Jazz'],
            ['make'=> 'Audi', 'name' => 'Q7'],
        ];
        */
        /* http://symfony.com/doc/current/controller.html
           A controller is a PHP function you create that reads information from the Symfony's Request object and creates and returns a Response object.
           The response could be an HTML page, JSON, XML, a file download, a redirect, a 404 error or anything else you can dream up.
           The controller executes whatever arbitrary logic your application needs to render the content of a page.
           The render() method renders a template and puts that content into a Response object
           return $this->render('CarBundle:Default:index.html.twig', array('cars' => $cars));
        */
        return $this->render('CarBundle:Default:index.html.twig', ['cars' => $cars]);
    }

    /**
     * @param $id
     * @Route("/car/{id}", name="show_car")
     */
    public function showAction($id){
        $carRepository= $this->getDoctrine()->getRepository('CarBundle:Car');
        // $car = $carRepository->find($id);
        // Use QueryBuilder to improve performance
        $car = $carRepository->findCarsWithDetailsById($id);
        return $this->render('CarBundle:Default:show.html.twig', ['car' => $car]);
    }
}
