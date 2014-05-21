<?php

namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModelController extends Controller
{
//	public function insertTextAction()
//	{
//		$sqlValues = "";
//		$keys = array_keys($values);
//		for($i = 0; $i < count($values); $i++)
//		{
//			$sqlValues .= strtoupper(":".$keys[$i]);
//			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
//		}
//
//		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
//							$table,
//							implode(', ', array_keys($values)),
//							$sqlValues
//							);
//
//		$request = $this->getPDO()->prepare($query);
//		
//		// On binde les valeurs
//		foreach ($values as $key => $value)
//			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));
//
//		return $request->execute();
//	}
//	
//		public function insertDateAction()
//	{
//		$sqlValues = "";
//		$keys = array_keys($values);
//		for($i = 0; $i < count($values); $i++)
//		{
//			$sqlValues .= strtoupper(":".$keys[$i]);
//			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
//		}
//
//		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
//							$table,
//							implode(', ', array_keys($values)),
//							$sqlValues
//							);
//
//		$request = $this->getPDO()->prepare($query);
//		
//		// On binde les valeurs
//		foreach ($values as $key => $value)
//			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));
//
//		return $request->execute();
//	}
//	
//		public function insertIntAction()
//	{
//		$sqlValues = "";
//		$keys = array_keys($values);
//		for($i = 0; $i < count($values); $i++)
//		{
//			$sqlValues .= strtoupper(":".$keys[$i]);
//			$sqlValues .= $i < count($values) - 1 ? ", " : ""; 
//		}
//
//		$query = sprintf("INSERT INTO %s (%s) VALUES (%s)", 
//							$table,
//							implode(', ', array_keys($values)),
//							$sqlValues
//							);
//
//		$request = $this->getPDO()->prepare($query);
//		
//		// On binde les valeurs
//		foreach ($values as $key => $value)
//			$request->bindValue(strtoupper(':'.$key), htmlspecialchars($value));
//
//		return $request->execute();
//	}
	
	public function insertDateChoice()
	{
		//$date = 
		$pool       = $_SESSION['pool'];
		
		$dateChoice = new \Date_Choice();
		$dateChoice->setDate($pool->poll_expiration_date);
		$dateChoice->setPoll($pool);
	}
	
	public function insertDatePoll()
	{
		$createdOn  = date('Y-m-d H:i:s');
		$pool       = $_SESSION['pool'];
		
		$datePoll = new \Date_Poll();
		$datePoll->setCreatedOn($createdOn);
		$datePoll->setName($pool->pollTitle);
	}
	
	public function insertDateVote()
	{
		$issuedOn  = date('Y-m-d H:i:s');
		$pool     = $_SESSION['pool'];
		
		$dateVote = new \Date_Vote();
		//Choice ?
		//--> $dateVote->setChoice($choice);
		//$_SESSION['user'] ???
		//--> $dateVote->setIssuedBy($issuedBy);
		$dateVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertPlaceChoice()
	{
		//$date = 
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
		
		$placePoll = new \Place_Poll();
		$placePoll->setCreatedOn($createdOn);
		$placePoll->setName($pool->pollTitle);
	}
	
	public function insertPlaceVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool = $_SESSION['pool'];
		
		$placeVote = new \Place_Vote();
		//$placeVote->setChoice($choice);
		//$placeVote->setIssuedBy($issuedBy);
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
		//$textVote->setChoice($choice);
		//$textVote->setIssuedBy($issuedBy);
		$textVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertVote()
	{
		
	}
}

