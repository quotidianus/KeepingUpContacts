<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactGroupRepository")
 */
class KuContactGroup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_group;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_group_name;

    /**
     * @return mixed
     */
    public function getIdContactGroup()
    {
        return $this->id_contact_group;
    }

    /**
     * @return mixed
     */
    public function getKuContactGroupName()
    {
        return $this->ku_contact_group_name;
    }

    /**
     * @param mixed $ku_contact_group_name
     */
    public function setKuContactGroupName($ku_contact_group_name)
    {
        $this->ku_contact_group_name = $ku_contact_group_name;
    }

}
