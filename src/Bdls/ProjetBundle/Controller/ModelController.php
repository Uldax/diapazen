<?php
namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Bdls\ProjetBundle\Entity\DateChoice;
use Bdls\ProjetBundle\Entity\DatePoll;
use Bdls\ProjetBundle\Entity\DateVote;

use Bdls\ProjetBundle\Entity\PlaceChoice;
use Bdls\ProjetBundle\Entity\PlacePoll;
use Bdls\ProjetBundle\Entity\PlaceVote;

use Bdls\ProjetBundle\Entity\TextChoice;
use Bdls\ProjetBundle\Entity\TextPoll;
use Bdls\ProjetBundle\Entity\TextVote;

use Doctrine\Common\Collections\ArrayCollection;

/*
 * 
 */
class ModelController extends Controller
{
	private $pool;
	private $user;
	private $doctrineManager;
	
	public function insertDateChoices()
	{
		$choices = $this->pool->getPoll_choices();
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('d')
		   ->from("BdlsProjetBundle:DatePoll", 'd')
		   ->where('d.id = ?1')
		   // Récupérer l'id du user.
		   ->setParameter(1, $_SESSION['currentPollId']); 
		$query = $qb->getQuery();
		$c = $query->getResult();
		
		foreach($choices as $choice)
		{
			$dateChoice = new DateChoice();
			$dateChoice->setPoll($c[0]);
			$dateChoice->setDate($choice);
			
			$this->doctrineManager->persist($dateChoice);
			$this->doctrineManager->flush();
		}
	}
	
	public function insertDatePoll()
	{
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('u')
		   ->from("BdlsProjetBundle:User", 'u')
		   ->where('u.id = ?1')
//////// Récupérer l'id du user.
		   ->setParameter(1, 1); // Sets ?1 to 100, and thus we will fetch a user with u.id = 100
		// get the Query from the QueryBuilder here ...
		$query = $qb->getQuery();
		$user = $query->getResult();
		
		$createdOn  = new \DateTime("now");
		$datePoll = new DatePoll();
		$datePoll->setCreatedOn($createdOn);
		$datePoll->setName($this->pool->getPollTitle());
		$datePoll->setIsOpen($this->pool->getPoll_etat());
		$datePoll->setDescription($this->pool->getPollDescription());
		$datePoll->setClosedOn($this->pool->getPoll_expiration_date());
		$datePoll->setCreatedBy($user[0]);
		$this->doctrineManager->persist($datePoll);
		//pour récupérer la dernière ID...
		$this->doctrineManager->flush();
		$_SESSION['currentPollId'] = $datePoll->getId();
	}
	
	public function insertDateVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool     = $_SESSION['pool'];
		
		$dateVote = new DateVote();
		$user     = $this->get('security.context')->getToken()->getUser();
		$dateVote->setChoice($pool->getPollId());
		//$dateVote->setIssuedBy($user);
		$dateVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertPlaceChoices()
	{
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('d')
		   ->from("BdlsProjetBundle:PlacePoll", 'd')
		   ->where('d.id = ?1')
		   // Récupérer l'id du user.
		   ->setParameter(1, $_SESSION['currentPollId']); 
		$query = $qb->getQuery();
		$c = $query->getResult();
		
		$tabChoices = $_SESSION['position'];
		$length = count($tabChoices);
		for($i = 0; $i<$length;$i+=2)
		{
			$placeChoice = new PlaceChoice();
			$placeChoice->setPoll($c[0]);
			$placeChoice->setLatitude($tabChoices[$i]);
			$placeChoice->setLongitude($tabChoices[$i+1]);
			$this->doctrineManager->persist($placeChoice);
			$this->doctrineManager->flush();
		}
	}
	
