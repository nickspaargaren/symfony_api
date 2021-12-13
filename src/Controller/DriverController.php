<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DriverController extends AbstractController {

    /**
     * @Route("/drivers", name="drivers")
     * @method({"GET"})
     */

    public function initialize() {

        return $this->json(['driver' => 'John Wick']);

    }

}