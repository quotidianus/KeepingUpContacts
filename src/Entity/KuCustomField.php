<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuCustomFieldRepository")
 */
class KuCustomField
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_custom_field;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_custom_field_label;

    /**
     * @ORM\Column(type="text")
     */
    private $ku_custom_field_content;

    /**
     * @return mixed
     */
    public function getIdCustomField()
    {
        return $this->id_custom_field;
    }

    /**
     * @return mixed
     */
    public function getKuCustomFieldLabel()
    {
        return $this->ku_custom_field_label;
    }

    /**
     * @param mixed $ku_custom_field_label
     */
    public function setKuCustomFieldLabel($ku_custom_field_label)
    {
        $this->ku_custom_field_label = $ku_custom_field_label;
    }

    /**
     * @return mixed
     */
    public function getKuCustomFieldContent()
    {
        return $this->ku_custom_field_content;
    }

    /**
     * @param mixed $ku_custom_field_content
     */
    public function setKuCustomFieldContent($ku_custom_field_content)
    {
        $this->ku_custom_field_content = $ku_custom_field_content;
    }

}
