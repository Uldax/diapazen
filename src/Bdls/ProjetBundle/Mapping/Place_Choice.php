<?php

/** @Entity
    @Table(name="dpz_placechoice") */
class Place_Choice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="float") */
	private $latitude;

	/** @Column(type="float") */
	private $longitude;

	/** @ManyToOne(targetEntity="Place_Poll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="Place_Vote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

