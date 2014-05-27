<?php
namespace Bdls\ProjetBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Place_Vote
 */
class Place_Vote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $issued_on;

    /**
     * @var string
     */
    private $issued_by;

    /**
     * @var \Place_Choice
     */
    private $choice;


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
     * Set issued_on
     *
     * @param \DateTime $issuedOn
     * @return Place_Vote
     */
    public function setIssuedOn($issuedOn)
    {
        $this->issued_on = $issuedOn;

        return $this;
    }

    /**
     * Get issued_on
     *
     * @return \DateTime 
     */
    public function getIssuedOn()
    {
        return $this->issued_on;
    }

    /**
     * Set issued_by
     *
     * @param string $issuedBy
     * @return Place_Vote
     */
    public function setIssuedBy($issuedBy)
    {
        $this->issued_by = $issuedBy;

        return $this;
    }

    /**
     * Get issued_by
     *
     * @return string 
     */
    public function getIssuedBy()
    {
        return $this->issued_by;
    }

    /**
     * Set choice
     *
     * @param \Place_Choice $choice
     * @return Place_Vote
     */
    public function setChoice(\Place_Choice $choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return \Place_Choice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
