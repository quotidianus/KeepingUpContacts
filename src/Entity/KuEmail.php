<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuEmailRepository")
 */
class KuEmail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_email_label;

    /**
     * @return mixed
     */
    public function getIdEmail()
    {
        return $this->id_email;
    }

    /**
     * @return mixed
     */
    public function getKuEmailLabel()
    {
        return $this->ku_email_label;
    }

    /**
     * @param mixed $ku_email_label
     */
    public function setKuEmailLabel($ku_email_label)
    {
        $this->ku_email_label = $ku_email_label;
    }

}
