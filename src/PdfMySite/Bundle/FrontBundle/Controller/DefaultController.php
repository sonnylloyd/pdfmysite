<?php

namespace PdfMySite\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PdfMySite\Bundle\FrontBundle\Entity\Archives;
use PdfMySite\Bundle\FrontBundle\Form\Type\ArchiveFormType;

class DefaultController extends Controller {

    public function indexAction() {
        $archiveFormType = $this->createForm(new ArchiveFormType(), []);
        return $this->render('PdfMySiteFrontBundle:Default:index.html.twig', array(
                    'form' => $archiveFormType->createView()
                        )
        );
    }

    public function generateAction(Request $request) {
        $archives = new Archives();
        $archiveFormType = $this->createForm(new ArchiveFormType(),$archives);
        $archiveFormType->handleRequest($request);

        if ($archiveFormType->isValid()) {
            // perform some action, such as saving the task to the database
            echo "hello";exit;
        }

        $archiveFormType = $this->createForm(new ArchiveFormType(), []);
        $tags = \get_meta_tags('https://www.sunzu.com');

        $archive = new Archives();
        $archive->setUrl('https://www.sunzu.com');
        $archive->setIpaddress($request->getClientIp());

        if ($tags['description']) {
            $archive->setDescription($tags['description']);
        }

        if ($tags['keywords']) {
            $archive->setKeywords($tags['keywords']);
        }

        if ($tags['title']) {
            $archive->setTitle($tags['title']);
        } else {
            $archive->setTitle("hello world");
        }


        $em = $this->get('doctrine')->getManager();


        $path = 'generates';
        $name = \tempnam($path, "pms");

        $archive->setSlug($name);

        //$this->get('knp_snappy.image')->generate('http://www.google.com', $path.$name.'.jpg');
        $this->get('knp_snappy.pdf')->generate('https://www.sunzu.com', $name . ".pdf");

        $archive->setFile($name . ".pdf");
        $em->persist($archive);
        $em->flush();

        return new Response('Created archive id ' . $archive->getId() . $name . ".pdf");




        //$pageUrl = "www.google.com";
        //return new Response(
        //        $this->get('knp_snappy.pdf')->getOutput($pageUrl), 200, array(
        //    'Content-Type' => 'application/pdf',
        //    'Content-Disposition' => 'attachment; filename="file.pdf"'
        //        )
        //);
    }

}
