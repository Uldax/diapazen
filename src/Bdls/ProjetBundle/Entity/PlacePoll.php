<?php

namespace Bdls\ProjetBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity
    @ORM\Table(name="dpz_placepoll")
 */
class PlacePoll extends Poll
{
	/**
	  @ORM\OneToMany(targetEntity="PlaceChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}

    /**
     * Add choices
     *
     * @param \Bdls\ProjetBundle\Entity\PlaceChoice $choices
     * @return PlacePoll
     */
    public function addChoice(\Bdls\ProjetBundle\Entity\PlaceChoice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \Bdls\ProjetBundle\Entity\PlaceChoice $choices
     */
    public function removeChoice(\Bdls\ProjetBundle\Entity\PlaceChoice $choices)
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
