<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventUrlRepository")
 */
class KuEventUrl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_url;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_url;

    /**
     * @return mixed
     */
    public function getIdEventUrl()
    {
        return $this->id_event_url;
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
    public function getKuIdUrl()
    {
        return $this->ku_id_url;
    }

    /**
     * @param mixed $ku_id_url
     */
    public function setKuIdUrl($ku_id_url)
    {
        $this->ku_id_url = $ku_id_url;
    }

}
