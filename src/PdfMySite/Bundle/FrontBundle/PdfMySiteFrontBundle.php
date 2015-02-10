<?php

namespace PdfMySite\Bundle\FrontBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PdfMySiteFrontBundle extends Bundle
{
//    public function boot()
//    {
//        $router = $this->container->get('router');
//        $event  = $this->container->get('event_dispatcher');
//
//        //listen presta_sitemap.populate event
//        $event->addListener(
//            SitemapPopulateEvent::ON_SITEMAP_POPULATE,
//            function(SitemapPopulateEvent $event) use ($router){
//                //get absolute homepage url
//                $url = $router->generate('homepage', array(), true);
//
//                //add homepage url to the urlset named default
//                $event->getGenerator()->addUrl(
//                    new UrlConcrete(
//                        $url,
//                        new \DateTime(),
//                        UrlConcrete::CHANGEFREQ_HOURLY,
//                        1
//                    ),
//                    'default'
//                );
//        });
//    }
}
