<?php

namespace Bdls\ProjetBundle\Controller;
use Bdls\ProjetBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Bdls\ProjetBundle\Entity\TextPoll as TextPoll;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller
{
    	
	/**
	 * Page d'accueil
	 * 
	 * On set la variable à afficher sur dans la vue et on teste si
	 * l'utilisateur est connécter. Si tel est le cas alors on redirige vers
	 * le dashboard, sino on se rend sur la page home.
	 * 
	 * @param type $params null par défaut
	 */
	public function indexAction()
	{        
		// On set la variable Ã  afficher sur dans la vue
		$title='Accueil | Diapazen';
		$year=date('Y');
                //Si l'utilisateur est connécté est connecté, que le retour sur home c'est fait (login) et qu'il existe un sondage dans session  alors on redirige vers share
                if ($this->isUserConnected() && isset($_SESSION['pool']))
		{
                    // On redirige vers le partage
		return $this->redirect($this->generateUrl('bdls_projet_share'));
		}          

		//Formaulaire nécésaire pour la selection
		$form = $this->createFormBuilder()
			->add('Type', 'hidden', array('data' => 'c3' , ))
			->getForm();
                        
		// Récupération requête pour passer à la création poll
                $request = $this->get('request');
                 if ($request->getMethod() == 'POST') {
                    $form->bind($request);
                    if($form->isValid()) {
                           $choixtype = $form->get('Type')->getData();
                           return $this->redirect($this->generateUrl('bdls_projet_creation', array('type' => $choixtype )));
                   }                        
                }
                else
		{	
                    // On fait de rendu de la vue home.php
                    return $this->render('BdlsProjetBundle:Default:home.html.twig', array('title'=>$title, 'year'=>$year, 'form'=>$form->createView()
                    ));		
		}
	}


    /* Partage d'un sondage
    *
    * Gère  : 
    * - Met le titre de la page à 'Création d\'un sondage | Diapazen'.
    * - Renvoi à la page d'accueil si nous ne venons pas créer un sondage
    * - Envois des mails de partage au mails spécifiés
    * - Lance le render de la vue 'shareMail' 
    * - Gère si des erreurs sont survenues
     */
	public function mailAction()
	{
		$request = $this->get('request');
		if ($request->getMethod() == 'POST') 
		{
		  	$mails = $request->get("mails");
			$tabMails = $this->sharePoll($mails);
		}
		
		$name = "Neo";
		$title='E mail | Diapazen';
		$year=date('Y');
		
		$message = \Swift_Message::newInstance();
                $message->setSubject("Objet");
                $message->setFrom('contact.diapazen@gmail.com');
		$message->setTo($tabMails);
		
        // pour envoyer le message en HTML
        //$message->setBody($this->renderView('BdlsProjetBundle:Default:eMail.html.twig', array('name' => $name,'title'=>$title, 'year'=>$year)));
	
                $message->setBody(
				'<html>' .
					' <head></head>' .
					' <body>' .
						' <p> Bonjour, <br/>' .
						' Un sondage a été créé et vous y êtes convié <br/>'.
						' Lien du sondage </p>' .
					' </body>' .
				'</html>',
				'text/html' // Mark the content-type as HTML
				);
		//envoi du message
		$this->get('mailer')->send($message);
                //
                unset($_SESSION['pool']);
		return $this->render('BdlsProjetBundle:Default:shareMail.html.twig', array('name' => $name,'title'=>$title, 'year'=>$year));
	}
	
        
        
	public function sharePoll($texteareaContent)
	{

		$emails = preg_split("/[\r\n\t,; ]+/", $texteareaContent, -1, PREG_SPLIT_NO_EMPTY);

		$emails = array_unique($emails);

		$regexMail = '#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#';
		foreach($emails as $current)
		{
			// Evite les failles XSS
			$current = htmlspecialchars($current);
			
			if(!preg_match($regexMail, $current))
			{
				unset($emails[array_search($current, $emails)]);
			}
		}

		if (!isset($emails))
		{
			return null;
		}

		return $emails;
	}

	public function forgotAction()
	{
		$title='Accueil | Diapazen';
		$year=date('Y');
		return $this->render('BdlsProjetBundle:Default:forgot.html.twig', array('title'=>$title, 'year'=>$year, 'last_username'));
	}
        
               
        public function isUserConnected()
	{
                return ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'));
	}
}

