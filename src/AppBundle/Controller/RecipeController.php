<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecipeController extends Controller
{
    /**
     * @Route("/Recipe/{id}")
     */
    public function showAction($id)
    {
        return new \Symfony\Component\HttpFoundation\Response('<html><body>Receta: '.$id.' </body></html>');
    }
}
