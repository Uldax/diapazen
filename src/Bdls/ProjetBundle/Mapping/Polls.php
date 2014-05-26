<?php

use ORM\MappedSuperclass;
use Bdls\ProjetBundle\Entity\User as User;

namespace Bdls\ProjetBundle\Entity;

/** @ORM\MappedSuperclass */
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
class Text_Poll extends Poll
{
	/**
	  @OneToMany(targetEntity="Text_Choice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
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
class Date_Poll extends Poll
{
	/**
	  @OneToMany(targetEntity="Date_Choice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
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
class Place_Poll extends Poll
{
	/**
	  @OneToMany(targetEntity="Place_Choice", mappedBy="poll", orphanRemoval=true, cascade={"all"})
	  */
	private $choices;


	public function __construct()
	{
		$this->choices = new ArrayCollection();
	}
}

