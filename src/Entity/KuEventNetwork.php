<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventNetworkRepository")
 */
class KuEventNetwork
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_network;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_network;

    /**
     * @return mixed
     */
    public function getIdEventNetwork()
    {
        return $this->id_event_network;
    }

    /**
     * @return mixed
     */
    public function getKuIdEvent()
    {
        return $this->ku_id_event;
    }

    /**
     * @param mixed $ku_id_event
     */
    public function setKuIdEvent($ku_id_event)
    {
        $this->ku_id_event = $ku_id_event;
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
