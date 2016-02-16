<?php

namespace PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** @ORM\MappedSuperclass */
class Vote
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="datetime") */
	private $issued_on;

	/** @ORM\Column(type="text") */
	private $issued_by;

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
     * @return Vote
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
     * @return Vote
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
}
