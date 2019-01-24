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
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse1", type="string", length=255)
     */
    private $reponse1;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse2", type="string", length=255)
     */
    private $reponse2;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse3", type="string", length=255)
     */
    private $reponse3;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse4", type="string", length=255)
     */
    private $reponse4;

    /**
     * @var int
     *
     * @ORM\Column(name="reponse_juste", type="integer")
     */
    private $reponseJuste;


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
     * Set question
     *
     * @param string $question
     *
     * @return Questionnaire
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set reponse1
     *
     * @param string $reponse1
     *
     * @return Questionnaire
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    /**
     * Get reponse1
     *
     * @return string
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * Set reponse2
     *
     * @param string $reponse2
     *
     * @return Questionnaire
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    /**
     * Get reponse2
     *
     * @return string
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * Set reponse3
     *
     * @param string $reponse3
     *
     * @return Questionnaire
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    /**
     * Get reponse3
     *
     * @return string
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * Set reponse4
     *
     * @param string $reponse4
     *
     * @return Questionnaire
     */
    public function setReponse4($reponse4)
    {
        $this->reponse4 = $reponse4;

        return $this;
    }

    /**
     * Get reponse4
     *
     * @return string
     */
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * Set reponseJuste
     *
     * @param integer $reponseJuste
     *
     * @return Questionnaire
     */
    public function setReponseJuste($reponseJuste)
    {
        $this->reponseJuste = $reponseJuste;

        return $this;
    }

    /**
     * Get reponseJuste
     *
     * @return int
     */
    public function getReponseJuste()
    {
        return $this->reponseJuste;
    }
}

