<?php

namespace Bdls\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaceVote
 */
class PlaceVote
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
     * @var \Bdls\ProjetBundle\Entity\PlaceChoice
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
     * @return PlaceVote
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
     * @return PlaceVote
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
     * @param \Bdls\ProjetBundle\Entity\PlaceChoice $choice
     * @return PlaceVote
     */
    public function setChoice(\Bdls\ProjetBundle\Entity\PlaceChoice $choice)
    {
        $this->choice = $choice;
    
        return $this;
    }

    /**
     * Get choice
     *
     * @return \Bdls\ProjetBundle\Entity\PlaceChoice 
     */
    public function getChoice()
    {
        return $this->choice;
    }
}
