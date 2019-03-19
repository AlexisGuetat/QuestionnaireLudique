<?php

namespace ATC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Proxies\__CG__\ATC\AppBundle\Entity\Question;

/**
 * Contenu
 * 
 * @ORM\Table(name="contenu")
 * @ORM\Entity(repositoryClass="ATC\AppBundle\Repository\ContenuRepository")
 */
class Contenu
{

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="ATC\AppBundle\Entity\Questionnaire", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Id
     */
    private $questionnaire;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="ATC\AppBundle\Entity\Question", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @ORM\Id
     */
    private $question;


    
    /**
     * Get Question
     *
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

   /**
     * Get Questionnaire
     *
     * @return int
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

     /**
     * set question
     *
     * @return Contenu
     */
    public function setQuestion(Question $question)
    {
         $this->question = $question;
         return $this;
    }

   /**
     * set questionnaire
     *@param Questionnaire $questionnaire
     *
     * @return Contenu
     */
    public function setQuestionnaire(Questionnaire $questionnaire)
    {
         $this->questionnaire = $questionnaire;
         return $this;
    }
}

