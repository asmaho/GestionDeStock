<?php


namespace HTM\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *@ORM\OneToOne(targetEntity="\HTM\StockBundle\Entity\Magasinier", mappedBy="user",cascade={"persist"})
     *@ORM\JoinColumn(name="magasinier_id",referencedColumnName="id",nullable=true)
     */
    Private $magasinier;
    /**
     *@ORM\OneToOne(targetEntity="\HTM\StockBundle\Entity\Fournisseur", mappedBy="user",cascade={"persist"})
     *@ORM\JoinColumn(name="fournisseur_id",referencedColumnName="id",nullable=true)
     */
    Private $fournisseur;
    /**
     *@ORM\OneToMany(targetEntity="\HTM\StockBundle\Entity\DemandeApp", mappedBy="user")
     */
    Private $demandes;
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set magasinier
     *
     * @param \HTM\UserBundle\Entity\User $magasinier
     * @return User
     */
    public function setMagasinier(\HTM\StockBundle\Entity\Magasinier $magasinier = null)
    {
        $this->magasinier = $magasinier;

        return $this;
    }

    /**
     * Get magasinier
     *
     * @return \HTM\UserBundle\Entity\User
     */
    public function getMagasinier()
    {
        return $this->magasinier;
    }

    /**
     * Set fournisseur
     *
     * @param \HTM\UserBundle\Entity\User $fournisseur
     * @return User
     */
    public function setFournisseur(\HTM\StockBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \HTM\UserBundle\Entity\User
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }
}
