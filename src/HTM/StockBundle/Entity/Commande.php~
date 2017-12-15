<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @var int
     *
     * @ORM\Column(name="code_devis", type="integer")
     */
    private $codeDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;


     /**
    *@ORM\ManyToOne(targetEntity="Fournisseur")
    *@ORM\JoinColumn(name="Fournisseur_id",referencedColumnName="id")
    */
    Private $fournisseur;

    /**
    *@ORM\ManyToOne(targetEntity="Facture")
    *@ORM\JoinColumn(name="Facture_id",referencedColumnName="id")
    */
    Private $facture;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeDevis
     *
     * @param integer $codeDevis
     * @return Commande
     */
    public function setCodeDevis($codeDevis)
    {
        $this->codeDevis = $codeDevis;

        return $this;
    }

    /**
     * Get codeDevis
     *
     * @return integer 
     */
    public function getCodeDevis()
    {
        return $this->codeDevis;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Commande
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Commande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set fournisseur
     *
     * @param \HTM\StockBundle\Entity\Fournisseur $fournisseur
     * @return Commande
     */
    public function setFournisseur(\HTM\StockBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \HTM\StockBundle\Entity\Fournisseur 
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set facture
     *
     * @param \HTM\StockBundle\Entity\Facture $facture
     * @return Commande
     */
    public function setFacture(\HTM\StockBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \HTM\StockBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }
}
