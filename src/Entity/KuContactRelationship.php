<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactRelationshipRepository")
 */
class KuContactRelationship
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_relationship;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_relationship;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact_parent;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact_child;

    /**
     * @return mixed
     */
    public function getIdContactRelationship()
    {
        return $this->id_contact_relationship;
    }

    /**
     * @return mixed
     */
    public function getKuIdRelationship()
    {
        return $this->ku_id_relationship;
    }

    /**
     * @param mixed $ku_id_relationship
     */
    public function setKuIdRelationship($ku_id_relationship)
    {
        $this->ku_id_relationship = $ku_id_relationship;
    }

    /**
     * @return mixed
     */
    public function getKuIdContactParent()
    {
        return $this->ku_id_contact_parent;
    }

    /**
     * @param mixed $ku_id_contact_parent
     */
    public function setKuIdContactParent($ku_id_contact_parent)
    {
        $this->ku_id_contact_parent = $ku_id_contact_parent;
    }

    /**
     * @return mixed
     */
    public function getKuIdContactChild()
    {
        return $this->ku_id_contact_child;
    }

    /**
     * @param mixed $ku_id_contact_child
     */
    public function setKuIdContactChild($ku_id_contact_child)
    {
        $this->ku_id_contact_child = $ku_id_contact_child;
    }

}
