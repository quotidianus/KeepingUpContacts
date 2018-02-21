<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactNetworkRepository")
 */
class KuContactNetwork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_network;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_network;

    /**
     * @return mixed
     */
    public function getIdContactNetwork()
    {
        return $this->id_contact_network;
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
    public function getKuIdNetwork()
    {
        return $this->ku_id_network;
    }

    /**
     * @param mixed $ku_id_network
     */
    public function setKuIdNetwork($ku_id_network)
    {
        $this->ku_id_network = $ku_id_network;
    }

}
