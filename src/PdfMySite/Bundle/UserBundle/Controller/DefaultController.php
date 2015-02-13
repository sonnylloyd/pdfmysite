<?php

namespace PdfMySite\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PdfMySiteUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
