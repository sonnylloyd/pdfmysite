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
        $archive->setSlug("title_here_6");
        
        
        
        $em = $this->get('doctrine')->getManager();
        //$em = $this->getDoctrine()->getManager();

        
        
        //$this->get('knp_snappy.image')->generate('http://www.google.fr', 'generates/image.jpg');
        $path = $this->get('kernel')->getRootDir() . '/../web/generates';
        $name = \tempnam ( $path , "pms" ).'.pdf';
        $this->get('knp_snappy.pdf')->generate('http://www.google.com', $path.$name);
        $archive->setFile("title_here");
        $em->persist($archive);
        $em->flush();
        
        return new Response('Created archive id '.$archive->getId(). $path.$name);
        
       
        

        //$pageUrl = "www.google.com";
        //return new Response(
        //        $this->get('knp_snappy.pdf')->getOutput($pageUrl), 200, array(
        //    'Content-Type' => 'application/pdf',
        //    'Content-Disposition' => 'attachment; filename="file.pdf"'
        //        )
        //);
    }

}
