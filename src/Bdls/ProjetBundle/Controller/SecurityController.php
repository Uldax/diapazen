<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecurityController
 *
 * @author ldessaignes
 */
namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
	public function loginAction()
	{
	  // Si le visiteur est déjà identifié, on le redirige vers l'accueil
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			return $this->redirect($this->generateUrl('bdls_projet_index'));
		}

	  $request = $this->getRequest();
	  $session = $request->getSession();
//	  $doc = new DOMDocument;
//	  
//	  $doc->validateOnParse = true;
//	  $doc->Load('layout.html.twig');
//	  echo $doc->getElementById('username');
	  
	  // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) 
		{
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} 
		else 
		{
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		$title = 'Accueil | Diapazen';
		return $this->render('BdlsProjetBundle:Default:home.html.twig', array(
		// Valeur du précédent nom d'utilisateur entré par l'internaute
		'last_username' => $session->get(SecurityContext::LAST_USERNAME),
		'error'         => $error,
		'title'			=> $title,
	  ));
	}

	public function profilAction()
	{
		$title = 'Profil | Diapazen';
		$year=date('Y');
		$data_updated = null;

		// Authentification
		// => à faire

		// ATTENTION sans BDD
		// Si le visiteur n'est identifié, on le redirige vers l'accueil
		if (! $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			return $this->redirect($this->generateUrl('bdls_projet_index'));
		}

		// Traitement pour le retour de formulaire
		$request = $this->get('request');
	    if ($request->getMethod() == 'POST') {
	    	//Récupération donnée
	    	$username_user = $request->get("UsernameUser");
	    	$old_pass = $request->get("password");
	    	$new_pass = $request->get("newPassword");

	    	// Traitement modification password
	    	if($new_pass != null){
	    		// => à faire
	    		$data_updated = true;
	    	}
	    	else
	    		$data_updated = false;
	    }

		// Récupération des information de l'utilisateur
		$user = $this->get('security.context')->getToken()->getUser();

		$username_user = $user->getUsername();
		$compte_user = '??';
		$mail_user = "???";


		return $this->render('BdlsProjetBundle:Default:personalData.html.twig', array(
		'title'			=> $title,
		'year'			=> $year,
		'username_user' => $username_user,
		'compte_user' => $compte_user,
		'mail_user' => $mail_user,
		'data_updated' => $data_updated
	  ));
	}
}