	public function insertPlacePoll()
	{
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('u')
		   ->from("BdlsProjetBundle:User", 'u')
		   ->where('u.id = ?1')
		// Récupérer l'id du user.
		   ->setParameter(1, 1); // Sets ?1 to 100, and thus we will fetch a user with u.id = 100
		// get the Query from the QueryBuilder here ...
		$query = $qb->getQuery();
		$user = $query->getResult();
		
		$createdOn  = new \DateTime("now");
		$placePoll = new PlacePoll();
		$placePoll->setCreatedOn($createdOn);
		$placePoll->setName($this->pool->getPollTitle());
		$placePoll->setIsOpen($this->pool->getPoll_etat());
		$placePoll->setDescription($this->pool->getPollDescription());
		$placePoll->setClosedOn($this->pool->getPoll_expiration_date());
		$placePoll->setCreatedBy($user[0]);
		$this->doctrineManager->persist($placePoll);
		//pour récupérer la dernière ID...
		$this->doctrineManager->flush();
		$_SESSION['currentPollId'] = $placePoll->getId();
	}
	
	public function insertPlaceVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool = $_SESSION['pool'];
		
		$placeVote = new PlaceVote();
		$user      = $this->get('security.context')->getToken()->getUser();
		$textVote->setChoice($pool->getPollId());
		$placeVote->setIssuedBy($user);
		$placeVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////	
	public function insertTextChoice($poolId, $choice, $text)
	{
		$textChoice = new TextChoice();
		$textChoice->setDate($choice);
		$textChoice->setPoll($poolId);
		$textChoice->setText($text);
		
		$this->doctrineManager->persist($textChoice);
	}
	
	public function insertTextChoices()
	{
		$choices = $this->pool->getPoll_choices();
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('d')
		   ->from("BdlsProjetBundle:TextPoll", 'd')
		   ->where('d.id = ?1')
		   // Récupérer l'id du user.
		   ->setParameter(1, $_SESSION['currentPollId']); 
		$query = $qb->getQuery();
		$c = $query->getResult();
		
		foreach($choices as $choice)
		{
			$textChoice = new TextChoice();
			$textChoice->setPoll($c[0]);
			$textChoice->setText($choice);
			
			$this->doctrineManager->persist($textChoice);
			$this->doctrineManager->flush();
		}
	}
	
	public function insertTextPoll()
	{
		$qb = $this->doctrineManager->createQueryBuilder();
		$qb->select('u')
		   ->from("BdlsProjetBundle:User", 'u')
		   ->where('u.id = ?1')
		// Récupérer l'id du user.
		   ->setParameter(1, 1); // Sets ?1 to 100, and thus we will fetch a user with u.id = 100
		// get the Query from the QueryBuilder here ...
		$query = $qb->getQuery();
		$user = $query->getResult();
		
		$createdOn  = new \DateTime("now");
		$textPoll   = new TextPoll();
		$textPoll->setCreatedOn($createdOn);
		$textPoll->setName($this->pool->getPollTitle());
		$textPoll->setIsOpen($this->pool->getPoll_etat());
		$textPoll->setDescription($this->pool->getPollDescription());
		$textPoll->setClosedOn($this->pool->getPoll_expiration_date());
		$textPoll->setCreatedBy($user[0]);
		
		$this->doctrineManager->persist($textPoll);
		//pour récupérer la dernière ID...
		$this->doctrineManager->flush();
		$_SESSION['currentPollId'] = $textPoll->getId();
		
	}
	
	public function insertTextVote()
	{
		$issuedOn = date('Y-m-d H:i:s');
		$pool     = $_SESSION['pool'];
		
		$textVote = new TextVote();
		$user     = $this->get('security.context')->getToken()->getUser();
		$textVote->setChoice($pool->getPollId());
		$textVote->setIssuedBy($user);
		$textVote->setIssuedOn($issuedOn);
	}
	//////////////////////////////////////////////////////////////
	public function insertVote()
	{
		
	}
	//////////////////////////////////////////////////////////////
	public function insertionIntoDatabase()
	{
		//Don't forget to use it !!!!!!!!!!
		$this->doctrineManager->flush();
	}
	
	public function getPool()
	{
		return $this->pool;
	}

	public function setPool($pool)
	{
		$this->pool = $pool;
	}
	
	public function setDoctrineManager($doctrineManager)
	{
		$this->doctrineManager = $doctrineManager;
	}
	public function setUser($user)
	{
		$this->user = $user;
	}
	
}

