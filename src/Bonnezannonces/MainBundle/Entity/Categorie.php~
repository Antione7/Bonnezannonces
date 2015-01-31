<?php

namespace Bonnezannonces\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 * @ORM\Entity(repositoryClass="Bonnezannonces\MainBundle\Entity\CategorieRepository")
 * @ORM\Table(name="categorie", indexes={@ORM\Index(name="FK_categorie_id_categorie_1", columns={"id_categorie_1"})})
 */
class Categorie
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=false)
     */
    private $libelle;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie_1", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie1;



    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Categorie
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set idCategorie1
     *
     * @param \Bonnezannonces\MainBundle\Entity\Categorie $idCategorie1
     * @return Categorie
     */
    public function setIdCategorie1(\Bonnezannonces\MainBundle\Entity\Categorie $idCategorie1 = null)
    {
        $this->idCategorie1 = $idCategorie1;

        return $this;
    }

    /**
     * Get idCategorie1
     *
     * @return \Bonnezannonces\MainBundle\Entity\Categorie 
     */
    public function getIdCategorie1()
    {
        return $this->idCategorie1;
    }
    
    public function __toString()
    {
    return $this->libelle;
    }
}
