<?php
namespace Bdls\ProjetBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Bdls\ProjetBundle\Entity\TextPoll;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * 
 * Contrôleur de la page d'un sondage
 * 
 * @package     Diapazen
 * @copyright   Copyright (c) 2013, ISEN-Toulon
 * @license     http://www.gnu.org/licenses/gpl.html GNU GPL v3
 * 
 * This file is part of Diapazen.
 * 
 * Diapazen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License 3 as published by
 * the Free Software Foundation.
 * 
 * Diapazen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Diapazen.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


/**
 * PollController
 * Contrôleur de la page d'un sondage
 * 
 * @package		Diapazen
 * @subpackage	Controller
 */
class PollController extends Controller
{

	/**
    * Index des sondages
    *
    * Lance la méthode 'create' de PollController
    *
    * @param type $params null par défaut
    *
    */
	public function isUserConnected()
	{
                return ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'));
	}
	
	protected function set($key, $value)
	{
		$this->mVars[$key] = $value;
	}
	
	public function indexAction($params)
	{
		$this->create($params);

	}

	/**
    * Création d'un sondage
    *
    * Gère  : 
    * - Lance le render de la vue 'pollCreation' 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Récupère les renseignements donnés si on fait 'précédent'
    *
    * @param type $params null par défaut
    *
    */
	public function createAction($params=null)
	{
		//si l'utilisateur est deja connecter alors on affiche pas le le bouton connexion dans le fil d'arianne
		$_SESSION['show_ariadne'] = $this->isUserConnected() ? false : true;
		$_SESSION['width_ariadne'] = $this->isUserConnected() ? '525' : '788';
		$this->set('width_ariadne', $_SESSION['width_ariadne']);
		$this->set('show_ariadne', $_SESSION['show_ariadne']);

		$this->set('class_create', 'orange');
		$this->set('class_connect', 'grey');
		$this->set('class_share', 'grey');
		// on a fait précédent, on affiche les valeurs déjà renseignées
		if(isset($_SESSION['poll_title']) && isset($_SESSION['poll_description']) && isset($_SESSION['poll_choices']) && isset($_SESSION['poll_date']))
		{
			$this->set('poll_title', $_SESSION['poll_title']);
			$this->set('poll_description', $_SESSION['poll_description']);
			$this->set('poll_choices', $_SESSION['poll_choices']);
			$this->set('poll_date', $_SESSION['poll_date']);
			// modifier la vue pour qu'elle affiche les choix (le navigateur web le gère automatiquement)
		}
		
		/* temporaire, ensuite on mettra le titre de la page*/
		$title='Création d\'un sondage | Diapazen';

		$year=date('Y');
		//récupèration variable get
		$type = $this->getRequest()->query->get('type') ;

		switch ($type) {
			case 'c1':
				$nametype = 'lieux';
				return $this->render('BdlsProjetBundle:Default:pollCreation.lieu.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
			case 'c2':
				$nametype = 'dates';
				return $this->render('BdlsProjetBundle:Default:pollCreation.date.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
			case 'c3':
				$nametype = 'dates';
				return $this->render('BdlsProjetBundle:Default:pollCreation.def.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
			
			default:
				$nametype = 'default';
				$type = 'c3';
				return $this->render('BdlsProjetBundle:Default:pollCreation.def.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
		}

	}


	/**
    * Page connec lors de la création d'un sondage
    *
    * Gère  : 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Renvoi à la partie create si on y a pas été
    * - Envoi directement l'utilisateur à la partie 'partage' si il est déjà connecté
    * - Si on est déjà inscrit on tente de se connecter
    * - Si on n'est pas inscrit, on inscrit l'utilisateur et
    *	on lui envoi un mail avec son mot de passe
    * - Gère si des erreurs sont survenues
    *
    * @param type $params null par défaut
    *
    */
	public function connectAction($params = null)
	{

		$this->set('title', 'Création d\'un sondage | Diapazen');
		$this->set('class_create', 'grey');
		$this->set('class_connect', 'orange');
		$this->set('class_share', 'grey');
		
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') 
		{
			$type = $request->get("type");
		
		switch($type)
		{
			case "c1":
				$pool = new PoolLieux($request);
				break;
			case "c2":
				$pool = new PoolDates($request);
				break;
			case "c3":
				$pool = new PoolText($request);
				break;
			default:
				$pool = new PoolText($request);
				break;
		}
		$_SESSION['pool'] = $pool;
                }
		//récupération des valeurs du fil d'arianne
		if (isset($_SESSION['show_ariadne']) && isset($_SESSION['width_ariadne']))
		{
			$this->set('show_ariadne', $_SESSION['show_ariadne']);
			$this->set('width_ariadne', $_SESSION['width_ariadne']);
		}
		else
		{
			// renvoyer À Poll create Ses variableS devraiENT etre initialisées
			//surement utiliser path ? pour empreinter une route adéquate dans le fichier de route.
			header('Location: /poll/create');
		}

		// testE si le formulaire de crÉation de sondage est existant
		if (isset($_POST['title_input']) && isset($_POST['description_input']) && isset($_POST['choices']))
		{
			$_SESSION['poll_title'] = $_POST['title_input'];
			$_SESSION['poll_description'] = $_POST['description_input'];
			$_SESSION['poll_choices'] = $_POST['choices'];
			

			/*if(isset($_POST['date_input']) && TestForm::testRegexp('expirationDate', $_POST['date_input']))
			{
				$_SESSION['poll_date'] = $_POST['date_input'];
			}
			else
			{
				$_SESSION['poll_date'] = null;
			}*/

		}

		// Si l'utilisateur est déja connecté, on le redirige vers le partage
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{	
			return $this->redirect($this->generateUrl('bdls_projet_share'));
		}

		try
		{
			//test si un choix a été fait entre la connection et l'inscription et qu'il y a un email
			//l'adresse mail n'est elle pas obligatoire ???
			if (isset($_POST['account']) && isset($_POST['email']))
			{
				$mail = $_POST['email'];
				$ip_addr = $_SERVER['REMOTE_ADDR'];

				//si on a choisi la connection et qu'il y a le mdp on tente de se connecter
				if($_POST['account'] == 'registered' && isset($_POST['password']))
				{
					// On teste l'adresse mail
					if (!TestForm::testRegexp('email', $mail))
						throw new Exception('error_mail');

					$pwd = $_POST['password'];

					// on vérifie les infos avec la bdd
					$this->loadModel('user'); //charge User.Model.php
					$connectStatus = $this->getModel()->connectionToApp($mail, $pwd, $ip_addr);

				} //si on a choisi l'inscription et qu'il y a le nom et prenom on l'inscrit
				else if($_POST['account'] == 'not_registered' && isset($_POST['firstNameUser']) && isset($_POST['lastNameUser']))
				{
					// On teste l'adresse mail
					if (!TestForm::testRegexp('email', $mail))
						throw new Exception('error_mail');

					$firstname = $_POST['firstNameUser'];
					$lastname = $_POST['lastNameUser'];
					// On crée le mot de passe
					// Comment faire pour loadModel...
					$this->loadModel('user');
					$pwd = $this->getModel()->generatorPsw();

					// On crée l'utilisateur
					// ne pas mettre de champs vide
					$this->getModel()->registration($firstname, $lastname,$mail,$pwd);
					$connectStatus = $this->getModel()->connectionToApp($mail, $pwd, $ip_addr);

					$message = new Message();
					$message->setMessage('registration');
					$tabParamMessage = array('firstName' => $firstname, 'lastName' => $lastname, 'password' => $pwd);
					$message->setParams($tabParamMessage);
					$messageMail = $message->getMessage();
					$subjet = 'Inscription sur Diapazen';

					$mailer = new MailUtil();
					$mailer->sendMail($mail,$subjet,$messageMail);
				}
				else
					$connectStatus = false;


				if($connectStatus == false)
				{
					// La connexion a échoué
					$this->setUserDisconnected();
					throw new Exception('error_connection');
					
				}
				else
				{
					// La connexion a réussie
					$this->setUserConnected($connectStatus);
					header('Location: ' . BASE_URL. '/poll/share');
				}

			}
		}
		catch(Exception $e)
		{
			switch ($e->getMessage())
			{
				case 'email_already_in_db':
					$this->set('err', 'registrationError');
					break;

				case 'error_connection':
					$this->set('err', 'connectionError');
					break;

				case 'error_mail':
					$this->set('err', 'mailError');
					break;
				
				// Erreur de la bdd (typiquement des erreurs SQL)
				default:
					$this->render('dbError');
					break;
			}
		}
        $title = 'Connexion | Diapazen';
		$year=date('Y');
		$error='pas d\'erreur.';
		return $this->render('BdlsProjetBundle:Default:pollConnection.html.twig',array('title'=>$title, 'error'=>$error, 'year'=>$year));

		
	}

	/**
    * Partage d'un sondage
    *
    * Gère  : 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Renvoi à la partie create si on y a pas été
    * - Ajoute le sondage dans la base de donnée
    * - Ajoute les choix dans la base de donnée
    * - Lance le render de la vue 'pollShare' 
    * - Gère si des erreurs sont survenues
    *
    * @param type $params null par défaut
    *
    */
	public function shareAction($params = null)
	{

		/*if (isset($_SESSION['show_ariadne']) && isset($_SESSION['width_ariadne']))
		{
			$this->set('show_ariadne', $_SESSION['show_ariadne']);
			$this->set('width_ariadne', $_SESSION['width_ariadne']);
		}
		else
		{
			// renvoyer a Poll create ces variable devrais etre initialisées
			header('Location: ' . BASE_URL. '/poll/create');
		}

		// On choisi le rendu par default
		$this->set('title', 'Création d\'un sondage | Diapazen');
		$this->set('class_create', 'grey');
		$this->set('class_connect', 'orange');
		$this->set('class_share', 'grey');
		*/

		try
		{
			
			$model = new ModelController();
			// Lorsque l'utilisateur est connecté
			if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
			{
				/*$type = $_SESSION['pool']->getPoll_type();
				if( isset($type) )
				{
					switch($type)
					{
						case "c1":
							//lieux
							$model->insertPlaceChoice();
							$model->insertPlacePoll();
							$model->insertPlaceVote();
							break;
						case "c2":
							//date
							$model->insertDateChoice();
							$model->insertDatePoll();
							$model->insertDateVote();
							break;
						case "c3":
							//text
							$model->insertTextChoice();
							$model->insertTextPoll();
							$model->insertTextVote();
							break;
						default:
							$model->insertTextChoice();
							$model->insertTextPoll();
							$model->insertTextVote();
							break;
					}
				}*/
				
				// On créé le sondage
//					$this->loadModel('poll');
//					$this->getModel()->addPoll($_SESSION['user_infos']['id'], $_SESSION['poll_title'], $_SESSION['poll_description'], $_SESSION['poll_date'].' 23:59:59');
//					$pollId = $this->getModel()->getPollId();

//					$_SESSION['poll_url'] = $this->getModel()->getPollUrl();
//					$_SESSION['poll_tittle'] = $this->getModel()->getPollTitle();
//
//					$this->set('pollUrl', $_SESSION['poll_url']);

					// Insertion des choix
//					$this->loadModel('choice');
//					foreach ($_SESSION['poll_choices'] as $choice) {
//						if(!empty($choice))
//						$this->getModel()->addChoice($choice, $pollId);
//					}
//
//					unset($_SESSION['poll_title']);
//					unset($_SESSION['poll_description']);
//					unset($_SESSION['poll_choices']);
//					unset($_SESSION['poll_date']);
//
//					// On choisit le rendu
//					$this->set('class_connect', 'grey');
//					$this->set('class_share', 'orange');
//					$titre = $_SESSION['pool']->getPoll_type();
					$year=date('Y');
					$title = 'Connexion | Diapazen';
					return $this->render('BdlsProjetBundle:Default:pollShare.html.twig',array('title'=>$title, 'year'=>$year));
			}
			else
			{
				$year=date('Y');
				$title = 'Connexion | Diapazen';
				$error = 'err';
				return $this->render('BdlsProjetBundle:Default:pollConnection.html.twig',array('title'=>$title, 'error'=>$error, 'year'=>$year));
			}
//			if ($this->isUserConnected())
//			{
//				if (isset($_SESSION['poll_title']) && isset($_SESSION['poll_description']) && isset($_SESSION['poll_choices']))
//				{
//					// On créé le sondage
//					$this->loadModel('poll');
//					$this->getModel()->addPoll($_SESSION['user_infos']['id'], $_SESSION['poll_title'], $_SESSION['poll_description'], $_SESSION['poll_date'].' 23:59:59');
//					$pollId = $this->getModel()->getPollId();
//
//					$_SESSION['poll_url'] = $this->getModel()->getPollUrl();
//					$_SESSION['poll_tittle'] = $this->getModel()->getPollTitle();
//
//					$this->set('pollUrl', $_SESSION['poll_url']);
//
//					// Insertion des choix
//					$this->loadModel('choice');
//					foreach ($_SESSION['poll_choices'] as $choice) {
//						if(!empty($choice))
//						$this->getModel()->addChoice($choice, $pollId);
//					}
//
//					unset($_SESSION['poll_title']);
//					unset($_SESSION['poll_description']);
//					unset($_SESSION['poll_choices']);
//					unset($_SESSION['poll_date']);
//					
//					// On choisit le rendu
//					$this->set('class_connect', 'grey');
//					$this->set('class_share', 'orange');
//					$title = 'Connexion | Diapazen';
//					return $this->render('BdlsProjetBundle:Default:pollShare.html.twig',array('title'=>$title));
//				}
//				else
//				{
//					// renvoyer a Poll create avec un message disant champs inexistants
//					header('Location: ' . BASE_URL. '/poll/create');
//				}
//			}
		}
		catch(Exception $e)
		{
			$title = 'Connexion | Diapazen';
			return $this->render('BdlsProjetBundle:Default:bdError.html.twig',array('title'=>$title, 'last_username'));
		}

	}







	/**
    * Partage d'un sondage
    *
    * Gère  : 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Renvoi à la page d'accueil si nous ne venons pas créer un sondage
    * - Envois des mails de partage au mails spécifiés
    * - Lance le render de la vue 'shareMail' 
    * - Gère si des erreurs sont survenues
    *
    * @param type $params null par défaut
    *
    */
	public function sentAction($params = null)
	{

		$this->set('title', 'Partager le sondage | Diapazen');
		if (isset($_POST['mails']) && isset($_SESSION['poll_tittle']) && isset($_SESSION['poll_url']) && TestForm::testRegexp('pollUrl', $_SESSION['poll_url']))
		{
			try
			{
				$this->loadModel('poll');
				$lien = BASE_URL.'/p/'.$_SESSION['poll_url'];
				$from = $this->getUserInfo('firstname').' '.$this->getUserInfo('lastname');
				$mailSend = $this->getModel()->sharePoll($_POST['mails']);
				$mailSend = implode(', ', $mailSend);
			}
			catch(Exception $e)
			{
				die($this->render('dbError'));
			}
			

			$subject = "Invitation à un sondage";
			$message = new Message();
			$message->setMessage('share');
			$tabParamMessage = array('user' => $from, 'pollTitle' => $_SESSION['poll_tittle'], 'linkPoll' => $lien);
			$message->setParams($tabParamMessage);
			$messageMail = $message->getMessage();

			$mailer = new MailUtil();
			$res = $mailer->sendMail($mailSend,$subject,$messageMail);

			unset($_SESSION['poll_url']);
			unset($_SESSION['poll_tittle']);

			$this->set('pollUrl', $lien);
			$this->set('sent', $res ? 'success' : 'fail');
			$this->render('shareMail');
			
		}
		else
		{
			// renvoyer a Poll share avec un message disant pas de mails
			header('Location: ' . BASE_URL);
		}
	}
	





	/**
    * Visualisation d'un sondage
    *
    * Gère  : 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Renvoi à la page d'accueil si l'url du sondage n'est pas specifiée
    * - Renvoi un 404 si le sondage n'a pas été trouvé
    * - Empêche le revote grâce à la fonction 'rafraichir la page'
    * - L'ajout de vote dans le sondage
    * - Trie les choix en fonction des résultats pour un sondage fermé
    * - Affiche qui a voté quoi
    * - Lance le render de la vue 'pollView' 
    * - Gère si des erreurs sont survenues
    *
    * @param type $params null par défaut
    *
    */
 
   	//$session = $this->getRequest()->getSession();
	public function viewAction($type,$url)
	{
		$arrayType= array("text","date","lieu");

	    //Récuperation du manager pour doctrine et du requst
		$manager = $this->getDoctrine()->getManager();
		$request = $this->get('request');
	 	$response = new Response();

	    //Si le type n'existe pas il y a un soucie	    	   
	    if(!in_array($type,$arrayType)){
	    	return $this->redirect($this->generateUrl('bdls_projet_home'));
	    }
		try
		{
			/*
			/Partie vote 
			*/
			// Si il a voté : Ajout d'un vote
	       // $request = $this->get('request'); 
	        //Obligé de split en deux
	        $value=$request->get("value");
			if ($request->getMethod() == 'POST' && isset($value)){
				
				//Si je renvoi un formulraire et que j'ai deja voté
				// De même je slip en deux 
				$cookie=$request->cookies->get($url);
				if((isset($cookie))){
					return $this->redirect($this->generateUrl('bdls_projet_home/url'));
				}
				else
				{
					//Tu me valide tout les votes
					foreach($_POST['choiceId'] as $choice)
					{
						//Le vote
						if ($this->getModel()->votePoll($choice, $_POST['value']))
						{
							// vote pris en compte
							$this->set('data_updated', true);
						}
						else
						{
							// echec du vote
							$this->set('data_updated', false);
						}
					}
						//Set du cookie pour être sûr
						//cookie
				}	
			}

			/*
			/Partie statistique 
			*/
		
			//On récupère le sondage associé au sondage + calcule de stat				
			$myPoll = $this->viewPoll($type,$url);	
			//$res = $this->getModel()->viewPoll($params[0]);
			if (empty($myPoll)){
				throw $this->createNotFoundException('Le sondage n\'existe pas');
			}
					else
					{
						// Definition de la date restante 
						// Si le sondage est expiré
						$date = new DateTime($myPoll['expiration_date']);
		            	$now  = new DateTime('now');
		            	$int = $now->diff($date);
		            	//Si la date est dépassé ou si la date d'expiration = 00000000000000
						if (($int->invert == 1 || !$myPoll['open']) && $myPoll['expiration_date'] != '0000-00-00 00:00:00')
						{
							$myPoll['open'] = false;
							$eventDate = "Le sondage est fermé";
							try
							{							
								//Je cloture le sondage
								$this->getModel()->updatePoll($res['POLL_ID']);								
							}
							catch(Exception $e)
							{
								die("erreur de mise à jour");
							}
						}

						else if($res['expiration_date'] != '0000-00-00 00:00:00')
							$eventDate=$int->format(' | Expire dans: %d jour(s) et %h heure(s).');
						else
							$eventDate=$int->format('');


						// Si le sondage est fermé, on trie les résultats
						// du meilleur au moins bon.
						if (!$myPoll['open'])
						{
							/**
							 * Fonction interne de comparaison
							 *
							 * @param string a paremètres a
							 * @param string a paremètres a
							 * @return a ou b.
							 */
							function cmp($a, $b)
							{
								if ($a['percent'] == $b['percent'])
									return 0;
								return ($a['percent'] > $b['percent']) ? -1 : 1;
							}
							usort($myPoll['choices'], 'cmp');
						}
	                                        //La descirption
						// On transforme les liens http(s).. en vrai lien avec des balises
	                    $myPoll['description'] = preg_replace("/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is", "$1$2<a class=\"link\" rel=\"nofollow\" href=\"$3\" >$3</a>", $res['description']);
					    $myPoll['description'] = preg_replace("/(^|[\n ])([\w]*?)((www|ftp)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a class=\"link\" rel=\"nofollow\" href=\"http://$3\" >$3</a>", $res['description']);
					    $myPoll['description'] = preg_replace("/(^|[\n ])([a-z0-9&\-_\.]+?)@([\w\-]+\.([\w\-\.]+)+)/i", "$1<a class=\"link\" rel=\"nofollow\" href=\"mailto:$2@$3\">$2@$3</a>", $res['description']);

					    // On transforme les retours à la ligne en balise html
					    $myPoll['description'] = str_replace("\n", "<br>", $myPoll['description']);

					    // Tableau pour stocker les jours de la semaine
						$jour = array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"); 
						$mois = array("","janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"); 
						
						// on définit les variables à envoyer à la vue
						$this->set('openedPoll', $res['open']);
						$this->set('urlPoll', $res['url']);
						$this->set('userFName', $res['firstname']);
						$this->set('userLName', $res['lastname']);
						$this->set('eventTitle', $res['title']);
						$this->set('eventDescription', $res['description']);
						$this->set('choiceList', $res['choices']);

						// Traduction de la date
						$week	= $jour[date('w', strtotime($myPoll['creation_date']))];
						$day	= date('d', strtotime($myPoll['creation_date'])); 
						$month	= $mois[date('n', strtotime($myPoll['creation_date']))];
						$year	= date('Y', strtotime($myPoll['creation_date']));
						$dateFr	= sprintf('%s %s %s %s', $week, $day, $month, $year);
						$this->set('creationDate', $dateFr);
						
						$this->set('title', $myPoll['title'] .' | Diapazen');
						
						// On fait le rendu
						$title='Accueil | Diapazen';
						$year=date('Y');
						return $this->render('BdlsProjetBundle:Default:pollView.html.twig', array('title'=>$title, 'year'=>$year));
					}
				}
                        
				catch(Exception $e)
				{
					$title='Accueil | Diapazen';
					$year=date('Y');
					return $this->render('BdlsProjetBundle:Default:dbError.html.twig', array('title'=>$title, 'year'=>$year));
				}
		}
	



	/*
	Fonction appéler pour gerer l'ensemble des insertions de choix suivant le type
	 */
	public function insertChoices($choices,$type,$name){
		switch($type){
        	case "lieux":
                    $this->insertDateVotes($choices,$name);
		    break;
		 	case "date": 
                    $this->insertDateVotes($choices);
		    break;
		 	case "text":
                    $this->insertDateVotes($choices);
		    break;
		 default:
	            throw new Exception("Error Processing insertion", 1);            
	      }
	}



	//Fonction d'insertion de votes 
	public function inserVotes($poolId,$choice,$name)
	{
                $funcname="insert"+ucfirst($type)+"vote";
		if (method_exists(get_class($this),$funcname)) {
			foreach($choices as $choice)
			{
				$this->$funcname($poolId,$choice,$name);
			}
			$this->doctrineManager->flush();
		}
		else
			throw new Exception("Error Type Request $funcname", 1);		
	}

	//Insertion dans la base de type date
    public function insertDateVote($poolId,$choice,$name)
	{
		$dateChoice = new DateVote();		
		$dateChoice->setDate($choice);
		$dateChoice->setPoll($poolId);	
		$dateChoice->setName();
		$this->doctrineManager->persist($dateChoice);
	}
	
	//Insertion dans la base de type text
    public function insertTextVote($poolId, $choice,$name)
	{
		$dateChoice = new TextVote();		
		$dateChoice->setText($choice);
		$dateChoice->setPoll($poolId);	
		$dateChoice->setName();
		$this->doctrineManager->persist($dateChoice);
	}

	//Insertion dans la base de type text
    public function insertMapVote($poolId, $choice,$name)
	{
		$dateChoice = new MapVote();		
		$dateChoice->setText($choice);
		$dateChoice->setPoll($poolId);	
		$dateChoice->setName();
		$this->doctrineManager->persist($dateChoice);
	}

		
	/**
	 * Affichage d'un sondage
	 *
	 * En récupèrant les informations stockées dans la base de données au moyen
	 * d’une requête sql Select sur la vue dpz_view_users_join_polls. On traite
	 * le résultat obtenu en récupérant les informations de chaque choix du
	 * sondage ainsi que les informations de chaque résultat des choix du
	 * sondage. Les résultats obtenus sont ensuite transférés dans un tableau
	 * et on calcule le pourcentage de chaque choix du sondage. Le tableau est
	 * donc complété avec ces mêmes pourcentages.
	 * @param type $pollUrl url du sondage
	 * @return array contenu du sondage
	 */
	public function viewPoll($type,$pollUrl)
	{
		try
		{   
			//Path 
			$path="BdlsProjetBundle:".ucfirst($type);
			$entity=$path."Pool";

			//Création de la requete
			$em = $this->getDoctrine()->getEntityManager();
			$qb = $em->createQueryBuilder();
			$qb->select('p')
			   ->from($entity, 'p')
			   ->where('p.url = ?1')
			   ->setParameter(1, $pollUrl); // Sets ?1 to 100, and thus we will fetch a user with u.id = 100
			// get the Query from the QueryBuilder here ...
			$query = $qb->getQuery();
			$poll = $query->getResult();

			// On traite le résultat
			if(!empty($poll))
			{
				$poll = $poll[0];

				$entity=$path."Choice";
				$qb->select('c')
				   ->from($entity, 'c')
				   ->where('c.id = ?1')
				   ->setParameter(1, $pollId); // Sets ?1 to 100, and thus we will fetch a user with u.id = 100
				// get the Query from the QueryBuilder here ...
				$query = $qb->getQuery();
				$poll = $query->getResult();


    			//Type choice
				// On récupère les informations de chaque choix du sondage de la bdd
				$choices = $this->selectWhere('CHOICE_ID,value', 'dpz_view_choice', array('POLL_ID' => $pollInfo['POLL_ID']), 'assoc');

				//Type vote
				// On récupère les informations de chaque résultat des choix du sondage de la bdd
				$resultats = $this->selectWhere('CHOICE_ID,choice', 'dpz_view_poll', array('POLL_ID' => $pollInfo['POLL_ID']), 'assoc');


				// Traitements des résultats
				$list = array();
				$nbTotalVotes = 0;
				foreach($choices as $choice)
				{
					$id = $choice['CHOICE_ID'];
					$list[$id]['choiceName'] = htmlspecialchars($choice['choice']);
					
					$list[$id]['checkList'] = array();
					foreach($results as $result)
					{
						$rid = $result['CHOICE_ID'];
						if ($id == $rid)
						{
							$list[$id]['checkList'][] = htmlspecialchars($result['value']);
							$nbTotalVotes++;
						}
					}
				}

				// calcul du pourcentage
				foreach($list as &$elem)
				{
					if (count($elem['checkList']) != 0)
						$elem['percent'] = (int) round((count($elem['checkList']) / $nbTotalVotes) * 100);
					else
						$elem['percent'] = 0;
				}
				
				// On prépare le tableau de retour
				$ret = $pollInfo;
				$ret['nbVotes'] = $nbTotalVotes;
				$ret['choices'] = $list;
				return $ret;
			}

			return false;
		}
		catch(Exception $e) 
		{
			throw new Exception('Erreur lors de la tentative de connexion :</br>' . $e->getMessage());
		}
	}

	public function closePool(){

	}


}
