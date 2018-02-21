<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactGroupContactRepository")
 */
class KuContactGroupContact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_group_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact_group;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event_group;

    /**
     * @return mixed
     */
    public function getIdContactGroupContact()
    {
        return $this->id_contact_group_contact;
    }

    /**
     * @return mixed
     */
    public function getKuIdContactGroup()
    {
        return $this->ku_id_contact_group;
    }

    /**
     * @param mixed $ku_id_contact_group
     */
    public function setKuIdContactGroup($ku_id_contact_group)
    {
        $this->ku_id_contact_group = $ku_id_contact_group;
    }

    /**
     * @return mixed
     */
    public function getKuIdEventGroup()
    {
        return $this->ku_id_event_group;
    }

    /**
     * @param mixed $ku_id_event_group
     */
    public function setKuIdEventGroup($ku_id_event_group)
    {
        $this->ku_id_event_group = $ku_id_event_group;
    }

}
