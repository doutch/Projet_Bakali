<?php

namespace Davyb\DashBoardBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 */
class Adresse
{
    /**
     * @var string
     */
    private $rue;
    
    /**
     * @var string
     */
    private $nRue;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var integer
     */
    private $codePostal;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var integer
     */
    private $idAdresse;

    /**
     * @var \Davyb\DashBoardBundle\Entity\Profil
     */
    private $idProfil;
    
    /**
     * @var string
     */
    private $region;


    /**
     * Set rue
     *
     * @param string $rue
     * @return Adresse
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     * @return Adresse
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     * @return Adresse
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Get idAdresse
     *
     * @return integer 
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set idProfil
     *
     * @param \Davyb\DashBoardBundle\Entity\Profil $idProfil
     * @return Adresse
     */
    public function setIdProfil(\Davyb\DashBoardBundle\Entity\Profil $idProfil = null)
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get idProfil
     *
     * @return \Davyb\DashBoardBundle\Entity\Profil 
     */
    public function getIdProfil()
    {
        return $this->idProfil;
    }


    /**
     * Set region
     *
     * @param string $region
     * @return Adresse
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }
    


    /**
     * Set nRue
     *
     * @param string $nRue
     * @return Adresse
     */
    public function setNRue($nRue)
    {
        $this->nRue = $nRue;

        return $this;
    }

    /**
     * Get nRue
     *
     * @return string 
     */
    public function getNRue()
    {
        return $this->nRue;
    }
}
