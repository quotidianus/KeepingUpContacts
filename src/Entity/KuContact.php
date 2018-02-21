<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KuContactRepository")
 */
class KuContact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_ku_contact;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_prefix;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_first_name;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_middle_name;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_last_name;

     /**
     * @ORM\Column(type="boolean")
     */
    private $ku_contact_is_company;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_company;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_job_title;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_department;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_maiden_name;

     /**
     * @ORM\Column(type="date")
     */
    private $ku_contact_birthday;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_nickname;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_phonetic_first_name;

     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ku_contact_phonetic_last_name;

     /**
     * @ORM\Column(type="text")
     */
    private $ku_contact_notes;

    /**
     * @return mixed
     */
    public function getIdKuContact()
    {
        return $this->id_ku_contact;
    }

    /**
     * @return mixed
     */
    public function getKuContactFirstName()
    {
        return $this->ku_contact_first_name;
    }

    /**
     * @param mixed $ku_contact_first_name
     */
    public function setKuContactFirstName($ku_contact_first_name)
    {
        $this->ku_contact_first_name = $ku_contact_first_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactMiddleName()
    {
        return $this->ku_contact_middle_name;
    }

    /**
     * @param mixed $ku_contact_middle_name
     */
    public function setKuContactMiddleName($ku_contact_middle_name)
    {
        $this->ku_contact_middle_name = $ku_contact_middle_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactLastName()
    {
        return $this->ku_contact_last_name;
    }

    /**
     * @param mixed $ku_contact_last_name
     */
    public function setKuContactLastName($ku_contact_last_name)
    {
        $this->ku_contact_last_name = $ku_contact_last_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactIsCompany()
    {
        return $this->ku_contact_is_company;
    }

    /**
     * @param mixed $ku_contact_is_company
     */
    public function setKuContactIsCompany($ku_contact_is_company)
    {
        $this->ku_contact_is_company = $ku_contact_is_company;
    }

    /**
     * @return mixed
     */
    public function getKuContactCompany()
    {
        return $this->ku_contact_company;
    }

    /**
     * @param mixed $ku_contact_company
     */
    public function setKuContactCompany($ku_contact_company)
    {
        $this->ku_contact_company = $ku_contact_company;
    }

    /**
     * @return mixed
     */
    public function getKuContactJobTitle()
    {
        return $this->ku_contact_job_title;
    }

    /**
     * @param mixed $ku_contact_job_title
     */
    public function setKuContactJobTitle($ku_contact_job_title)
    {
        $this->ku_contact_job_title = $ku_contact_job_title;
    }

    /**
     * @return mixed
     */
    public function getKuContactDepartment()
    {
        return $this->ku_contact_department;
    }

    /**
     * @param mixed $ku_contact_department
     */
    public function setKuContactDepartment($ku_contact_department)
    {
        $this->ku_contact_department = $ku_contact_department;
    }

    /**
     * @return mixed
     */
    public function getKuContactMaidenName()
    {
        return $this->ku_contact_maiden_name;
    }

    /**
     * @param mixed $ku_contact_maiden_name
     */
    public function setKuContactMaidenName($ku_contact_maiden_name)
    {
        $this->ku_contact_maiden_name = $ku_contact_maiden_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactBirthday()
    {
        return $this->ku_contact_birthday;
    }

    /**
     * @param mixed $ku_contact_birthday
     */
    public function setKuContactBirthday($ku_contact_birthday)
    {
        $this->ku_contact_birthday = $ku_contact_birthday;
    }

    /**
     * @return mixed
     */
    public function getKuContactNickname()
    {
        return $this->ku_contact_nickname;
    }

    /**
     * @param mixed $ku_contact_nickname
     */
    public function setKuContactNickname($ku_contact_nickname)
    {
        $this->ku_contact_nickname = $ku_contact_nickname;
    }

    /**
     * @return mixed
     */
    public function getKuContactPhoneticFirstName()
    {
        return $this->ku_contact_phonetic_first_name;
    }

    /**
     * @param mixed $ku_contact_phonetic_first_name
     */
    public function setKuContactPhoneticFirstName($ku_contact_phonetic_first_name)
    {
        $this->ku_contact_phonetic_first_name = $ku_contact_phonetic_first_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactPhoneticLastName()
    {
        return $this->ku_contact_phonetic_last_name;
    }

    /**
     * @param mixed $ku_contact_phonetic_last_name
     */
    public function setKuContactPhoneticLastName($ku_contact_phonetic_last_name)
    {
        $this->ku_contact_phonetic_last_name = $ku_contact_phonetic_last_name;
    }

    /**
     * @return mixed
     */
    public function getKuContactNotes()
    {
        return $this->ku_contact_notes;
    }

    /**
     * @param mixed $ku_contact_notes
     */
    public function setKuContactNotes($ku_contact_notes)
    {
        $this->ku_contact_notes = $ku_contact_notes;
    }

}
