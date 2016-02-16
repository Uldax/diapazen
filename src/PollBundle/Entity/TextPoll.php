<?php

namespace PollBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
    @ORM\Table(name="dpz_textpoll")
 */
class TextPoll extends Poll
{
	/**
	  @ORM\OneToMany(targetEntity="TextChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}

    /**
     * Add choices
     *
     * @param \PollBundle\Entity\TextChoice $choices
     * @return TextPoll
     */
    public function addChoice(\PollBundle\Entity\TextChoice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \PollBundle\Entity\TextChoice $choices
     */
    public function removeChoice(\PollBundle\Entity\TextChoice $choices)
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
