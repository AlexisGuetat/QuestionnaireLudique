<?php

namespace ATC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 * @ORM\Entity
 * @ORM\Table(name="contenu")
 */
class Contenu
{

        /**
     * @var int
     *
     * @ORM\Column(name="idQuestionnaire", type="integer")
     * @ORM\Id
     */
    private $idQuestionnaire;

    /**
     * @var int
     *
     * @ORM\Column(name="idQuestion", type="integer")
     * @ORM\Id
     */
    private $idQuestion;


    
    /**
     * Get idQuestion
     *
     * @return int
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

   /**
     * Get idQuestionnaire
     *
     * @return int
     */
    public function getIdQuestionnaire()
    {
        return $this->idQuestionnaire;
    }

}

