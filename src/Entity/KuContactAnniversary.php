<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactAnniversaryRepository")
 */
class KuContactAnniversary
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_anniversary;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_anniversary;

    /**
     * @return mixed
     */
    public function getIdContactAnniversary()
    {
        return $this->id_contact_anniversary;
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
    public function getKuIdAnniversary()
    {
        return $this->ku_id_anniversary;
    }

    /**
     * @param mixed $ku_id_anniversary
     */
    public function setKuIdAnniversary($ku_id_anniversary)
    {
        $this->ku_id_anniversary = $ku_id_anniversary;
    }

}