<?php
/**
 * Created by PhpStorm.
 * User: Florence
 * Date: 22/10/2015
 * Time: 19:38
 */

namespace AE\platformBundle\Form\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;

class ContactHandler
{

    protected $request;
    protected $form;
    protected $mailer;

    public function __construct(Form $form, Request $request, $mailer)
    {
        $this->form = $form;
        $this->request = $request;
        $this->mailer = $mailer;
    }

    public function process()
    {
        if ('POST' == $this->request->getMethod())
        {
            $this->form->bindRequest($this->request);
            $data = $this->form->getData();
            $this->onSuccess($data);

            return true;
        }

        return false;
    }


    protected function onSuccess()
    {
        $le_message = \Swift_Message::newInstance()
            ->setContentType('text/html')
            ->setSubject($data['society'])
            ->setFrom($data['email'])
            ->setTo('testpst4a@gmail.com')
            ->setBody($data['message']);

        $this->mailer->send($le_message);
    }
}