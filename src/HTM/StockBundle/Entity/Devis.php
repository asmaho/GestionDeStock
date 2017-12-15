<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\DevisRepository")
 */
class Devis
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
     * @ORM\Column(name="nbr_piece", type="integer")
     */
    private $nbrPiece;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire", type="float")
     */
    private $prixUnitaire;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_total", type="float")
     */
    private $montantTotal;




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
     * Set nbrPiece
     *
     * @param integer $nbrPiece
     * @return Devis
     */
    public function setNbrPiece($nbrPiece)
    {
        $this->nbrPiece = $nbrPiece;

        return $this;
    }

    /**
     * Get nbrPiece
     *
     * @return integer 
     */
    public function getNbrPiece()
    {
        return $this->nbrPiece;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     * @return Devis
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float 
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set montantTotal
     *
     * @param float $montantTotal
     * @return Devis
     */
    public function setMontantTotal($montantTotal)
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }

    /**
     * Get montantTotal
     *
     * @return float 
     */
    public function getMontantTotal()
    {
        return $this->montantTotal;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligne_offre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligne_offre
     *
     * @param \HTM\StockBundle\Entity\Ligne_Offre $ligneOffre
     * @return Devis
     */
    public function addLigneOffre(\HTM\StockBundle\Entity\Ligne_Offre $ligneOffre)
    {
        $this->ligne_offre[] = $ligneOffre;

        return $this;
    }

    /**
     * Remove ligne_offre
     *
     * @param \HTM\StockBundle\Entity\Ligne_Offre $ligneOffre
     */
    public function removeLigneOffre(\HTM\StockBundle\Entity\Ligne_Offre $ligneOffre)
    {
        $this->ligne_offre->removeElement($ligneOffre);
    }

    /**
     * Get ligne_offre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneOffre()
    {
        return $this->ligne_offre;
    }
}
