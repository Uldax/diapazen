<?php

namespace Bdls\ProjetBundle\Controller;
//use Bdls\ProjetBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ModelController extends Controller
{
	public function insertDateChoice()
	{
		//$date = 
		$pool       = $_SESSION['pool'];
		
		$dateChoice = new  Bdls\ProjetBundle\Controller\Date_Choice();
		$dateChoice->setDate($pool->poll_expiration_date);
		$dateChoice->setPoll($pool);
	}
	
	public function insertDatePoll()
	{
		$createdOn  = date('Y-m-d H:i:s');
		$pool       = $_SESSION['pool'];
		
		$datePoll = new Bdls\ProjetBundle\Controller\Date_Poll();
		$datePoll->setCreatedOn($createdOn);
		$datePoll->setName($pool->pollTitle);
	}
	
	public function insertDateVote()
	{
		$issuedOn  = date('Y-m-d H:i:s');
		$pool     = $_SESSION['pool'];
		
		$dateVote = new Bdls\ProjetBundle\Controller\Date_Vote();
		$user     = $this->get('security.context')->getToken()->getUser();
		$textVote->setChoice($pool->getPollId());
		$dateVote->setIssuedBy($user);
		$dateVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertPlaceChoice()
	{
		$latitude   = 0;
		$longitude  = 0;
		$pool       = $_SESSION['pool'];
		
		$placeChoice = new \Place_Choice();
		$placeChoice->setDate($pool->poll_expiration_date);
		$placeChoice->setPoll($pool);
		// lat et lon ///////////////////////////////////////////
		$placeChoice->setLatitude($latitude);
		$placeChoice->setLongitude($longitude);
	}
	
	public function insertPlacePoll()
	{
		$createdOn  = date('Y-m-d H:i:s');
		$pool       = $_SESSION['pool'];
		$placePoll  = new \Place_Poll();
		$placePoll->setCreatedOn($createdOn);
		$placePoll->setName($pool->pollTitle);
	}
	
	public function insertPlaceVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool = $_SESSION['pool'];
		
		$placeVote = new \Place_Vote();
		$user      = $this->get('security.context')->getToken()->getUser();
		$textVote->setChoice($pool->getPollId());
		$placeVote->setIssuedBy($user);
		$placeVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertTextChoice()
	{
		$pool       = $_SESSION['pool'];
		
		$textChoice = new \Text_Choice();
		$textChoice->setDate($pool->poll_expiration_date);
		$textChoice->setText($pool->pollDescription);
		$textChoice->setPoll($pool);
	}
	
	public function insertTextPoll()
	{
		$createdOn  = date('Y-m-d H:i:s');
		$pool       = $_SESSION['pool'];

		$textPoll   = new \Text_Poll();
		$textPoll->setCreatedOn($createdOn);
		$textPoll->setName($pool->pollTitle);
	}
	
	public function insertTextVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool     = $_SESSION['pool'];
		
		$textVote = new \Text_Vote();
		$user     = $this->get('security.context')->getToken()->getUser();
		$textVote->setChoice($pool->getPollId());
		$textVote->setIssuedBy($user);
		$textVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertVote()
	{
		
	}
}

