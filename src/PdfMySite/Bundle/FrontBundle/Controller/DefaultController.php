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
        
        $tags = \get_meta_tags('https://www.sunzu.com');
        
        $archive = new Archives();
        $archive->setUrl('https://www.sunzu.com');
        $archive->setIpaddress($request->getClientIp());
        
        if($tags['description']){
            $archive->setDescription($tags['description']);
        }else{
            $archive->setDescription("");
        }
        if($tags['keywords']){
            $archive->setKeywords($tags['keywords']);
        }else{
            $archive->setKeywords("");
        }
        if($tags['title']){
            $archive->setTitle($tags['title']);
        }else{
            $archive->setTitle("hello world");
        }
        
        $archive->setSlug("title_here_sunzu");

        $em = $this->get('doctrine')->getManager();

        
        $path = 'generates';
        $name = \tempnam ( $path , "pms" );
        
        //$this->get('knp_snappy.image')->generate('http://www.google.com', $path.$name.'.jpg');
        $this->get('knp_snappy.pdf')->generate('https://www.sunzu.com', $path.$name.'.pdf');
        
        $archive->setFile($name.'.pdf');
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
