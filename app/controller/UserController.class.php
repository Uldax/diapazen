<?php
/**
 * 
 * Contrôleur de la page des utilisateurs
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

class UserController extends Controller
{


	public function index($params = null)
	{
		// a gérer
	}


	public function login($params = null)
	{
		// quand on se connecte
		// on charge le modèle de l'utilisateur
		$this->loadModel('user');

		if (	isset($_POST['mailConnect'])		&& !empty($_POST['mailConnect'])
			&&	isset($_POST['passwordConnect'])	&& !empty($_POST['passwordConnect']))
		{

			$email	 	= $_POST['mailConnect'];
			$passwd 	= $_POST['passwordConnect'];
			$ip_addr 	= $_SERVER['REMOTE_ADDR'];

			
			try
			{
				// on vérifie les infos avec la bdd
				$result = $this->getModel()->connectionToApp($email, $passwd, $ip_addr);
			}
			catch(Exception $e)
			{
				// IMPORTANT: ERREUR A GERER PROPREMENT !!!!!
				die('Erreur interne survenue.');
			}

			if ($result == false)
			{
				// La connexion a échoué
				$this->setUserDisconnected();
			}
			else
			{
				// La connexion a réussie
				$this->setUserConnected($result);

				// On redirige vers la dashboard
				header('Location: ' . BASE_URL. '/dashboard');

			}
		}

	}

	public function profile($params = null)
	{
		if ($this->isUserConnected())
		{

			// chargement du modèle user
			$this->loadModel('user');

			//Partie: Modifications des données utilisateur
			if (	isset($_POST['lastname']) && !empty($_POST['lastname'])
				&&	isset($_POST['firstname']) && !empty($_POST['firstname'])
				&&	isset($_POST['mail']) && !empty($_POST['mail']) )
			{
				
				try
				{
					$res = $this->getModel()->changeUser($this->getUserInfo('id'), $_POST['firstname'], $_POST['lastname'], $_POST['mail']);
				}
				catch(Exception $e)
				{
					die('Erreur interne de la base de données.');
				}
			}

			// On modifie le mot de passe si il est renseigné
			if (	isset($_POST['password']) && !empty($_POST['password'])
				&&	isset($_POST['passwordConfirm']) && !empty($_POST['passwordConfirm']) )
			{
				if ($_POST['password'] == $_POST['passwordConfirm'])
				{
					try
					{
						$res = $this->getModel()->changePassword($this->getUserInfo('id'), $_POST['mail'], $_POST['password']);
					}
					catch(Exception $e)
					{
						die('Erreur interne de la base de données.');
					}
				}
				else
				{
					//si le mdp n'est pas le même
				}
				
			}

			// Partie: affichage des données
			// On récupère l'id de l'utilisateur (session)
			$id = $this->getUserInfo('id');

			// On récupère ses infos dans la bdd
			try
			{
				$user = $this->getModel()->dataProvider($id);
			}
			catch(Exception $e)
			{
				die('Erreur interne de la base de données.');
			}

			// Envoie des variables vers la vue
			if ($user)
			{
				$this->set('firstname', $user['firstname']);
				$this->set('lastname', $user['lastname']);
				$this->set('email', $user['email']);
			}


			//  Rendu de la page
			$this->render('personalData');
		}
		else
			header('Location:' . BASE_URL);
	}

	public function logout($params = null)
	{
		// quand on se déco.
		$this->setUserDisconnected();
		session_destroy();
		// On redirige vers l'accueil
		header('Location: ' . BASE_URL);
	}
}

?>