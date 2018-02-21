<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventRepository")
 */
class KuEvent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_event_description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ku_event_begin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ku_event_end;

    /**
     * @ORM\Column(type="time")
     */
    private $ku_event_recurrence;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_event_alert;

    /**
     * @ORM\Column(type="text")
     */
    private $ku_event_notes;

    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->id_event;
    }

    /**
     * @return mixed
     */
    public function getKuEventDescription()
    {
        return $this->ku_event_description;
    }

    /**
     * @param mixed $ku_event_description
     */
    public function setKuEventDescription($ku_event_description)
    {
        $this->ku_event_description = $ku_event_description;
    }

    /**
     * @return mixed
     */
    public function getKuEventBegin()
    {
        return $this->ku_event_begin;
    }

    /**
     * @param mixed $ku_event_begin
     */
    public function setKuEventBegin($ku_event_begin)
    {
        $this->ku_event_begin = $ku_event_begin;
    }

    /**
     * @return mixed
     */
    public function getKuEventEnd()
    {
        return $this->ku_event_end;
    }

    /**
     * @param mixed $ku_event_end
     */
    public function setKuEventEnd($ku_event_end)
    {
        $this->ku_event_end = $ku_event_end;
    }

    /**
     * @return mixed
     */
    public function getKuEventRecurrence()
    {
        return $this->ku_event_recurrence;
    }

    /**
     * @param mixed $ku_event_recurrence
     */
    public function setKuEventRecurrence($ku_event_recurrence)
    {
        $this->ku_event_recurrence = $ku_event_recurrence;
    }

    /**
     * @return mixed
     */
    public function getKuEventAlert()
    {
        return $this->ku_event_alert;
    }

    /**
     * @param mixed $ku_event_alert
     */
    public function setKuEventAlert($ku_event_alert)
    {
        $this->ku_event_alert = $ku_event_alert;
    }

    /**
     * @return mixed
     */
    public function getKuEventNotes()
    {
        return $this->ku_event_notes;
    }

    /**
     * @param mixed $ku_event_notes
     */
    public function setKuEventNotes($ku_event_notes)
    {
        $this->ku_event_notes = $ku_event_notes;
    }

}
