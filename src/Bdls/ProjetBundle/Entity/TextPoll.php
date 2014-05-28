<?php

namespace Bdls\ProjetBundle\Entity;

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
     * @param \Bdls\ProjetBundle\Entity\TextChoice $choices
     * @return TextPoll
     */
    public function addChoice(\Bdls\ProjetBundle\Entity\TextChoice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \Bdls\ProjetBundle\Entity\TextChoice $choices
     */
    public function removeChoice(\Bdls\ProjetBundle\Entity\TextChoice $choices)
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
