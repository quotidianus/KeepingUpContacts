<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuNetworkRepository")
 */
class KuNetwork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_network;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_network_label;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_user_name;

    /**
     * @return mixed
     */
    public function getIdNetwork()
    {
        return $this->id_network;
    }

    /**
     * @return mixed
     */
    public function getKuNetworkLabel()
    {
        return $this->ku_network_label;
    }

    /**
     * @param mixed $ku_network_label
     */
    public function setKuNetworkLabel($ku_network_label)
    {
        $this->ku_network_label = $ku_network_label;
    }

    /**
     * @return mixed
     */
    public function getKuUserName()
    {
        return $this->ku_user_name;
    }

    /**
     * @param mixed $ku_user_name
     */
    public function setKuUserName($ku_user_name)
    {
        $this->ku_user_name = $ku_user_name;
    }

}
