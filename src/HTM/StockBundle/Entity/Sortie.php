<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="sortie")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\SortieRepository")
 */
class Sortie
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
     * @var float
     *
     * @ORM\Column(name="prix_vente", type="float")
     */
    private $prixVente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
    *@ORM\ManyToOne(targetEntity="Produit")
    *@ORM\JoinColumn(name="Produit_id",referencedColumnName="id")
    */
    Private $produit;

     /**
    *@ORM\ManyToOne(targetEntity="Magasinier")
    *@ORM\JoinColumn(name="Magasinier_id",referencedColumnName="id")
    */
    Private $magasinier;


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
     * @return Sortie
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
     * Set prixVente
     *
     * @param float $prixVente
     * @return Sortie
     */
    public function setPrixVente($prixVente)
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    /**
     * Get prixVente
     *
     * @return float
     */
    public function getPrixVente()
    {
        return $this->prixVente;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Sortie
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set produit
     *
     * @param \HTM\StockBundle\Entity\Produit $produit
     * @return Sortie
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
     * Set magasinier
     *
     * @param \HTM\StockBundle\Entity\Magasinier $magasinier
     * @return Sortie
     */
    public function setMagasinier(\HTM\StockBundle\Entity\Magasinier $magasinier = null)
    {
        $this->magasinier = $magasinier;

        return $this;
    }

    /**
     * Get magasinier
     *
     * @return \HTM\StockBundle\Entity\Magasinier 
     */
    public function getMagasinier()
    {
        return $this->magasinier;
    }
}
