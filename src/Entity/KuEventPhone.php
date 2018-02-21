<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventPhoneRepository")
 */
class KuEventPhone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_phone;

    /**
     * @return mixed
     */
    public function getIdEventPhone()
    {
        return $this->id_event_phone;
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
