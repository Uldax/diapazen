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
namespace PollBundle\Controller;

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
		    	$data_updated = false;
		    	try{
		    		$close_id = $request->get("close_id");
			    	$close_type = $request->get("close_type");

			    	$path="BdlsProjetBundle:".ucfirst($close_type);
					$entity=$path."Poll";

				    $em = $this->getDoctrine()->getManager();
					$qb = $em->createQueryBuilder();

					$qb->select('p')
					   ->from($entity, 'p')
					   ->where('p.id = ?1')
					   ->setParameter(1, $close_id);
					$query = $qb->getQuery();
					$all_poll_close = $query->getResult();

					foreach ($all_poll_close as $poll_close) {
						$poll_close->setIsOpen(0);
						$now  = new \DateTime('now');
						$poll_close->setClosedOn($now);
						$em->persist($poll_close);
						$em->flush();
						$data_updated = true;
					}

		    	}
		    	catch(Exception $e){
		    		$data_updated = false;
		    	}

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
					'id' => $article->getId(),
					'open' => $article->getIsOpen(),
					'type' => 'Textuel',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => $article->getClosedOn()->format('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => $article->getDescription(),
					'URL' => $article->getUrl(),
					'short_type' => 'text');
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
					'id' => $article->getId(),
					'open' => $article->getIsOpen(),
					'type' => 'Date',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => $article->getClosedOn()->format('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => $article->getDescription(),
					'URL' => $article->getUrl(),
					'short_type' => 'date');
				$table[] = $row;
			}

			//lieu
			$path="BdlsProjetBundle:".ucfirst("place");
			$entity=$path."Poll";

		    $em = $this->getDoctrine()->getManager();
			$qb = $em->createQueryBuilder();

			$qb->select('p')
			   ->from($entity, 'p')
			   ->where('p.created_by = ?1')
			   ->setParameter(1, $id_user);
			$query = $qb->getQuery();
			$all_lieu_poll = $query->getResult();


			foreach ($all_lieu_poll as $article) {
				$row = array(
					'id' => $article->getId(),
					'open' => $article->getIsOpen(),
					'type' => 'Lieu',
					'date_open' =>  $article->getCreatedOn()->format('d/m/Y'),
					'date_close' => $article->getClosedOn()->format('d/m/Y'),
					'title' =>  $article->getName(),
					'description' => $article->getDescription(),
					'URL' => $article->getUrl(),
					'short_type' => 'place');
				$table[] = $row;
			}

			$table = array_sort($table, 'open', SORT_DESC);
			//asort($table);


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

/*
* Fonction de tri de tableau
* Récupèrer sur le site
* http://www.php.net/manual/fr/function.sort.php
*/

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

?>