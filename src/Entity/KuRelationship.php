<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuRelationshipRepository")
 */
class KuRelationship
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_relationship;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_relationship_label;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_relationship_reverse;

    /**
     * @return mixed
     */
    public function getIdRelationship()
    {
        return $this->id_relationship;
    }

    /**
     * @return mixed
     */
    public function getKuRelationshipLabel()
    {
        return $this->ku_relationship_label;
    }

    /**
     * @param mixed $ku_relationship_label
     */
    public function setKuRelationshipLabel($ku_relationship_label)
    {
        $this->ku_relationship_label = $ku_relationship_label;
    }

    /**
     * @return mixed
     */
    public function getKuRelationshipReverse()
    {
        return $this->ku_relationship_reverse;
    }

    /**
     * @param mixed $ku_relationship_reverse
     */
    public function setKuRelationshipReverse($ku_relationship_reverse)
    {
        $this->ku_relationship_reverse = $ku_relationship_reverse;
    }

}
