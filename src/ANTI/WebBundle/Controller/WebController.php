<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/5/16
 * Time: 3:19 PM
 */

namespace ANTI\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebController extends Controller {

    public function indexAction(){
        return $this->render('ANTIWebBundle::index.html.twig');
    }

    public function aboutAction(){
        return $this->render('ANTIWebBundle::about.html.twig');

    }
    public function servicesAction(){
        return $this->render('ANTIWebBundle::services.html.twig');

    }
    public function galleryAction(){
        return $this->render('ANTIWebBundle::gallery.html.twig');

    }
    public function contactAction(){
        return $this->render('ANTIWebBundle::contact.html.twig');

    }

}