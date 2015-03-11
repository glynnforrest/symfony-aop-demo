<?php

namespace AppBundle\Entity;


/**
 * Author
 */
class Author
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $forename;

    /**
     * @var string
     */
    private $surname;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set forename
     *
     * @param  string $forename
     * @return Author
     */
    public function setForename($forename)
    {
        $this->forename = $forename;

        return $this;
    }

    /**
     * Get forename
     *
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * Set surname
     *
     * @param  string $surname
     * @return Author
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    public function getFullname()
    {
        return $this->forename.' '.$this->surname;
    }
}
