<?php

namespace PollBundle\Controller;
use PollBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use PollBundle\Entity\TextPoll as TextPoll;
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

		$title='E mail | Diapazen';
		$year=date('Y');

		$message = \Swift_Message::newInstance();
                $message->setSubject("Objet");
                $message->setFrom('contact.diapazen@gmail.com');
		$message->setTo($tabMails);

        // pour envoyer le message en HTML
        //$message->setBody($this->renderView('PollBundle:Default:eMail.html.twig', array('name' => $name,'title'=>$title, 'year'=>$year)));

                $type=$_SESSION['type'];
                $url=$_SESSION['url'];
                $message->setBody(
				'<html>' .
					' <head></head>' .
					' <body>' .
						' <p> Bonjour, <br/>' .
						' Un sondage a été créé et vous y êtes convié <br/>'.
						' www.dipazen.com/'.$type.'/'.$url.' </p>' .
					' </body>' .
				'</html>',
				'text/html' // Mark the content-type as HTML
				);
		//envoi du message
		$this->get('mailer')->send($message);
                //
                unset($_SESSION['pool']);
		return $this->render('PollBundle:Default:shareMail.html.twig', array('title'=>$title, 'year'=>$year));
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
		return $this->render('PollBundle:Base:forgot.html.twig', array('title'=>$title, 'year'=>$year, 'last_username'));
	}


        public function isUserConnected()
	{
                return ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'));
	}
}

