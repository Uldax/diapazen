<?php

namespace PollBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Session;

/** @ORM\Entity
    @ORM\Table(name="dpz_datepoll")
 */
class DatePoll extends Poll
{
	/**
	  @ORM\OneToMany(targetEntity="DateChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}

    /**
     * Add choices
     *
     * @param \PollBundle\Entity\DateChoice $choices
     * @return DatePoll
     */
    public function addChoice(\PollBundle\Entity\DateChoice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \PollBundle\Entity\DateChoice $choices
     */
    public function removeChoice(\PollBundle\Entity\DateChoice $choices)
    {
        $this->choices->removeElement($choices);
    }

    /**
     * Get choices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChoices()
    {
        return $this->choices;
    }
}
