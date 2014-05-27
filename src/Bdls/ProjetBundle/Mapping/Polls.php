<?php

use Bdls\ProjetBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @MappedSuperclass */
class Poll
{
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	/** @Column(type="datetime") */
	protected $created_on;
        
        /** @ManyToOne(targetEntity="User")
	    @JoinColumn(nullable=false) 
         */
	protected $created_by;

        /** @Column(type="text")*/
	protected $name;
}

/** @Entity
    @Table(name="dpz_textpoll")
 */
class TextPoll extends Poll
{
	/**
	  @OneToMany(targetEntity="TextChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}
}

/** @Entity
    @Table(name="dpz_datepoll")
 */
class DatePoll extends Poll
{
	/**
	  @OneToMany(targetEntity="DateChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}
}

/** @Entity
    @Table(name="dpz_placepoll")
 */
class PlacePoll extends Poll
{
	/**
	  @OneToMany(targetEntity="PlaceChoice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}
}

