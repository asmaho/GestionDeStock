<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\SalePointProductRepository")
 */
class SalePointProduct
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
    *@ORM\ManyToOne(targetEntity="PointDeVente" , inversedBy="productStock")
    *@ORM\JoinColumn(name="sale_point_id",referencedColumnName="id")
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
     * Set salePoint
     *
     * @param \HTM\StockBundle\Entity\PointdeVente $salePoint
     * @return SalePointProduct
     */
    public function setSalePoint(\HTM\StockBundle\Entity\PointdeVente $salePoint = null)
    {
        $this->salePoint = $salePoint;

        return $this;
    }

    /**
     * Get salePoint
     *
     * @return \HTM\StockBundle\Entity\PointdeVente 
     */
    public function getSalePoint()
    {
        return $this->salePoint;
    }
}
