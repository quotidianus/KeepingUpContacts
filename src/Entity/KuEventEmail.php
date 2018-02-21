<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventEmailRepository")
 */
class KuEventEmail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_email;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_email;

    /**
     * @return mixed
     */
    public function getIdEventEmail()
    {
        return $this->id_event_email;
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
    public function getKuIdEmail()
    {
        return $this->ku_id_email;
    }

    /**
     * @param mixed $ku_id_email
     */
    public function setKuIdEmail($ku_id_email)
    {
        $this->ku_id_email = $ku_id_email;
    }

}
