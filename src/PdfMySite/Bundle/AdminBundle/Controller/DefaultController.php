<?php

namespace PdfMySite\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PdfMySiteAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
