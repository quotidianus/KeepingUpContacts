<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactAddressRepository")
 */
class KuContactAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_address;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_address;

    /**
     * @return mixed
     */
    public function getIdContactAddress()
    {
        return $this->id_contact_address;
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
    public function getKuIdAddress()
    {
        return $this->ku_id_address;
    }

    /**
     * @param mixed $ku_id_address
     */
    public function setKuIdAddress($ku_id_address)
    {
        $this->ku_id_address = $ku_id_address;
    }

}
