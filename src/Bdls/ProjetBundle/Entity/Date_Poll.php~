<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Date_Poll
 */
class Date_Poll
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
     * @return Date_Poll
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
     * @return Date_Poll
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
     * @param \Date_Choice $choices
     * @return Date_Poll
     */
    public function addChoice(\Date_Choice $choices)
    {
        $this->choices[] = $choices;

        return $this;
    }

    /**
     * Remove choices
     *
     * @param \Date_Choice $choices
     */
    public function removeChoice(\Date_Choice $choices)
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
    /**
     * @var \User
     */
    private $created_by;


    /**
     * Set created_by
     *
     * @param \User $createdBy
     * @return Date_Poll
     */
    public function setCreatedBy(\User $createdBy)
    {
        $this->created_by = $createdBy;
    
        return $this;
    }

    /**
     * Get created_by
     *
     * @return \User 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }
}
