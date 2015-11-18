<?php

namespace AE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EntityController extends Controller
{
 /*   public function indexAction($name)
    {
        return $this->render('AEUserBundle:Entity:User.php', array('name' => $name));
    }
*/
    public function userAction()
    {
        return $this->render('AEUserBundle:Entity:User.php');
    }
}
