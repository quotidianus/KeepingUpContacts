<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuAnniversaryRepository")
 */
class KuAnniversary
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_anniversary;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_anniversary_label;

    /**
     * @ORM\Column(type="date")
     */
    private $ku_anniversary_date;

    /**
     * @return mixed
     */
    public function getIdAnniversary()
    {
        return $this->id_anniversary;
    }

    /**
     * @return mixed
     */
    public function getKuAnniversaryLabel()
    {
        return $this->ku_anniversary_label;
    }

    /**
     * @param mixed $ku_anniversary_label
     */
    public function setKuAnniversaryLabel($ku_anniversary_label)
    {
        $this->ku_anniversary_label = $ku_anniversary_label;
    }

    /**
     * @return mixed
     */
    public function getKuAnniversaryDate()
    {
        return $this->ku_anniversary_date;
    }

    /**
     * @param mixed $ku_anniversary_date
     */
    public function setKuAnniversaryDate($ku_anniversary_date)
    {
        $this->ku_anniversary_date = $ku_anniversary_date;
    }

}