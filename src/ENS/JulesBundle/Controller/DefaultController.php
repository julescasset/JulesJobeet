<?php

namespace Ens\JulesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsJulesBundle:Default:index.html.twig');
    }
}
