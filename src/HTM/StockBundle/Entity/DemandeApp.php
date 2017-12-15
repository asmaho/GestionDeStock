<?php

namespace HTM\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DemandeApp
 *
 * @ORM\Table(name="demande_app")
 * @ORM\Entity(repositoryClass="HTM\StockBundle\Repository\DemandeAppRepository")
 */
class DemandeApp
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
     * @ORM\Column(name="description", type="string", length=255,nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="date",nullable=true)
     */
    private $dateAjout;

    /**
     * @var int
     * @Assert\NotBlank(message="La quantité est obligatoire")
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;
    /**
     *@ORM\ManyToOne(targetEntity="Produit", inversedBy="demandes")
     */
    Private $produit;
    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $statut=0;
    /**
     *@ORM\ManyToOne(targetEntity="PointDeVente", inversedBy="demandes")
     */
    Private $pointDeVente;
    /**
     *@ORM\ManyToOne(targetEntity="HTM\UserBundle\Entity\User",cascade={"persist"}, inversedBy="demandes")
     */
    Private $user;
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
     * Set objet
     *
     * @param string $objet
     * @return DemandeApp
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return DemandeApp
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
     * Set adresse
     *
     * @param string $adresse
     * @return DemandeApp
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
     * Set description
     *
     * @param string $description
     * @return DemandeApp
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     * @return DemandeApp
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return DemandeApp
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
     * Set tel
     *
     * @param integer $tel
     * @return DemandeApp
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
    public function setPointDeVente(\HTM\StockBundle\Entity\PointDeVente $pointDeVente = null)
    {
        $this->pointDeVente = $pointDeVente;

        return $this;
    }

    /**
     * Get salePoint
     *
     * @return \HTM\StockBundle\Entity\PointDeVente
     */
    public function getPointDeVente()
    {
        return $this->pointDeVente;
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
     * Set user
     *
     * @param \HTM\UserBundle\Entity\User $user
     * @return Magasinier
     */
    public function setUser(\HTM\UserBundle\Entity\User $user = null)
    {
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
     * Set statut
     *
     * @param integer $statut
     * @return DemandeApp
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
