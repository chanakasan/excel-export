<?php

namespace dream89\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dream89AppBundle:Default:index.html.twig');
    }

    public function downloadAction()
    {
        $filename = 'products.csv';
        $path = $this->get('kernel')->getRootDir(). "/../reports/".$filename;
        $content = file_get_contents($path);

        $response = new Response();

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$filename);

        $response->setContent($content);
        return $response;
    }
}
