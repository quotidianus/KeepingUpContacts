<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuAddressRepository")
 */
class KuAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_address_label;

     /**
     * @ORM\Column(type="string", length=200)
     */
    private $ku_address_street;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_address_city;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_address_state;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_address_zip;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_country;

    /**
     * @return mixed
     */
    public function getIdKuAddress()
    {
        return $this->id_ku_address;
    }

    /**
     * @return mixed
     */
    public function getKuAddressLabel()
    {
        return $this->ku_address_label;
    }

    /**
     * @param mixed $ku_address_label
     */
    public function setKuAddressLabel($ku_address_label)
    {
        $this->ku_address_label = $ku_address_label;
    }

    /**
     * @return mixed
     */
    public function getKuAddressStreet()
    {
        return $this->ku_address_street;
    }

    /**
     * @param mixed $ku_address_street
     */
    public function setKuAddressStreet($ku_address_street)
    {
        $this->ku_address_street = $ku_address_street;
    }

    /**
     * @return mixed
     */
    public function getKuAddressCity()
    {
        return $this->ku_address_city;
    }

    /**
     * @param mixed $ku_address_city
     */
    public function setKuAddressCity($ku_address_city)
    {
        $this->ku_address_city = $ku_address_city;
    }

    /**
     * @return mixed
     */
    public function getKuAddressState()
    {
        return $this->ku_address_state;
    }

    /**
     * @param mixed $ku_address_state
     */
    public function setKuAddressState($ku_address_state)
    {
        $this->ku_address_state = $ku_address_state;
    }

    /**
     * @return mixed
     */
    public function getKuAddressZip()
    {
        return $this->ku_address_zip;
    }

    /**
     * @param mixed $ku_address_zip
     */
    public function setKuAddressZip($ku_address_zip)
    {
        $this->ku_address_zip = $ku_address_zip;
    }

    /**
     * @return mixed
     */
    public function getKuIdCountry()
    {
        return $this->ku_id_country;
    }

    /**
     * @param mixed $ku_id_address
     */
    public function setKuIdCountry($ku_id_country)
    {
        $this->ku_id_country = $ku_id_country;
    }

}
