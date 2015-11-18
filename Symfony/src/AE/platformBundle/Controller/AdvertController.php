<?php
// src/AE/platformBundle/Controller/AdvertController.php

namespace AE\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdvertController extends Controller
{
    public function homepageAction()
    {
        return $this->render('AEplatformBundle:Advert:homepage.php.twig');
    }

    public function faqAction()
    {
        return $this->render('AEplatformBundle:Advert:faq.php.twig');
    }
}

?>
