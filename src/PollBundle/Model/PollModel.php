<?php
namespace PollBundle\Model;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ollBundle\Entity\TextVote;
use ollBundle\Entity\DateVote;
use ollBundle\Entity\PlaceVote;

/**
 * Description of newPHPClass
 *
 * @author Paul
 */
class PollModel
{
	private $manager;
	private $path;
	//Définition de tout les type de sondage existant
	private $allType= array("text",
						 	"date",
						 	"place");


	function __construct($doctrine,$type)
	{
		$this->manager = $doctrine->getManager();
		$this->path="BdlsProjetBundle:".ucfirst($type);
		if(!in_array($type,$this->allType)){
	    	throw new \Exception("Type inconnu", 1);
	    }
		else{ $this->type=$type; }
	}

	//Fonction d'insertion des votes
	public function insertVotes($choice,$name)
	{
            $path="PollBundle\\Entity\\".ucfirst($this->type)."Vote";
            $class=  new \ReflectionClass($path);
            $vote = $class->newInstanceArgs(array());
            $vote->setIssuedOn( new \DateTime('now'));
            $vote->setIssuedBy($name);
            $vote->setChoice($choice);
            $this->manager->persist($vote);
            //Pour que le vote sois pris en compte pour les stats
            $this->manager->flush();
	}


         //Retourne le sondage en fonction de l'url
	public function getUniquePoll($pollUrl)
	{
		$entity=$this->path."Poll";
		//Création de la requete
		$qb = $this->manager->createQueryBuilder();
		$qb->select('p')
		   ->from($entity, 'p')
		   ->where('p.url = ?1')
		   ->setParameter(1, $pollUrl);
		$query = $qb->getQuery();
		$poll = $query->getResult();
		if(!empty($poll))
			return $poll[0];
		else
			throw new NotFoundHttpException("Sondage inexistant");
	}

        //Récupère tout les choix associé a un sondage
	public function getAllChoices($poll){
			if(!empty($poll))
			{
				//Je récupèretout les choix associé au sondage
				$entity=$this->path."Choice";
				$qb = $this->manager->createQueryBuilder();
				$qb->select('c')
				   ->from($entity, 'c')
				   ->where('c.poll = ?1')
				   ->setParameter(1, $poll->getId());
				$query = $qb->getQuery();
				return $query->getResult();
				if(empty($choices))
					throw new NotFoundHttpException("Sondage defaillant : pas de choix pour ce sondage");
			}
			else
				throw new NotFoundHttpException("Sondage vide");
	}

        //Récupère un choix en fonction de son id
	public function getChoicesById($id){
			$entity=$this->path."Choice";
			$qb = $this->manager->createQueryBuilder();
			$qb->select('c')
			   ->from($entity, 'c')
			   ->where('c.id = ?1')
			   ->setParameter(1, $id);
			$query = $qb->getQuery();
			return $query->getSingleResult();
			if(empty($choices))
				throw new NotFoundHttpException("Erreur ID choice");
	}

        // Attention
	//Fonction a modifier si nouveau type
	public function getVoteStat($choices)
	{
		//Pour chaque choix compte le nombre de réponse
		$votes = array();
		$entity=$this->path."Vote";
		foreach ($choices as $choice ) {
            $qc = $this->manager->createQueryBuilder();
			$qc->select('v')
			   ->from($entity, 'v')
			   ->where('v.choice = ?1')
			   ->setParameter(1, $choice->getId());
			 //Je stock dans le tableau dans la cle 'object' le resultat de la reponse , puis dans count (la somme des elements)
			$resultat=$qc->getQuery()->getResult();
			//Definition de la reponsse en fonction du type:
			switch ($this->type) {
            	case 'text':
            		$answer=$choice->getText();
            		break;
            	case 'date':
            		$answer=$choice->getDate();
            		break;
            	case 'place':
            		$answer=array($choice->getLatitude(),$choice->getLongitude());
            	break;
            	default:
            		throw new \Exception("Type inconu", 1);
            	break;
            }
            $votes[] = array('id' =>$choice->getId(),
            				'object'=>$resultat,
            				'count' => count($resultat),
            				'percent' =>0,
            				'answer' =>$answer) ;
		}
		$nbTotalVotes=0;
                //Calcul du nombre total de votes
		foreach ($votes as $vote) $nbTotalVotes += $vote['count'];
		//Calcule du pourcentage
		foreach ($votes as $vote => $key) {
			if($nbTotalVotes!=0)
				$votes[$vote]['percent'] = (int) round($votes[$vote]['count'] / $nbTotalVotes * 100);
		}
		return $votes;
	}
}