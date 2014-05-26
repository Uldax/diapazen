<?php
namespace Bdls\ProjetBundle\Controller;


use Doctrine\ORM\Mapping as ORM;

/**
 * Text_Poll
 */
class Text_Poll
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $created_on;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $choices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->choices = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set created_on
     *
     * @param \DateTime $createdOn
     * @return Text_Poll
     */
    public function setCreatedOn($createdOn)
    {
        $this->created_on = $createdOn;

        return $this;
    }

    /**
     * Get created_on
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Text_Poll
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add choices
     *
     * @param \Text_Choice $choices
     * @return Text_Poll
     */
    public function addChoice(\Text_Choice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \Text_Choice $choices
     */
    public function removeChoice(\Text_Choice $choices)
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
