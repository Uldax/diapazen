<?php
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

require_once 'system/Controller.class.php';

class PollController extends Controller
{

	public function index($params = null)
	{
		$this->create($params);
	}

	public function create($params = null)
	{

		// On charge le modèle des sondages
		$this->loadModel('poll');

		// on fait les requetes nécessaire à la bdd
		//$this->getModel()->find();

		//on envoie les variables à la vue
		//$this->set('maVar', 'maValeure');

		// On fait le rendu
		$this->render('pollCreation');
	}

	public function connect($params = null)
	{

		// On charge le modèle des sondages
		$this->loadModel('poll');

		// On fait le rendu
		$this->render('pollConnection');
	}


	public function share($params = null)
	{
		// On charge le modèle des sondages
		$this->loadModel('poll');

		// On fait le rendu
		$this->render('pollShare');
	}
}

?>