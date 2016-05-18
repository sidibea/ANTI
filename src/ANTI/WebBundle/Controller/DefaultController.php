<?php

namespace ANTI\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ANTIWebBundle:Default:index.html.twig');
    }
}
