<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactUrlRepository")
 */
class KuContactUrl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_contact_url;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_contact;

    /**
     * @ORM\Column(type="integer")
     */
    private $ku_id_url;

    /**
     * @return mixed
     */
    public function getIdContactUrl()
    {
        return $this->id_contact_url;
    }

    /**
     * @return mixed
     */
    public function getKuIdContact()
    {
        return $this->ku_id_contact;
    }

    /**
     * @param mixed $ku_id_contact
     */
    public function setKuIdContact($ku_id_contact)
    {
        $this->ku_id_contact = $ku_id_contact;
    }

    /**
     * @return mixed
     */
    public function getKuIdUrl()
    {
        return $this->ku_id_url;
    }

    /**
     * @param mixed $ku_id_url
     */
    public function setKuIdUrl($ku_id_url)
    {
        $this->ku_id_url = $ku_id_url;
    }
    
}
