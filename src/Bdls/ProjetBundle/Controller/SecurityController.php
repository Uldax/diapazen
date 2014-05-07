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
}
