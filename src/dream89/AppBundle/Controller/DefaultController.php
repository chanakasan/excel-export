<?php

namespace dream89\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dream89AppBundle:Default:index.html.twig');
    }
}
