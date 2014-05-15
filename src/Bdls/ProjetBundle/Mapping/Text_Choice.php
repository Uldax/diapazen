<?php

/** @Entity
    @Table(name="dpz_textchoice") */
class Text_Choice
{
	/** @Id @Column(type="integer") @GeneratedValue */
	private $id;

	/** @Column(type="text") */
	private $text;

	/** @ManyToOne(targetEntity="Text_Poll", inversedBy="choices")
	    @JoinColumn(nullable=false)
	 */
	private $poll;

	/** @OneToMany(targetEntity="Text_Vote", mappedBy="choice", orphanRemoval=true, cascade={"all"}) */
	private $votes;


	public function __construct()
	{
		$this->votes = new ArrayCollection();
	}
}

