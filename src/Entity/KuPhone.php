<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuPhoneRepository")
 */
class KuPhone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_phone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_phone_label;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_country;

    /**
     * @return mixed
     */
    public function getIdPhone()
    {
        return $this->id_phone;
    }

    /**
     * @return mixed
     */
    public function getKuPhoneLabel()
    {
        return $this->ku_phone_label;
    }

    /**
     * @param mixed $ku_phone_label
     */
    public function setKuPhoneLabel($ku_phone_label)
    {
        $this->ku_phone_label = $ku_phone_label;
    }

    /**
     * @return mixed
     */
    public function getKuIdCountry()
    {
        return $this->ku_id_country;
    }

    /**
     * @param mixed $ku_id_country
     */
    public function setKuIdCountry($ku_id_country)
    {
        $this->ku_id_country = $ku_id_country;
    }

}
