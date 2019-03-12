<?php

namespace ATC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 * 
 * @ORM\Table(name="questionnaire")
 * @ORM\Entity(repositoryClass="ATC\AppBundle\Repository\QuestionnaireRepository")
 */
class Questionnaire
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
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     */
    private $titre;

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="ATC\AppBundle\Entity\Themes", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $theme;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ATC\AppBundle\Entity\Difficulte", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $difficulte;
    
   
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Questionnaire
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
     * Set theme
     *
     * @param string $theme
     *
     * @return Questionnaire
     */
    public function setTheme(Themes $theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return integer
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set difficulte
     *
     * @param integer
     *
     * @return Questionnaire
     */
    public function setDifficulte(Difficulte $difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    
    /**
     * Get difficulte
     *
     * @return int
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }
    
}

