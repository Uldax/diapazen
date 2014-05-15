<?php

/** @MappedSuperclass */
class Vote
{
	/** @Id @Column(type="integer") @GeneratedValue */
	protected $id;

	/** @Column(type="datetime") */
	protected $issued_on;

	/** @Column(type="text") */
	protected $issued_by;
}

/** @Entity
    @Table(name="dpz_textvote")
 */
class Text_Vote extends Vote
{
	/**
	  @ManyToOne(targetEntity="Text_Choice", inversedBy="votes")
	  @JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

/** @Entity
    @Table(name="dpz_datevote")
 */
class Date_Vote extends Vote
{
	/**
	  @ManyToOne(targetEntity="Date_Choice", inversedBy="votes")
	  @JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

/** @Entity
    @Table(name="dpz_placevote")
 */
class Place_Vote extends Vote
{
	/**
	  @ManyToOne(targetEntity="Place_Choice", inversedBy="votes")
	  @JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

