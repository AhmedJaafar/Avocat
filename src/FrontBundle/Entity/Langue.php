<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\LangueRepository")
 */
class Langue
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


      /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
  private $user;

    /**
     * @var bool
     *
     * @ORM\Column(name="Arabe", type="boolean")
     */
    private $arabe;

    /**
     * @var bool
     *
     * @ORM\Column(name="Anglais", type="boolean")
     */
    private $anglais;

    /**
     * @var bool
     *
     * @ORM\Column(name="Francais", type="boolean")
     */
    private $francais;

    /**
     * @var bool
     *
     * @ORM\Column(name="Chinois", type="boolean")
     */
    private $chinois;

    /**
     * @var bool
     *
     * @ORM\Column(name="Espagnol", type="boolean")
     */
    private $espagnol;

    /**
     * @var bool
     *
     * @ORM\Column(name="Finladais", type="boolean")
     */
    private $finladais;

    /**
     * @var bool
     *
     * @ORM\Column(name="Grec", type="boolean")
     */
    private $grec;

    /**
     * @var bool
     *
     * @ORM\Column(name="Italien", type="boolean")
     */
    private $italien;

    /**
     * @var bool
     *
     * @ORM\Column(name="Norvegiens", type="boolean")
     */
    private $norvegiens;

    /**
     * @var bool
     *
     * @ORM\Column(name="Portugais", type="boolean")
     */
    private $portugais;

    /**
     * @var bool
     *
     * @ORM\Column(name="Russe", type="boolean")
     */
    private $russe;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set arabe
     *
     * @param boolean $arabe
     *
     * @return Langue
     */
    public function setArabe($arabe)
    {
        $this->arabe = $arabe;

        return $this;
    }

    /**
     * Get arabe
     *
     * @return bool
     */
    public function getArabe()
    {
        return $this->arabe;
    }

    /**
     * Set anglais
     *
     * @param boolean $anglais
     *
     * @return Langue
     */
    public function setAnglais($anglais)
    {
        $this->anglais = $anglais;

        return $this;
    }

    /**
     * Get anglais
     *
     * @return bool
     */
    public function getAnglais()
    {
        return $this->anglais;
    }

    /**
     * Set francais
     *
     * @param boolean $francais
     *
     * @return Langue
     */
    public function setFrancais($francais)
    {
        $this->francais = $francais;

        return $this;
    }

    /**
     * Get francais
     *
     * @return bool
     */
    public function getFrancais()
    {
        return $this->francais;
    }

    /**
     * Set chinois
     *
     * @param boolean $chinois
     *
     * @return Langue
     */
    public function setChinois($chinois)
    {
        $this->chinois = $chinois;

        return $this;
    }

    /**
     * Get chinois
     *
     * @return bool
     */
    public function getChinois()
    {
        return $this->chinois;
    }

    /**
     * Set espagnol
     *
     * @param boolean $espagnol
     *
     * @return Langue
     */
    public function setEspagnol($espagnol)
    {
        $this->espagnol = $espagnol;

        return $this;
    }

    /**
     * Get espagnol
     *
     * @return bool
     */
    public function getEspagnol()
    {
        return $this->espagnol;
    }

    /**
     * Set finladais
     *
     * @param boolean $finladais
     *
     * @return Langue
     */
    public function setFinladais($finladais)
    {
        $this->finladais = $finladais;

        return $this;
    }

    /**
     * Get finladais
     *
     * @return bool
     */
    public function getFinladais()
    {
        return $this->finladais;
    }

    /**
     * Set grec
     *
     * @param boolean $grec
     *
     * @return Langue
     */
    public function setGrec($grec)
    {
        $this->grec = $grec;

        return $this;
    }

    /**
     * Get grec
     *
     * @return bool
     */
    public function getGrec()
    {
        return $this->grec;
    }

    /**
     * Set italien
     *
     * @param boolean $italien
     *
     * @return Langue
     */
    public function setItalien($italien)
    {
        $this->italien = $italien;

        return $this;
    }

    /**
     * Get italien
     *
     * @return bool
     */
    public function getItalien()
    {
        return $this->italien;
    }

    /**
     * Set norvegiens
     *
     * @param boolean $norvegiens
     *
     * @return Langue
     */
    public function setNorvegiens($norvegiens)
    {
        $this->norvegiens = $norvegiens;

        return $this;
    }

    /**
     * Get norvegiens
     *
     * @return bool
     */
    public function getNorvegiens()
    {
        return $this->norvegiens;
    }

    /**
     * Set portugais
     *
     * @param boolean $portugais
     *
     * @return Langue
     */
    public function setPortugais($portugais)
    {
        $this->portugais = $portugais;

        return $this;
    }

    /**
     * Get portugais
     *
     * @return bool
     */
    public function getPortugais()
    {
        return $this->portugais;
    }

    /**
     * Set russe
     *
     * @param boolean $russe
     *
     * @return Langue
     */
    public function setRusse($russe)
    {
        $this->russe = $russe;

        return $this;
    }

    /**
     * Get russe
     *
     * @return bool
     */
    public function getRusse()
    {
        return $this->russe;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Langue
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
