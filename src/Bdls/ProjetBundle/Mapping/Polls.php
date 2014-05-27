<?php

use Bdls\ProjetBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @ORM\MappedSuperclass */
class Poll
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	protected $id;

	/** @ORM\Column(type="datetime") */
	protected $created_on;
        
        /** @ORM\ManyToOne(targetEntity="User")
	    @ORM\JoinColumn(nullable=false) 
         */
	protected $created_by;

        /** @ORM\Column(type="text")*/
	protected $name;
}

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
}

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
}

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
}

