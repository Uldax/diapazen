<?php
namespace PollBundle\Controller;


use Symfony\Component\HttpFoundation\Response;
//use PollBundle\Entity\TextVote;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

use PollBundle\Model\PollModel;


//session_start();
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
	public function createAction(Request $request)
	{
		//File d'ariane
		$session = $request->getSession();
		$session->set('breadcrumb_create', 'orange_ariadne');
		$session->set('breadcrumb_connect', 'grey_ariadne');
		$session->set('breadcrumb_share', 'grey_ariadne');

		$title='Création d\'un sondage | Diapazen';
		$year=date('Y');
		$type = $request->query->get('type');
		switch ($type) {
			case 'c1':
				$nametype = 'lieux';
				return $this->render('PollBundle:PollView:pollCreation.lieu.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
			case 'c2':
				$nametype = 'dates';
				return $this->render('PollBundle:PollView:pollCreation.date.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;
			case 'c3':
				$nametype = 'choix';
				return $this->render('PollBundle:PollView:pollCreation.def.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
				break;

			default:
				$nametype = 'choix';
				$type = 'c3';
				return $this->render('PollBundle:PollView:pollCreation.def.html.twig', array('title'=>$title, 'year'=>$year, 'nametype'=>$nametype, 'type'=>$type ));
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
	public function connectAction(Request $request)
	{
		//File d'ariane
		$session = $request->getSession();
		$session->set('breadcrumb_create', 'grey_ariadne');
		$session->set('breadcrumb_connect', 'orange_ariadne');
		$session->set('breadcrumb_share', 'grey_ariadne');

		$title='Création d\'un sondage | Diapazen';
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
		}

		// Si l'utilisateur est déja connecté, on le redirige vers le partage
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
		{
			return $this->redirect($this->generateUrl('bdls_projet_share'));
		}

		try
		{
			//Gestion de la conexion (ancien systeme)

			//test si un choix a été fait entre la connection et l'inscription et qu'il y a un Email
			//l'adresse mail n'est elle pas obligatoire ???
			if (isset($_POST['account']) && isset($_POST['Email']))
			{
				$mail = $_POST['Email'];
				$ip_addr = $_SERVER['REMOTE_ADDR'];

				//si on a choisi la connection et qu'il y a le mdp on tente de se connecter
				if($_POST['account'] == 'registered' && isset($_POST['password']))
				{
					// On teste l'adresse mail
					if (!TestForm::testRegexp('Email', $mail))
						throw new Exception('error_mail');

					$pwd = $_POST['password'];

					// on vérifie les infos avec la bdd
					$this->loadModel('user'); //charge User.Model.php
					$connectStatus = $this->getModel()->connectionToApp($mail, $pwd, $ip_addr);

				}
				//Gros probleme -> inscription via fos la
				//si on a choisi l'inscription et qu'il y a le nom et prenom on l'inscrit
				else if($_POST['account'] == 'not_registered' && isset($_POST['firstNameUser']) && isset($_POST['lastNameUser']))
				{
					// On teste l'adresse mail
					if (!TestForm::testRegexp('Email', $mail))
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

		// Démarrage de la session
		//session_start();
		// si le tableau reçu est vide ou n'existe pas, on ne peut pas continuer le sondage
		//
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////<--- ICI
		/*$pos = $this->getRequest()->query->get('position');
		$yolo = array(1,1);
		$_SESSION['position'] = $yolo;*/
//		if( isset( $pos ) )
//		{
//			if($pos != "")
//			{
//				//$_SESSION['position'] =  $pos;
//				$_SESSION['position'] = $yolo;
//				//echo (json_encode("etat"=>true));
//			}
//			else
//			{
//				//echo (json_encode("etat"=>false));
//			}
//		}
//		else
//		{
//			//echo (json_encode("etat"=>false));
//		}

               //Formaulaire nécésaire pour la création de compte
                //Manque le csrf pour qu'il fonctionne...
                $form = $this->container->get('form.factory')
                ->createNamedBuilder(null, 'form', null, array('csrf_protection' => false))
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
                ->add('Email', 'Email', array('label' => 'form.Email', 'translation_domain' => 'FOSUserBundle'))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',))
                ->getForm();


                $title = 'Connexion | Diapazen';
		$year=date('Y');
		return $this->render('PollBundle:Base:pollConnection.html.twig',array('title'=>$title,'year'=>$year,'form'=>$form->createView()));



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
		try
		{       $year=date('Y');
			//$model->insertionIntoDatabase();
			//$model->setUser($_SESSION['currentUser']);
			// Lorsque l'utilisateur est connecté
			if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED') &&  isset($_SESSION['pool']))
			{
                                $pool = $_SESSION['pool'];
				$type = $_SESSION['pool']->getPoll_type();
                                $_SESSION['type']=$type;
				if( isset($pool) && isset($type) )
				{
                                        $em = $this->getDoctrine()->getManager();
					$model = new ModelController();
                                        $model->setDoctrineManager($em);
                                        $this->container->get('request')->getSession()->set('pool', $pool);
                                        $userId=$this->get('security.context')->getToken()->getUser()->getId();
                                        $model->setUserId($userId);
                                        $model->setPool($pool);
					switch($type)
					{

						case "place":
							//lieux
							$model->insertPlacePoll();
							$model->insertPlaceChoices();
							break;
						case "date":
                                                        //Date
							$model->insertDatePoll();
                                                        $model->insertDateChoices();
							break;
						case "text":
							//text
							$model->insertTextPoll();
							$model->insertTextChoices();
							break;
                                                 //Le default doit renvoyer une exeption normalement
						default:

							//$model->insertTextVote();
                                                        ////Un truc du genre
                                                        unset($_SESSION['pool']);
                                                        $title = 'Erreur | Diapazen';
                                                        return $this->render('PollBundle:Base:404.html.twig',array('title'=>$title, 'year'=>$year));
							break;
					}
                                        unset($_SESSION['pool']);
				}

					$title = 'Share | Diapazen';
					return $this->render('PollBundle:Base:pollShare.html.twig',array('title'=>$title, 'year'=>$year));
			}
			else
			{

				$title = 'Connexion | Diapazen';
				$error = 'err';
				return $this->render('PollBundle:Base:404.html.twig',array('title'=>$title, 'error'=>$error, 'year'=>$year));
			}
		}
		catch(Exception $e)
		{
			$title = 'Erreur | Diapazen';
			return $this->render('PollBundle:Base:404.html.twig',array('title'=>$title, 'year'=>$year));
		}

	}


	/**
    * Visualisation d'un sondage (partie reponse)
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
	public function viewAction($type,$url)
	{
		 //On instancie le model si il echoue alors le type n'existe pas
		try {
			$model= new PollModel($this->getDoctrine(),$type);
		} catch (Exception $e) {
			return $this->redirect($this->generateUrl('bdls_projet_index'));
		}
		$manager=$this->getDoctrine()->getManager();
		$request = $this->get('request');
		$cookies = $request->cookies;
	 	$myPoll = $model->getUniquePoll($url);

		try
		{
			// Si on a reçu un/des votes et que le sondage est ouvert
	        $name=$request->get("name");
			if ($request->getMethod() == 'POST' && !empty($name) && $myPoll->getIsOpen() ){
				//Si j'ai déja voté on redirige sur les stat du votes
				if($cookies->has($url)){
					return $this->redirect($this->generateUrl('bdls_projet_view',array('type'=>$type,'url'=>$url)));
				}
				else
				{
					//Validation de tout les votes
					foreach($_POST['choiceId'] as $choice)
					{
						$choice=$model->getChoicesById($choice);
						$model->insertVotes($choice,$name);
					}
					//Création d'un cookie pour ne pas revoter en boucle
					//(Pour ceux qui ne savent pas supprimer manuellement un cookie ...)
					$response = new Response();
					$response->headers->setCookie(new Cookie($url, 'A voté !',(time() + 3600 * 24 * 7 * 310), '/'));
					$response->send();
					$data['data_updated']=true;
				}
			}
			//On récupère le sondage associé au sondage + calcule de stat
			$myChoice= $model->getAllChoices($myPoll);
			// Definition du temps restant
			$date = $myPoll->getClosedOn();
		    $now  = new \DateTime('now');
		    $int = $now->diff($date);
		    //Si la date est dépassé ou si la date d'expiration = 00000000000000
			if ($int->invert == 1)
			{
				$data['eventDate'] = "Le sondage est fermé";
				$myPoll->setIsOpen(0);
				$manager->persist($myPoll);
			}
			else
				$data['eventDate']=$int->format(' Expire dans: %d jour(s) et %h heure(s).');

			//On trie les resultat via la fonction de comparaison
			$votes=$model->getVoteStat($myChoice);
			usort($votes, array($this,"cmp"));

			// On transforme les liens http(s).. en vrai lien avec des balises
	        $description = preg_replace("/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*)/is", "$1$2<a class=\"link\" rel=\"nofollow\" href=\"$3\" >$3</a>", $myPoll->getDescription());
			$description = preg_replace("/(^|[\n ])([\w]*?)((www|ftp)\.[^ \,\"\t\n\r<]*)/is", "$1$2<a class=\"link\" rel=\"nofollow\" href=\"http://$3\" >$3</a>", $myPoll->getDescription());
			$description = preg_replace("/(^|[\n ])([a-z0-9&\-_\.]+?)@([\w\-]+\.([\w\-\.]+)+)/i", "$1<a class=\"link\" rel=\"nofollow\" href=\"mailto:$2@$3\">$2@$3</a>", $myPoll->getDescription());
			// On transforme les retours à la ligne en balise html
			$description = str_replace("\n", "<br>", $description);

			//On définit l'afichage de la date en français (optimisation)
			setlocale (LC_TIME, 'fr_FR.utf8','fra');
			$dateFr=strftime("%A %d %B %Y",$myPoll->getCreatedOn()->getTimestamp());

			// On définit toute les variables à envoyer à la vue
			$data['eventTitle'] = $myPoll->getName();
			//$data['openedPoll']= $this->translateOpened($myPoll->getIsOpen());
			$data['openedPoll']= $myPoll->getIsOpen();
			$data['user'] = $myPoll->getCreatedBy();
			$data['creationDate'] = $dateFr;
			$data['eventDescription'] = $description;
			//Pour le lien de retour
			$data['urlPoll'] = $myPoll->getUrl();
			$data['type'] =$type;
			//Les choix possibles couplé a leurs stat actuel
			$data['stat']=$votes;
			if($cookies->has($url)) $data['message']="Votre vote à déja été pris en compte";


			$title='Vote | Diapazen';
			$year=date('Y');
			$manager->flush();

			return $this->render('PollBundle:Base/PollView:base.html.twig', array('title'=>$title, 'year'=>$year,'data'=>$data));
		}
        catch(Exception $e) {
			$title='Accueil | Diapazen';
			$year=date('Y');
			return $this->render('PollBundle:Base:404.html.twig', array('title'=>$title, 'year'=>$year));
		}
	}

	/**
	* Fonction interne de comparaison
	*
	* @param string a paremètres a
	* @param string a paremètres a
	* @return a ou b.
	*/
	function cmp($a, $b){
					if ($a['percent'] == $b['percent'])
						return 0;
					return ($a['percent'] > $b['percent']) ? -1 : 1;
	}

	function translateOpened($bool) { return ($bool) ? "ouvert" : "fermé"; }


}
