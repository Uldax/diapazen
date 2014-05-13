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
		// ATTENTION vérifier la connection avant d'afficher
		if (! $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			return $this->redirect($this->generateUrl('bdls_projet_index'));
		}
		
		// Titre de la page
		$title='Tableau de bord | Diapazen';
		$year=date('Y');
		$data_updated = null;


		/*
		// on charge le model
		$this->loadModel('poll');
		//*/
		try
		{
			//traitement en cas de réponse
			$request = $this->get('request');
		    if ($request->getMethod() == 'POST') {
		    	$id_closa = $request->get("close");
		    	$data_updated = false;
		    }

			//si on a fermé un sondage
			/*if (isset($_POST['close']) && !empty($_POST['close']))
			{
				if ($this->getModel()->updatePoll($_POST['close']))
				{
					// clôture réusie
					$this->set('data_updated', true);
				}
				else
				{
					// echec de la clôture
					$this->set('data_updated', false);
				}
			}

			//test si l'utilisateur est connecté
			if ($this->isUserConnected())
			{
				//récupération de l'id du user et de ses sondages
				$uid = $this->getUserInfo('id');
				$polls = $this->getModel()->viewAllPolls($uid);
				
				// recherche des sondages expirés
				foreach ($polls as &$poll)
				{
					$exp_date = new DateTime($poll['expiration_date']);
					$now = new DateTime('now');
					$interval = $now->diff($exp_date);
					if($interval->invert && $poll['expiration_date'] != '0000-00-00 00:00:00')
					{
						$poll['open'] = false;
						// On met à jour le sondage dans la bdd
						try
						{
							$this->getModel()->updatePoll($poll['POLL_ID']);
						}
						catch (Exception $e)
						{
							die("Erreur lors de la mise à jour");
						}
					}

				}
			
				$this->set('pollList', $polls);
				$this->render('dashboard');
			}
			else
			 
			 //*/

			// donné de test
			$table = array(
					array(
						'open' => true,
						'date' => date('d/m/Y'),
						'title' => 'blabla open',
						'description' => 'euhhh',
						'POLL_ID' => 24),
					array(
						'open' => false,
						'date' => date('d/m/Y'),
						'title' => 'blabla close',
						'description' => 'nope',
						'POLL_ID' => 28)
				);





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