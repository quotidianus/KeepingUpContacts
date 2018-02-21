<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactEventRepository")
 */
class KuContactEvent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @return mixed
     */
    public function getIdContactEvent()
    {
        return $this->id_contact_event;
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

}
