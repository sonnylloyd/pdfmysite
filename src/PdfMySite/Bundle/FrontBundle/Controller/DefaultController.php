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
        $path = 'generates';
        $archiveFormType = $this->createForm(new ArchiveFormType(), $archives);
        $archiveFormType->handleRequest($request);
        $em = $this->get('doctrine')->getManager();
        if ($archiveFormType->isValid()) {
            try {
                $tags = \get_meta_tags($archives->getUrl());
            } catch (Exception $e) {
                $tags = [];
            }
            $archives->setIpaddress($request->getClientIp());
            if (in_array("description", $tags)) {
                $archives->setDescription($tags['description']);
            }

            if (in_array("keywords", $tags)) {
                $archives->setKeywords($tags['keywords']);
            }
            if (in_array("title", $tags)) {
                $archives->setTitle($tags['title']);
            } else {
                $archives->setTitle("hello world");
            }
            while (true) {
                $filename = \uniqid(rand());
                if (!\file_exists($path . '/' . $filename . '.pdf'))
                    break;
            }
            $archives->setSlug($filename);
            $archives->setFile($filename);
            $this->get('knp_snappy.pdf')->generate($archives->getUrl(), $path . '/' . $filename . ".pdf");
            try {
                exec("convert -trim '".$path."/".$filename.".pdf[0]' -resize 100% -quality 100 -sharpen 0x1.0 '".$path."/".$filename.".png'");
                exec("convert -trim '".$path."/".$filename.".png' -resize 150x150\! -quality 100 -sharpen 0x1.0 '".$path."/t_".$filename.".png'");
            } catch (Exception $e) {

            }
            $em->persist($archives);
            $em->flush();

            return new Response($this->container->get('templating')->render(
                            'PdfMySiteFrontBundle:Default:result.html.twig', array('archives' => $archives)
            ));
        }
    }

}
