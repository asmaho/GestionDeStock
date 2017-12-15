<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointDeVente
 *
 * @ORM\Table(name="point_de_vente")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\PointDeVenteRepository")
 */
class PointDeVente
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
     * @var string
     *
     * @ORM\Column(name="nom_Pv", type="string", length=255)
     */
    private $nomPv;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=255)
     */
    private $gouvernorat;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     *@ORM\OneToOne(targetEntity="Magasinier")
     *@ORM\JoinColumn(name="seller_id",referencedColumnName="id")
     */
    Private $magasinier;

    /**
     *@ORM\OneToMany(targetEntity="Entree", mappedBy="salePoint")
     *@ORM\JoinColumn(name="entree_id",referencedColumnName="id")
     */
    Private $entries;

    /**
     *@ORM\OneToMany(targetEntity="SalePointProduct", mappedBy="salePoint")
     *@ORM\JoinColumn(name="point_id",referencedColumnName="id")
     */
    Private $productStock;

    /**
     *@ORM\OneToMany(targetEntity="DemandeApp", mappedBy="pointDeVente")
     */
    Private $demandes;

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
     * Set nomPv
     *
     * @param string $nomPv
     * @return PointDeVente
     */
    public function setNomPv($nomPv)
    {
        $this->nomPv = $nomPv;

        return $this;
    }

    /**
     * Get nomPv
     *
     * @return string 
     */
    public function getNomPv()
    {
        return $this->nomPv;
    }

    /**
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return PointDeVente
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string 
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return PointDeVente
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return PointDeVente
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return PointDeVente
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }




    /**
     * Set magasinier
     *
     * @param \HTM\StockBundle\Entity\Magasinier $magasinier
     * @return PointDeVente
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

    /**
     * Set entries
     *
     * @param \HTM\StockBundle\Entity\Entree $entries
     * @return PointDeVente
     */
    public function setEntries(\HTM\StockBundle\Entity\Entree $entries = null)
    {
        $this->entries = $entries;

        return $this;
    }

    /**
     * Get entries
     *
     * @return \HTM\StockBundle\Entity\Entree 
     */
    public function getEntries()
    {
        return $this->entries;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entries = new \Doctrine\Common\Collections\ArrayCollection();
        $this->productStock = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add entries
     *
     * @param \HTM\StockBundle\Entity\Entree $entries
     * @return PointDeVente
     */
    public function addEntry(\HTM\StockBundle\Entity\Entree $entries)
    {
        $this->entries[] = $entries;

        return $this;
    }

    /**
     * Remove entries
     *
     * @param \HTM\StockBundle\Entity\Entree $entries
     */
    public function removeEntry(\HTM\StockBundle\Entity\Entree $entries)
    {
        $this->entries->removeElement($entries);
    }

    /**
     * Add productStock
     *
     * @param \HTM\StockBundle\Entity\SalePointProduct $productStock
     * @return PointDeVente
     */
    public function addProductStock(\HTM\StockBundle\Entity\SalePointProduct $productStock)
    {
        $this->productStock[] = $productStock;

        return $this;
    }

    /**
     * Remove productStock
     *
     * @param \HTM\StockBundle\Entity\SalePointProduct $productStock
     */
    public function removeProductStock(\HTM\StockBundle\Entity\SalePointProduct $productStock)
    {
        $this->productStock->removeElement($productStock);
    }

    /**
     * Get productStock
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductStock()
    {
        return $this->productStock;
    }

    

    /**
     * Add demandes
     *
     * @param \HTM\StockBundle\Entity\DemandeApp $demandes
     * @return PointDeVente
     */
    public function addDemande(\HTM\StockBundle\Entity\DemandeApp $demandes)
    {
        $this->demandes[] = $demandes;

        return $this;
    }

    /**
     * Remove demandes
     *
     * @param \HTM\StockBundle\Entity\DemandeApp $demandes
     */
    public function removeDemande(\HTM\StockBundle\Entity\DemandeApp $demandes)
    {
        $this->demandes->removeElement($demandes);
    }

    /**
     * Get demandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDemandes()
    {
        return $this->demandes;
    }
}
