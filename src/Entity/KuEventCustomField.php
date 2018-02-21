<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventCustomFieldRepository")
 */
class KuEventCustomField
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_custom_field;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_event;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_custom_field;

    /**
     * @return mixed
     */
    public function getIdEventCustomField()
    {
        return $this->id_event_custom_field;
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
    public function getKuIdCustomField()
    {
        return $this->ku_id_custom_field;
    }

    /**
     * @param mixed $ku_id_custom_field
     */
    public function setKuIdCustomField($ku_id_custom_field)
    {
        $this->ku_id_custom_field = $ku_id_custom_field;
    }

}
