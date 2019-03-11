<?php

namespace ATC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity(repositoryClass="ATC\AppBundle\Repository\JoueurRepository")
 */
class Joueur
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
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="temps_rep", type="integer")
     */
    private $tempsRep;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_form", type="string", length=255)
     */
    private $themeForm;

    /**
     * @var string
     *
     * @ORM\Column(name="difficult_theme", type="string", length=255)
     */
    private $difficultTheme;


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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Joueur
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
     * Set score
     *
     * @param integer $score
     *
     * @return Joueur
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Joueur
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set tempsRep
     *
     * @param integer $tempsRep
     *
     * @return Joueur
     */
    public function setTempsRep($tempsRep)
    {
        $this->tempsRep = $tempsRep;

        return $this;
    }

    /**
     * Get tempsRep
     *
     * @return int
     */
    public function getTempsRep()
    {
        return $this->tempsRep;
    }

    /**
     * Set themeForm
     *
     * @param string $themeForm
     *
     * @return Joueur
     */
    public function setThemeForm($themeForm)
    {
        $this->themeForm = $themeForm;

        return $this;
    }

    /**
     * Get themeForm
     *
     * @return string
     */
    public function getThemeForm()
    {
        return $this->themeForm;
    }

    /**
     * Set difficultTheme
     *
     * @param string $difficultTheme
     *
     * @return Joueur
     */
    public function setDifficultTheme($difficultTheme)
    {
        $this->difficultTheme = $difficultTheme;

        return $this;
    }

    /**
     * Get difficultTheme
     *
     * @return string
     */
    public function getDifficultTheme()
    {
        return $this->difficultTheme;
    }
}

