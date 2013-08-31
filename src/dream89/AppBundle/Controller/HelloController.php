<?php

namespace dream89\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    private $templating;

    public function __construct($templating)
    {
        $this->templating = $templating;
    }

    public function indexAction()
    {
        return $this->templating->renderResponse(
            'dream89AppBundle:Hello:index.html.twig'
        );
    }
}