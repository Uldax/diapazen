<?php
/**
 * 
 * Contrôleur de la page de gestion des sondages 
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
namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
define("DS", DIRECTORY_SEPARATOR);
if (dirname($_SERVER['SCRIPT_NAME']) == DS)
	$sub_dir = '';
else
	$sub_dir = dirname($_SERVER['SCRIPT_NAME']);

define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].$sub_dir);
//require_once 'system/Controller.class.php';

/**
 * DashboardController
 *
 * Contrôleur de la page de gestion des sondages
 * 
 * @package		Diapazen
 * @subpackage	Controller
 */
class DashboardController extends Controller
{

	/**
    * Index du Dashboard
    *
    * Récupère le model 'poll'
    * Gère  : 
    * - Met le titre de la page à 'Tableau de bord | Diapazen'.
    * - La fermeture de sondage
    * - Met à jour les sondages expirés dans la BDD
    * - Lance le render de la vue 'dashboard' (si l'utilisateur est connecté)
    * - Retourne à la page d'accueil (si l'utilisateur n'est aps connecté)
    *
    * @param type $params null par défaut
    *
    */
	public function indexAction($params = null)
	{
		//Authentification
		// => à faire

		// ATTENTION sans BDD
		// Si le visiteur n'est identifié, on le redirige vers l'accueil
		if (! $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			return $this->redirect($this->generateUrl('bdls_projet_index'));
		}
		
		// Titre de la page
		$title='Tableau de bord | Diapazen';
		$year=date('Y');
		$data_updated = null;


		try
		{
			
			$id_user = $this->getUser()->getId();

			//traitement en cas de réponse (cloturer un sondage)
			$request = $this->get('request');
		    if ($request->getMethod() == 'POST') {
		    	//recup de l'id su sondage a cloturer
		    	$id_closa = $request->get("close");

		    	//traitement de la fermeture du sondage
		    	// => à faire

		    	$data_updated = false;
		    }

		    $table = array();

		    //Récupération des sondages de l'utilisateur
		    //text
		    $path="BdlsProjetBundle:".ucfirst("text");
			$entity=$path."Poll";

		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

			$qb->select('p')
			   ->from($entity, 'p')
			   ->where('p.created_by = ?1')
			   ->setParameter(1, $id_user);
			$query = $qb->getQuery();
			$all_text_poll = $query->getResult();


			foreach ($all_text_poll as $article) {
				$row = array(
					'open' => $article->getIsOpen(),
					'type' => 'Textuel',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => date('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => 'euhhh',
					'URL' => $article->getUrl());
				$table[] = $row;
			}

			//date
			$path="BdlsProjetBundle:".ucfirst("date");
			$entity=$path."Poll";

		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

			$qb->select('p')
			   ->from($entity, 'p')
			   ->where('p.created_by = ?1')
			   ->setParameter(1, $id_user);
			$query = $qb->getQuery();
			$all_date_poll = $query->getResult();


			foreach ($all_date_poll as $article) {
				$row = array(
					'open' => $article->getIsOpen(),
					'type' => 'Date',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => date('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => 'euhhh',
					'URL' => $article->getUrl());
				$table[] = $row;
			}

			//place
			$path="BdlsProjetBundle:".ucfirst("place");
			$entity=$path."Poll";

		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

			$qb->select('p')
			   ->from($entity, 'p')
			   ->where('p.created_by = ?1')
			   ->setParameter(1, $id_user);
			$query = $qb->getQuery();
			$all_date_poll = $query->getResult();


			foreach ($all_date_poll as $article) {
				$row = array(
					'open' => $article->getIsOpen(),
					'type' => 'Lieu',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => date('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => 'euhhh',
					'URL' => $article->getUrl());
				$table[] = $row;
			}


			//Donnée de test (sans BDD)
			/*$table = array(
					array(
						'open' => true,
						'type' => 'textuel',
						'date_open' => date('d/m/Y'),
						'date_close' => date('d/m/Y'),
						'title' => 'blabla open',
						'description' => 'euhhh',
						'URL' => 24),
					array(
						'open' => false,
						'type' => 'textuel',
						'date_open' => date('d/m/Y'),
						'date_close' => date('d/m/Y'),
						'title' => 'blabla close',
						'description' => 'euhhh',
						'URL' => 24)
				);*/





			return $this->render('BdlsProjetBundle:Default:dashboard.html.twig',array(
				'title'=>$title, 
				'year'=>$year,
				'data_updated' => $data_updated,
				'pollList' => $table
			));
		}
		catch(Exception $e)
		{
			//$this->render('dbError');
			return $this->render('BdlsProjetBundle:Default:dbError.html.twig');
		}

			
	}

}

?>