<?php

namespace Bdls\ProjetBundle\Controller;


abstract class PoolModel
{
	/** 
	 * Identifiant unique du sondage 
	 */
	private $pollId;

	/** 
	 * Identifiant dans l'url du sondage 
	 */
	private $pollUrl;

	/** 
	 * Titre du sondage 
	 */
	private $pollTitle;

	/** 
	 * Description du sondage 
	 */
	private $pollDescription;

	/** 
	 * Date d'expiration du sondage 
	 */
	private $poll_expiration_date;
	
	/**
	 * Choix du sondage
	 */
	private $poll_choices;
	
	/**
	 * Etat du sondage
	 */
	private $poll_etat;
	
	/**
	 * Type de sondage
	 */
	private $poll_type;


	public function getPollId()
	{
		return $this->pollId;
	}
	
	public function getPollUrl() 
	{
		return $this->pollUrl;
	}

	public function getPollTitle() 
	{
		return $this->pollTitle;
	}

	public function getPollDescription() 
	{
		return $this->pollDescription;
	}

	public function getPoll_expiration_date() 
	{
		return $this->poll_expiration_date;
	}
	public function getPoll_etat()
	{
		return $this->poll_etat;
	}
	public function getPoll_type()
	{
		return $this->poll_type;
	}

	public function setPoll_type($poll_type)
	{
		$this->poll_type = $poll_type;
	}

	public function setPoll_etat($poll_etat)
	{
		$this->poll_etat = $poll_etat;
	}

	public function setPollId($pollId)
	{
		$this->pollId = $pollId;
	}

	public function generatePollUrl()
	{
		$this->pollUrl = substr(md5(uniqid()),5,10);
	}

	public function setPollTitle($pollTitle)
	{
		$this->pollTitle = $pollTitle;
	}

	public function setPollDescription($pollDescription)
	{
		$this->pollDescription = $pollDescription;
	}

	public function setPoll_expiration_date($poll_expiration_date)
	{
		$this->poll_expiration_date = $poll_expiration_date;
	}


}

