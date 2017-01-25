<?php

namespace Viweb\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ViwebContactBundle:Default:index.html.twig');
    }
}
