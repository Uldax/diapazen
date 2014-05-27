<?php

use Doctrine\ORM\Mapping as ORM;

namespace Bdls\ProjetBundle\Entity;

/** @ORM\MappedSuperclass */
class Vote
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	protected $id;

	/** @ORM\Column(type="datetime") */
	protected $issued_on;

	/** @ORM\Column(type="text") */
	protected $issued_by;
}

/** @ORM\Entity
    @ORM\Table(name="dpz_textvote")
 */
class TextVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="TextChoice", inversedBy="votes")
	  @ORM\JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

/** @ORM\Entity
    @ORM\Table(name="dpz_datevote")
 */
class DateVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="DateChoice", inversedBy="votes")
	  @ORM\JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

/** @ORM\Entity
    @ORM\Table(name="dpz_placevote")
 */
class PlaceVote extends Vote
{
	/**
	  @ORM\ManyToOne(targetEntity="PlaceChoice", inversedBy="votes")
	  @ORM\JoinColumn(nullable=false)
	  */
	private $choice;


	public function __construct()
	{
		$this->choice = new ArrayCollection();
	}
}

