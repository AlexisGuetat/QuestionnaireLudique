<?php

namespace ATC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="ATC\AppBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="intitule", type="string", length=255, unique=true)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_un_juste", type="string", length=255)
     */
    private $reponseUnJuste;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_deux_fausse", type="string", length=255)
     */
    private $reponseDeuxFausse;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_trois_fausse", type="string", length=255)
     */
    private $reponseTroisFausse;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_quatre_fausse", type="string", length=255)
     */
    private $reponseQuatreFausse;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_explication", type="string", length=255)
     */
    private $reponseExplication;

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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Question
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set reponseUnJuste
     *
     * @param string $reponseUnJuste
     *
     * @return Question
     */
    public function setReponseUnJuste($reponseUnJuste)
    {
        $this->reponseUnJuste = $reponseUnJuste;

        return $this;
    }

    /**
     * Get reponseUnJuste
     *
     * @return string
     */
    public function getReponseUnJuste()
    {
        return $this->reponseUnJuste;
    }

    /**
     * Set reponseDeuxFausse
     *
     * @param string $reponseDeuxFausse
     *
     * @return Question
     */
    public function setReponseDeuxFausse($reponseDeuxFausse)
    {
        $this->reponseDeuxFausse = $reponseDeuxFausse;

        return $this;
    }

    /**
     * Get reponseDeuxFausse
     *
     * @return string
     */
    public function getReponseDeuxFausse()
    {
        return $this->reponseDeuxFausse;
    }

    /**
     * Set reponseTroisFausse
     *
     * @param string $reponseTroisFausse
     *
     * @return Question
     */
    public function setReponseTroisFausse($reponseTroisFausse)
    {
        $this->reponseTroisFausse = $reponseTroisFausse;

        return $this;
    }

    /**
     * Get reponseTroisFausse
     *
     * @return string
     */
    public function getReponseTroisFausse()
    {
        return $this->reponseTroisFausse;
    }

    /**
     * Set reponseQuatreFausse
     *
     * @param string $reponseQuatreFausse
     *
     * @return Question
     */
    public function setReponseQuatreFausse($reponseQuatreFausse)
    {
        $this->reponseQuatreFausse = $reponseQuatreFausse;

        return $this;
    }

    /**
     * Get reponseQuatreFausse
     *
     * @return string
     */
    public function getReponseQuatreFausse()
    {
        return $this->reponseQuatreFausse;
    }

    /**
     * Set reponseExplication
     *
     * @param string $reponseExplication
     *
     * @return Question
     */
    public function setReponseExplication($reponseExplication)
    {
        $this->reponseExplication = $reponseExplication;

        return $this;
    }

    /**
     * Get reponseExplication
     *
     * @return string
     */
    public function getReponseExplication()
    {
        return $this->reponseExplication;
    }

}

