<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactEmailRepository")
 */
class KuContactEmail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_email;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_email;

    /**
     * @return mixed
     */
    public function getIdContactEmail()
    {
        return $this->id_contact_email;
    }

    /**
     * @return mixed
     */
    public function getKuIdContact()
    {
        return $this->ku_id_contact;
    }

    /**
     * @param mixed $ku_id_contact
     */
    public function setKuIdContact($ku_id_contact)
    {
        $this->ku_id_contact = $ku_id_contact;
    }

    /**
     * @return mixed
     */
    public function getKuIdEmail()
    {
        return $this->ku_id_email;
    }

    /**
     * @param mixed $ku_id_email
     */
    public function setKuIdEmail($ku_id_email)
    {
        $this->ku_id_email= $ku_id_email;
    }

}