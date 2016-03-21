<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\CompetenceRepository")
 */
class Competence
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
     * @ORM\Column(name="droit_civil_et_familial", type="boolean")
     */
    private $droitCivilEtFamilial;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_penal", type="boolean")
     */
    private $droitPenal;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_limmobilier", type="boolean")
     */
    private $droitDeLimmobilier;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_travail", type="boolean")
     */
    private $droitDeTravail;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_des_entreprises", type="boolean")
     */
    private $droitDesEntreprises;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_des_etrangers", type="boolean")
     */
    private $droitDesEtrangers;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_la_consommation", type="boolean")
     */
    private $droitDeLaConsommation;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_commercial", type="boolean")
     */
    private $droitCommercial;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_la_propriete_intellectuelle", type="boolean")
     */
    private $droitDeLaProprieteIntellectuelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_international", type="boolean")
     */
    private $droitInternational;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_administratif", type="boolean")
     */
    private $droitAdministratif;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_la_sante", type="boolean")
     */
    private $droitDeLaSante;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_des_nouvelles_technologies", type="boolean")
     */
    private $droitDesNouvellesTechnologies;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_comptable_et_fiscal", type="boolean")
     */
    private $droitComptableEtFiscal;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_bancaire", type="boolean")
     */
    private $droitBancaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_limage_et_presse", type="boolean")
     */
    private $droitDeLimageEtPresse;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_des_transports", type="boolean")
     */
    private $droitDesTransports;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_de_lenvironnement", type="boolean")
     */
    private $droitDeLenvironnement;

    /**
     * @var bool
     *
     * @ORM\Column(name="droit_du_sport", type="boolean")
     */
    private $droitDuSport;


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
     * Set droitCivilEtFamilial
     *
     * @param boolean $droitCivilEtFamilial
     *
     * @return Competence
     */
    public function setDroitCivilEtFamilial($droitCivilEtFamilial)
    {
        $this->droitCivilEtFamilial = $droitCivilEtFamilial;

        return $this;
    }

    /**
     * Get droitCivilEtFamilial
     *
     * @return bool
     */
    public function getDroitCivilEtFamilial()
    {
        return $this->droitCivilEtFamilial;
    }

    /**
     * Set droitPenal
     *
     * @param boolean $droitPenal
     *
     * @return Competence
     */
    public function setDroitPenal($droitPenal)
    {
        $this->droitPenal = $droitPenal;

        return $this;
    }

    /**
     * Get droitPenal
     *
     * @return bool
     */
    public function getDroitPenal()
    {
        return $this->droitPenal;
    }

    /**
     * Set droitDeLimmobilier
     *
     * @param boolean $droitDeLimmobilier
     *
     * @return Competence
     */
    public function setDroitDeLimmobilier($droitDeLimmobilier)
    {
        $this->droitDeLimmobilier = $droitDeLimmobilier;

        return $this;
    }

    /**
     * Get droitDeLimmobilier
     *
     * @return bool
     */
    public function getDroitDeLimmobilier()
    {
        return $this->droitDeLimmobilier;
    }

    /**
     * Set droitDeTravail
     *
     * @param boolean $droitDeTravail
     *
     * @return Competence
     */
    public function setDroitDeTravail($droitDeTravail)
    {
        $this->droitDeTravail = $droitDeTravail;

        return $this;
    }

    /**
     * Get droitDeTravail
     *
     * @return bool
     */
    public function getDroitDeTravail()
    {
        return $this->droitDeTravail;
    }

    /**
     * Set droitDesEntreprises
     *
     * @param boolean $droitDesEntreprises
     *
     * @return Competence
     */
    public function setDroitDesEntreprises($droitDesEntreprises)
    {
        $this->droitDesEntreprises = $droitDesEntreprises;

        return $this;
    }

    /**
     * Get droitDesEntreprises
     *
     * @return bool
     */
    public function getDroitDesEntreprises()
    {
        return $this->droitDesEntreprises;
    }

    /**
     * Set droitDesEtrangers
     *
     * @param boolean $droitDesEtrangers
     *
     * @return Competence
     */
    public function setDroitDesEtrangers($droitDesEtrangers)
    {
        $this->droitDesEtrangers = $droitDesEtrangers;

        return $this;
    }

    /**
     * Get droitDesEtrangers
     *
     * @return bool
     */
    public function getDroitDesEtrangers()
    {
        return $this->droitDesEtrangers;
    }

    /**
     * Set droitDeLaConsommation
     *
     * @param boolean $droitDeLaConsommation
     *
     * @return Competence
     */
    public function setDroitDeLaConsommation($droitDeLaConsommation)
    {
        $this->droitDeLaConsommation = $droitDeLaConsommation;

        return $this;
    }

    /**
     * Get droitDeLaConsommation
     *
     * @return bool
     */
    public function getDroitDeLaConsommation()
    {
        return $this->droitDeLaConsommation;
    }

    /**
     * Set droitCommercial
     *
     * @param boolean $droitCommercial
     *
     * @return Competence
     */
    public function setDroitCommercial($droitCommercial)
    {
        $this->droitCommercial = $droitCommercial;

        return $this;
    }

    /**
     * Get droitCommercial
     *
     * @return bool
     */
    public function getDroitCommercial()
    {
        return $this->droitCommercial;
    }

    /**
     * Set droitDeLaProprieteIntellectuelle
     *
     * @param boolean $droitDeLaProprieteIntellectuelle
     *
     * @return Competence
     */
    public function setDroitDeLaProprieteIntellectuelle($droitDeLaProprieteIntellectuelle)
    {
        $this->droitDeLaProprieteIntellectuelle = $droitDeLaProprieteIntellectuelle;

        return $this;
    }

    /**
     * Get droitDeLaProprieteIntellectuelle
     *
     * @return bool
     */
    public function getDroitDeLaProprieteIntellectuelle()
    {
        return $this->droitDeLaProprieteIntellectuelle;
    }

    /**
     * Set droitInternational
     *
     * @param boolean $droitInternational
     *
     * @return Competence
     */
    public function setDroitInternational($droitInternational)
    {
        $this->droitInternational = $droitInternational;

        return $this;
    }

    /**
     * Get droitInternational
     *
     * @return bool
     */
    public function getDroitInternational()
    {
        return $this->droitInternational;
    }

    /**
     * Set droitAdministratif
     *
     * @param boolean $droitAdministratif
     *
     * @return Competence
     */
    public function setDroitAdministratif($droitAdministratif)
    {
        $this->droitAdministratif = $droitAdministratif;

        return $this;
    }

    /**
     * Get droitAdministratif
     *
     * @return bool
     */
    public function getDroitAdministratif()
    {
        return $this->droitAdministratif;
    }

    /**
     * Set droitDeLaSante
     *
     * @param boolean $droitDeLaSante
     *
     * @return Competence
     */
    public function setDroitDeLaSante($droitDeLaSante)
    {
        $this->droitDeLaSante = $droitDeLaSante;

        return $this;
    }

    /**
     * Get droitDeLaSante
     *
     * @return bool
     */
    public function getDroitDeLaSante()
    {
        return $this->droitDeLaSante;
    }

    /**
     * Set droitDesNouvellesTechnologies
     *
     * @param boolean $droitDesNouvellesTechnologies
     *
     * @return Competence
     */
    public function setDroitDesNouvellesTechnologies($droitDesNouvellesTechnologies)
    {
        $this->droitDesNouvellesTechnologies = $droitDesNouvellesTechnologies;

        return $this;
    }

    /**
     * Get droitDesNouvellesTechnologies
     *
     * @return bool
     */
    public function getDroitDesNouvellesTechnologies()
    {
        return $this->droitDesNouvellesTechnologies;
    }

    /**
     * Set droitComptableEtFiscal
     *
     * @param boolean $droitComptableEtFiscal
     *
     * @return Competence
     */
    public function setDroitComptableEtFiscal($droitComptableEtFiscal)
    {
        $this->droitComptableEtFiscal = $droitComptableEtFiscal;

        return $this;
    }

    /**
     * Get droitComptableEtFiscal
     *
     * @return bool
     */
    public function getDroitComptableEtFiscal()
    {
        return $this->droitComptableEtFiscal;
    }

    /**
     * Set droitBancaire
     *
     * @param boolean $droitBancaire
     *
     * @return Competence
     */
    public function setDroitBancaire($droitBancaire)
    {
        $this->droitBancaire = $droitBancaire;

        return $this;
    }

    /**
     * Get droitBancaire
     *
     * @return bool
     */
    public function getDroitBancaire()
    {
        return $this->droitBancaire;
    }

    /**
     * Set droitDeLimageEtPresse
     *
     * @param boolean $droitDeLimageEtPresse
     *
     * @return Competence
     */
    public function setDroitDeLimageEtPresse($droitDeLimageEtPresse)
    {
        $this->droitDeLimageEtPresse = $droitDeLimageEtPresse;

        return $this;
    }

    /**
     * Get droitDeLimageEtPresse
     *
     * @return bool
     */
    public function getDroitDeLimageEtPresse()
    {
        return $this->droitDeLimageEtPresse;
    }

    /**
     * Set droitDesTransports
     *
     * @param boolean $droitDesTransports
     *
     * @return Competence
     */
    public function setDroitDesTransports($droitDesTransports)
    {
        $this->droitDesTransports = $droitDesTransports;

        return $this;
    }

    /**
     * Get droitDesTransports
     *
     * @return bool
     */
    public function getDroitDesTransports()
    {
        return $this->droitDesTransports;
    }

    /**
     * Set droitDeLenvironnement
     *
     * @param boolean $droitDeLenvironnement
     *
     * @return Competence
     */
    public function setDroitDeLenvironnement($droitDeLenvironnement)
    {
        $this->droitDeLenvironnement = $droitDeLenvironnement;

        return $this;
    }

    /**
     * Get droitDeLenvironnement
     *
     * @return bool
     */
    public function getDroitDeLenvironnement()
    {
        return $this->droitDeLenvironnement;
    }

    /**
     * Set droitDuSport
     *
     * @param boolean $droitDuSport
     *
     * @return Competence
     */
    public function setDroitDuSport($droitDuSport)
    {
        $this->droitDuSport = $droitDuSport;

        return $this;
    }

    /**
     * Get droitDuSport
     *
     * @return bool
     */
    public function getDroitDuSport()
    {
        return $this->droitDuSport;
    }

    

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Competence
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
