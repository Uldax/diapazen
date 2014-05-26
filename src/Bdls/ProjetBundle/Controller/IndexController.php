<?php

namespace Bdls\ProjetBundle\Controller;
use Bdls\ProjetBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


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
		//$this->set('title', 'Accueil | Diapazen');


		// On charge la vue, si l'utilisateur est connectÃ© ou pas
		/*
		if ($this->isUserConnected())
		{
			// On redirige vers le dashboard
			header('Location:' . BASE_URL .'/dashboard');
		}
		else//*/

		//formulaire
		$form = $this->createFormBuilder()
			->add('Type', 'hidden', array('data' => 'c3' , ))
			->getForm();
		// Récupération requête
	    $request = $this->get('request');
	    if ($request->getMethod() == 'POST') {
	    	$form->bind($request);
	      	if ($form->isValid()) {
	      		$choixtype = $form->get('Type')->getData();
	        	return $this->redirect($this->generateUrl('bdls_projet_creation', array('type' => $choixtype )));
	      	}
	    }



		{
			//$yolo=database_driver;
			// On fait de rendu de la vue home.php
			return $this->render('BdlsProjetBundle:Default:home.html.twig', array('title'=>$title, 'year'=>$year, 'form'=>$form->createView()
				));
			//$this->render('home');
		}
	}


	public function mailAction()
	{
//		$name = "neo";
//		$title='E mail | Diapazen';
//		$year=date('Y');
//		$transport = Swift_SmtpTransport::newInstance('in.mailjet.com', 587, 'ssl')
//          ->setUsername('contact.diapazen@gmail.com')
//          ->setPassword('diapazen2014');    
//
//		$mailer = Swift_Mailer::newInstance($transport);
//	
//		$message = \Swift_Message::newInstance()
//				->setSubject('Hello Email')
//				->setFrom('recifiel83@gmail.com')
//				->setTo('recifiel83@gmail.com')
//				->setBody($this->renderView('BdlsProjetBundle:Default:eMail.html.twig', array('name' => $name,'title'=>$title, 'year'=>$year )))
//			;
//			$mailer->get('mailer')->send($message);
//			
//			return $this->render('BdlsProjetBundle:Default:eMail.html.twig', array('name' => $name,'title'=>$title, 'year'=>$year));
		
//		$request = $this->get('request');
//	    if ($request->getMethod() == 'POST') {
//	    	$form->bind($request);
//	      	if ($form->isValid()) {
//	      		$choixtype = $form->get('Type')->getData();
//	        	return $this->redirect($this->generateUrl('bdls_projet_creation', array('type' => $choixtype )));
//	      	}
//	    }
		// Récupération de l'@ mail
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
        
         //Pour obtenir le csrf (input hiden) dont a besoin fosUSERBUNDLE
        public function getTokenAction()
        {
            return new Response($this->container->get('form.csrf_provider')
                                    ->generateCsrfToken('authenticate'));
        }
}

