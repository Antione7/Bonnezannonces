<?php

namespace Bonnezannonces\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="FK_reponse_id_annonce", columns={"id_annonce"})})
 * @ORM\Entity(repositoryClass="Bonnezannonces\MainBundle\Entity\ReponseRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Reponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=512, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce", inversedBy="reponse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_annonce", referencedColumnName="id_annonce", nullable=false)
     * })
     */
    private $annonce;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;
    
    public function __construct($annonce) {
        $this->dateCreation = new \DateTime();
        $this->annonce = $annonce;
    }

    /**
     * Get idReponse
     *
     * @return integer 
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Reponse
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Reponse
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
     * Set email
     *
     * @param string $email
     * @return Reponse
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Reponse
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set annonce
     *
     * @param \Bonnezannonces\MainBundle\Entity\Annonce $annonce
     * @return Reponse
     */
    public function setAnnonce(\Bonnezannonces\MainBundle\Entity\Annonce $annonce)
    {
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Get annonce
     *
     * @return \Bonnezannonces\MainBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
}
