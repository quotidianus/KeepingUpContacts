<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEventGroupRepository")
 */
class KuEventGroup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_event_group;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_event_group_name;

    /**
     * @return mixed
     */
    public function getIdEventGroup()
    {
        return $this->id_event_group;
    }

    /**
     * @return mixed
     */
    public function getKuEventGroupName()
    {
        return $this->ku_event_group_name;
    }

    /**
     * @param mixed $ku_event_group_name
     */
    public function setKuEventGroupName($ku_event_group_name)
    {
        $this->ku_event_group_name = $ku_event_group_name;
    }

}
