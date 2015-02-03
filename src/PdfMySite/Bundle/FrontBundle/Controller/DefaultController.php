<?php

namespace PdfMySite\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PdfMySite\Bundle\FrontBundle\Entity\Archives;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('PdfMySiteFrontBundle:Default:index.html.twig');
    }

    public function generateAction(Request $request) {
        $archive = new Archives();
        $archive->setUrl('A Foo Bar');
        $archive->setIpaddress($request->getClientIp());
        $archive->setDescription("decription");
        $archive->setKeywords("keywords");
        $archive->setTitle("title here");
        
        
        
        $em = $this->get('doctrine')->getManager();
        //$em = $this->getDoctrine()->getManager();

        $em->persist($archive);
        $em->flush();
        
        return new Response('Created archive id '.$archive->getId());
        
       
        //$this->get('knp_snappy.image')->generate('http://www.google.fr', '/web/generates/image.jpg');
        //$this->get('knp_snappy.pdf')->generate('http://www.google.fr', '/web/generates/file.pdf');

        //$pageUrl = "www.google.com";
        //return new Response(
        //        $this->get('knp_snappy.pdf')->getOutput($pageUrl), 200, array(
        //    'Content-Type' => 'application/pdf',
        //    'Content-Disposition' => 'attachment; filename="file.pdf"'
        //        )
        //);
    }

}
