<?php
// src/AE/platformBundle/Controller/AdvertController.php

namespace AE\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AE\platformBundle\Form\Type\ContactType;
use AE\platformBundle\Form\Handler\ContactHandler;


class ContactController extends Controller
{
    public function contactAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());

        $request = $this->get('request');

        $formHandler = new ContactHandler($form, $request, $this->get('mailer'));

        $process = $formHandler->process();


        if ($process)
        {
            $this->get('session')->setFlash('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        }

        return $this->render('AEplatformBundle:Contact:pagecontact.php.twig',
                    array(
                        'form' => $form->createView(),
                        'hasError' => $request->getMethod() == 'POST' && !$form->isValid()
                    ));
    }
}

?>