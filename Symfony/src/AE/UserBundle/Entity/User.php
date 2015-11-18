<?php

namespace AE\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ae_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /*
     * @ORM\Column(type="string", length=255)
     */

    private $nom;

    /*
    * @ORM\Column(type="string", length=255)
    */

    private $prenom;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function setNom($nom){

        $this->nom = $nom;
    }

    public function getNom(){

        return $this->nom;
    }

    public function setPrenom($prenom){

        $this->nom = $prenom;
    }

    public function getPrenom(){

        return $this->prenom;
    }

}
