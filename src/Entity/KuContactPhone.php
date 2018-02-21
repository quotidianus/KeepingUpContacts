<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactPhoneRepository")
 */
class KuContactPhone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_phone;

    /**
     * @return mixed
     */
    public function getIdContactPhone()
    {
        return $this->id_contact_phone;
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
    public function getKuIdPhone()
    {
        return $this->ku_id_phone;
    }

    /**
     * @param mixed $ku_id_phone
     */
    public function setKuIdPhone($ku_id_phone)
    {
        $this->ku_id_phone = $ku_id_phone;
    }

}
