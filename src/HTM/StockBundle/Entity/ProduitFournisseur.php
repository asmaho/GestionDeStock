<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduitFournisseur
 *
 * @ORM\Table(name="produit_fournisseur")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\ProduitFournisseurRepository")
 */
class ProduitFournisseur
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
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     *@ORM\ManyToOne(targetEntity="Produit")
     *@ORM\JoinColumn(name="Produit_id",referencedColumnName="id")
     */
    Private $produit;

    /**
     *@ORM\ManyToOne(targetEntity="Fournisseur")
     *@ORM\JoinColumn(name="fournisseur_id",referencedColumnName="id")
     */
    Private $fournisseur;
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
     * Set quantite
     *
     * @param integer $quantite
     * @return ProduitFournisseur
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set produit
     *
     * @param \HTM\StockBundle\Entity\Produit $produit
     * @return ProduitFournisseur
     */
    public function setProduit(\HTM\StockBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \HTM\StockBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set fournisseur
     *
     * @param \HTM\StockBundle\Entity\Fournisseur $fournisseur
     * @return ProduitFournisseur
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
}
