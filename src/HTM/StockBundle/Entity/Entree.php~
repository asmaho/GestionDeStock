<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entree
 *
 * @ORM\Table(name="entree")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\EntreeRepository")
 */
class Entree
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
    *@ORM\ManyToOne(targetEntity="PointDeVente", inversedBy="entries")
    *@ORM\JoinColumn(name="Magasinier_id",referencedColumnName="id")
    */
    Private $salePoint;


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
     * @return Entree
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
     * Set date
     *
     * @param \DateTime $date
     * @return Entree
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
     * @return Entree
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
     * Set salePoint
     *
     * @param \HTM\StockBundle\Entity\PointDeVente $salePoint
     * @return Entree
     */
    public function setSalePoint(\HTM\StockBundle\Entity\PointDeVente $salePoint = null)
    {
        $this->salePoint = $salePoint;

        return $this;
    }

    /**
     * Get salePoint
     *
     * @return \HTM\StockBundle\Entity\PointDeVente 
     */
    public function getSalePoint()
    {
        return $this->salePoint;
    }
}
