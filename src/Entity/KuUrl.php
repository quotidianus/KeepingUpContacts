<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuUrlRepository")
 */
class KuUrl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_url;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_url_label;

    /**
     * @return mixed
     */
    public function getIdUrl()
    {
        return $this->id_url;
    }

    /**
     * @return mixed
     */
    public function getKuUrlLabel()
    {
        return $this->ku_url_label;
    }

    /**
     * @param mixed $ku_url_label
     */
    public function setKuUrlLabel($ku_url_label)
    {
        $this->ku_url_label = $ku_url_label;
    }

}
