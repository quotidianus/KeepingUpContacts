<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuCountryRepository")
 */
class KuCountry
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_country_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_country_address_format;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_country_phone_format;

    /**
     * @return mixed
     */
    public function getIdCountry()
    {
        return $this->id_country;
    }

    /**
     * @return mixed
     */
    public function getKuCountryName()
    {
        return $this->ku_country_name;
    }

    /**
     * @param mixed $ku_country_name
     */
    public function setKuCountryName($ku_country_name)
    {
        $this->ku_country_name = $ku_country_name;
    }

    /**
     * @return mixed
     */
    public function getKuCountryAddressFormat()
    {
        return $this->ku_country_address_format;
    }

    /**
     * @param mixed $ku_country_address_format
     */
    public function setKuCountryAddressFormat($ku_country_address_format)
    {
        $this->ku_country_address_format = $ku_country_address_format;
    }

    /**
     * @return mixed
     */
    public function getKuCountryPhoneFormat()
    {
        return $this->ku_country_phone_format;
    }

    /**
     * @param mixed $ku_country_phone_format
     */
    public function setKuCountryPhoneFormat($ku_country_phone_format)
    {
        $this->ku_country_phone_format = $ku_country_phone_format;
    }

}
