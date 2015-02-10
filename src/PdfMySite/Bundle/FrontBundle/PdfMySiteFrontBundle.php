<?php

namespace PdfMySite\Bundle\FrontBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Presta\SitemapBundle\Event\SitemapPopulateEvent;
use Presta\SitemapBundle\Sitemap\Url\UrlConcrete;

class PdfMySiteFrontBundle extends Bundle {

    public function boot() {
        $router = $this->container->get('router');
        $event = $this->container->get('event_dispatcher');
        $em = $this->container->get('doctrine')->getManager();

        //listen presta_sitemap.populate event
        $event->addListener(
                SitemapPopulateEvent::ON_SITEMAP_POPULATE, function(SitemapPopulateEvent $event) use ($router) {
            //get absolute homepage url

            $conn = $this->container->get('database_connection');
            $query = "select a.slug from archives a where a.active = true and a.archive = true;";
            $archives = $conn->fetchAll($query, array());

            foreach ($archives as &$archive) {
                $url = $router->generate('pdf_my_site_front_archive', array('slug' => $archive['slug']), true);

                //add homepage url to the urlset named default
                $event->getGenerator()->addUrl(
                        new UrlConcrete(
                        $url, new \DateTime(), UrlConcrete::CHANGEFREQ_HOURLY, 1
                        ), 'archives'
                );
            }
        });
    }

}
