<?php

namespace Bonnezannonces\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="FK_annonce_id_categorie", columns={"id_categorie"})})
 * @ORM\Entity(repositoryClass="Bonnezannonces\MainBundle\Entity\AnnonceRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Annonce
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=512, nullable=false)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie", onDelete="CASCADE")
     * })
     */
    protected $idCategorie;
    
    
    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Bonnezannonces\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=false)
     * })
     */
    protected $idUser;
    
         /**
     * @Assert\File(
     *    maxSize= "1024k",
     *    maxSizeMessage = "Votre fichier doit être inférieur à 1Mo",
     *    mimeTypes = {"image/jpeg", "image/png", "image/gif"},
     *    mimeTypesMessage = "Merci d'uploader un jpg, png ou gif"
     *    )
     */
    protected $imageFile;
    
    /**
    * @ORM\OneToMany(targetEntity="Bonnezannonces\MainBundle\Entity\Reponse", mappedBy="annonce")
    */ 
    private $reponse;
    
    public function __construct($user) {
        $this->dateCreation = new \DateTime();
        $this->idUser = $user;
        $this->reponse = new ArrayCollection();
    }

    /**
     * Get idAnnonce
     *
     * @return integer 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
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
     * Set image
     *
     * @param string $image
     * @return Annonce
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Annonce
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
     * Set idCategorie
     *
     * @param \Bonnezannonces\MainBundle\Entity\Categorie $idCategorie
     * @return Annonce
     */
    public function setIdCategorie(\Bonnezannonces\MainBundle\Entity\Categorie $idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return \Bonnezannonces\MainBundle\Entity\Categorie 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idUser
     *
     * @param \Bonnezannonces\UserBundle\Entity\User $idUser
     * @return Annonce
     */
    public function setIdUser(\Bonnezannonces\UserBundle\Entity\User $idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Bonnezannonces\UserBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    
    public function getImageFile() {
        return $this->imageFile;
    }

    public function setImageFile(UploadedFile $imageFile) {
        $this->imageFile = $imageFile;
        return $this;
    }
    
        // Retourner le chemin absolu d'un fichier (surtout utilisé dans un controller)
    public function getAbsolutePath() {
        return null === $this->image ? null : 
                $this->getUploadRootDir()."/".$this->image;
    }
    
    // Récupérer le chemin d'un fichié uploadé (surtout utilisé depuis un template Twig
    public function getWebPath() {
        return null === $this->image ? null :
                $this->getUploadDir().'/'.$this->image;
    }
    
  protected function getUploadRootDir() {
   return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }
  
  protected function getUploadDir() {
        return "uploads/images";
    }
    
  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
    public function preUpload() {
        if(null !== $this->imageFile) {
            // Crypter le nom du fichier uploadé
  $this->image = 
  sha1(uniqid(mt_rand(),true)).'.'.$this->imageFile->guessExtension();
        }
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if(null === $this->imageFile) {
            return;
        }
        $this->imageFile->move($this->getUploadRootDir(),
                $this->image);
        
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    /**
     * Add reponse
     *
     * @param \Bonnezannonces\MainBundle\Entity\Reponse $reponse
     * @return Annonce
     */
    public function addReponse(\Bonnezannonces\MainBundle\Entity\Reponse $reponse)
    {
        $this->reponse[] = $reponse;

        return $this;
    }

    /**
     * Remove reponse
     *
     * @param \Bonnezannonces\MainBundle\Entity\Reponse $reponse
     */
    public function removeReponse(\Bonnezannonces\MainBundle\Entity\Reponse $reponse)
    {
        $this->reponse->removeElement($reponse);
    }

    /**
     * Get reponse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}
