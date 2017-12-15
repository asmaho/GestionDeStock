<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\fournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;




    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_societe", type="string", length=255)
     */
    private $nomSociete;
    /**
     *@ORM\OneToOne(targetEntity="HTM\UserBundle\Entity\User",cascade={"persist"},inversedBy="fournisseur")
     *@ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    Private $user;
    /**
     *@ORM\OneToMany(targetEntity="ProduitFournisseur", mappedBy="produitFournisseur")
     *@ORM\JoinColumn(name="fournisseur_id",referencedColumnName="id")
     */
    Private $produitFournisseur;

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
     * Set nom
     *
     * @param string $nom
     * @return fournisseur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return fournisseur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return fournisseur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return fournisseur
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
     * Set sexe
     *
     * @param string $sexe
     * @return fournisseur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set nomSociete
     *
     * @param string $nomSociete
     * @return fournisseur
     */
    public function setNomSociete($nomSociete)
    {
        $this->nomSociete = $nomSociete;

        return $this;
    }

    /**
     * Get nomSociete
     *
     * @return string
     */
    public function getNomSociete()
    {
        return $this->nomSociete;
    }




    /**
     * Set user
     *
     * @param \HTM\UserBundle\Entity\User $user
     * @return Fournisseur
     */
    public function setUser(\HTM\UserBundle\Entity\User $user = null)
    {
        $user->setFournisseur($this);
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \HTM\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produitFournisseur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produitFournisseur
     *
     * @param \HTM\StockBundle\Entity\ProduitFournisseur $produitFournisseur
     * @return Fournisseur
     */
    public function addProduitFournisseur(\HTM\StockBundle\Entity\ProduitFournisseur $produitFournisseur)
    {
        $this->produitFournisseur[] = $produitFournisseur;

        return $this;
    }

    /**
     * Remove produitFournisseur
     *
     * @param \HTM\StockBundle\Entity\ProduitFournisseur $produitFournisseur
     */
    public function removeProduitFournisseur(\HTM\StockBundle\Entity\ProduitFournisseur $produitFournisseur)
    {
        $this->produitFournisseur->removeElement($produitFournisseur);
    }

    /**
     * Get produitFournisseur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduitFournisseur()
    {
        return $this->produitFournisseur;
    }
}
