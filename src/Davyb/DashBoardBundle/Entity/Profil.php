<?php

namespace Davyb\DashBoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profil
 */
class Profil
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $dateNaissance;

    /**
     * @var string
     */
    private $cheminPhotoProfil;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $idProfil;

    /**
     * @var \Davyb\DashBoardBundle\Entity\User
     */
    private $idUser;

    /**
     * @var \Davyb\DashBoardBundle\Entity\Sexe
     */
    private $idSexe;
    
    /**
     * @var \Davyb\DashBoardBundle\Entity\Sexe
     */
    public  $fichierImage;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $telephone;
    
    
    /**
     * @var string
     */
    private $description;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
    	$this->telephone = new \Doctrine\Common\Collections\ArrayCollection();
    }
    


    /**
     * Set nom
     *
     * @param string $nom
     * @return Profil
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
     * @return Profil
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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Profil
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Profil
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set cheminPhotoProfil
     *
     * @param string $cheminPhotoProfil
     * @return Profil
     */
    public function setCheminPhotoProfil($cheminPhotoProfil)
    {
        $this->cheminPhotoProfil = $cheminPhotoProfil;

        return $this;
    }

    /**
     * Get cheminPhotoProfil
     *
     * @return string 
     */
    public function getCheminPhotoProfil()
    {
        return $this->cheminPhotoProfil;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Profil
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
     * Get idProfil
     *
     * @return integer 
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Set idUser
     *
     * @param \Davyb\DashBoardBundle\Entity\User $idUser
     * @return Profil
     */
    public function setIdUser(\Davyb\DashBoardBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Davyb\DashBoardBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idSexe
     *
     * @param \Davyb\DashBoardBundle\Entity\Sexe $idSexe
     * @return Profil
     */
    public function setIdSexe(\Davyb\DashBoardBundle\Entity\Sexe $idSexe = null)
    {
        $this->idSexe = $idSexe;

        return $this;
    }

    /**
     * Get idSexe
     *
     * @return \Davyb\DashBoardBundle\Entity\Sexe 
     */
    public function getIdSexe()
    {
        return $this->idSexe;
    }
    
    /**
     * Add telephone
     *
     * @param \Davyb\DashBoardBundle\Entity\Telephone $telephone
     * @return Profil
     */
    public function addTelephone(\Davyb\DashBoardBundle\Entity\Telephone $telephone)
    {
    	$this->telephone[] = $telephone;
    
    	return $this;
    }
    
    /**
     * Remove telephone
     *
     * @param \Davyb\DashBoardBundle\Entity\Telephone $telephone
     */
    public function removeTelephone(\Davyb\DashBoardBundle\Entity\Telephone $telephone)
    {
    	$this->telephone->removeElement($telephone);
    }
    
    /**
     * Get telephone
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelephone()
    {
    	return $this->telephone;
    }
    
    
    /**
     * Set description
     *
     * @param string $description
     * @return Profil
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
    
    
    protected function getUploadDir()
    {
    	return 'uploads/profils';
    }
    
    protected function getUploadRootDir()
    {
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    public function getWebPath()
    {
    	return null === $this->cheminPhotoProfil ? null : $this->getUploadDir().'/'.$this->cheminPhotoProfil;
    }
    
    public function getAbsolutePath()
    {
    	return null === $this->cheminPhotoProfil ? null : $this->getUploadRootDir().'/'.$this->cheminPhotoProfil;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()
    {
    	if (null !== $this->file) {
			// do whatever you want to generate a unique name
			$this->logo = uniqid().'.'.$this->file->guessExtension();
		}
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
			return;
		}
		
		// if there is an error when moving the file, an exception will
		// be automatically thrown by move(). This will properly prevent
		// the entity from being persisted to the database on error
		$this->file->move($this->getUploadRootDir(), $this->logo);
		unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
    	if ($file = $this->getAbsolutePath()) {
			unlink($file);
		}
    }

    /**
     * Add adresse
     *
     * @param \Davyb\DashBoardBundle\Entity\Adresse $adresse
     * @return Profil
     */
    public function addAdresse(\Davyb\DashBoardBundle\Entity\Adresse $adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \Davyb\DashBoardBundle\Entity\Adresse $adresse
     */
    public function removeAdresse(\Davyb\DashBoardBundle\Entity\Adresse $adresse)
    {
        $this->adresse->removeElement($adresse);
    }
}
