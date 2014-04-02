<?php

namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
		//$this->set('title', 'Accueil | Diapazen');


		// On charge la vue, si l'utilisateur est connectÃ© ou pas
		/*
		if ($this->isUserConnected())
		{
			// On redirige vers le dashboard
			header('Location:' . BASE_URL .'/dashboard');
		}
		else//*/
		{
			// On fait de rendu de la vue home.php
			return $this->render('BdlsProjetBundle:Default:home.html.twig', array('title'=>$title));
			//$this->render('home');
		}
	}
	
	public function forgotAction()
	{
		$title='Accueil | Diapazen';
		return $this->render('BdlsProjetBundle:Default:forgot.html.twig', array('title'=>$title));
	}
}

