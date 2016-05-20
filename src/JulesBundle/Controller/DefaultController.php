<?php

namespace JulesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulesBundle:Default:index.html.twig');
    }
}
