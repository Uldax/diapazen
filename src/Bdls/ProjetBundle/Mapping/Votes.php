<?php

use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

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
class TextVote extends Vote
{
	/**
	  @ManyToOne(targetEntity="TextChoice", inversedBy="votes")
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
class DateVote extends Vote
{
	/**
	  @ManyToOne(targetEntity="DateChoice", inversedBy="votes")
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
class PlaceVote extends Vote
{
	/**
	  @ManyToOne(targetEntity="PlaceChoice", inversedBy="votes")
	  @JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

