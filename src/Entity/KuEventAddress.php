<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventAddressRepository")
 */
class KuEventAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_address;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_address;

    /**
     * @return mixed
     */
    public function getIdEventAddress()
    {
        return $this->id_event_address;
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
