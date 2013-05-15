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

	/**
	 * Action par défaut
	 * 
	 * url:	diapazen.com/user
	 **/
	public function index($params = null)
	{
		// a gérer
	}

	/**
	 * Connection à l'application
	 * 
	 * url:	diapazen.com/user/login
	 **/
	public function login($params = null)
	{
		// quand on se connecte
		// on charge le modèle de l'utilisateur
		$this->loadModel('user');

		// si l'utilisateur est déja connecté
		if ($this->isUserConnected())
		{
			header('Location: ' . BASE_URL. '/dashboard');
		}

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

				//création de la variable infoLogin
				$this->set('infoLogin','connectionError');

				// La connexion a échoué
				$this->setUserDisconnected();

				// On affiche un formulaire de connexion
				$this->render('login');
			}
			else
			{
				// La connexion a réussie
				$this->setUserConnected($result);

				// On redirige vers la dashboard
				header('Location: ' . BASE_URL. '/dashboard');

			}
		}
		else
		{
			// On affiche un formulaire de connexion
			$this->render('login');
		}

	}

	/**
	 * Modification des information personnelles
	 * 
	 * url:	diapazen.com/user/profile
	 **/
	public function profile($params = null)
	{
		// Titre de la page
		$this->set('title', 'Mon profil | Diapazen');
		
		if ($this->isUserConnected())
		{

			// chargement du modèle user
			$this->loadModel('user');

			//Partie: Modifications des données utilisateur
			if (	isset($_POST['lastname']) && !empty($_POST['lastname'])
				&&	isset($_POST['firstname']) && !empty($_POST['firstname'])
				&&	isset($_POST['mail']) && !empty($_POST['mail']) )
			{
				// On teste le mot de passe de confirmation
				if (isset($_POST['passwordSecurity']) && !empty($_POST['passwordSecurity'])
					&& $this->getModel()->checkPassword($this->getUserInfo('id'), $_POST['passwordSecurity']))
				{
					try
					{
						// met a jour la bdd
						$res = $this->getModel()->changeUser($this->getUserInfo('id'), $_POST['firstname'], $_POST['lastname'], $_POST['mail']);

						//met a jour la session
						$this->setUserInfo('firstname', $_POST['firstname']);
						$this->setUserInfo('lastname', $_POST['lastname']);
						$this->setUserInfo('email', $_POST['mail']);

						// On informe l'utilisateur de la réussite
						$this->set('data_updated', true);
					}
					catch(Exception $e)
					{
						die('Erreur interne de la base de données.');
					}
				}
				else
				{
					// Erreur de mot de passe de confirmation
					$this->set('data_updated', false);
				}
			}

			// On modifie le mot de passe si il est renseigné
			if (	isset($_POST['password']) && !empty($_POST['password'])
				&&	isset($_POST['passwordConfirm']) && !empty($_POST['passwordConfirm']) )
			{
				// On teste le mot de passe de confirmation
				if (isset($_POST['passwordSecurity']) && !empty($_POST['passwordSecurity'])
					&& $this->getModel()->checkPassword($this->getUserInfo('id'), $_POST['passwordSecurity']))
				{
					if ($_POST['password'] == $_POST['passwordConfirm'])
					{
						try
						{
							$res = $this->getModel()->changePassword($this->getUserInfo('id'), $_POST['password']);
						
							// Réussite de la modification du mot de passe
							$this->set('data_updated', true);
						}
						catch(Exception $e)
						{
							die('Erreur interne de la base de données.');
						}
					}
					else
					{
						// Echec de la modification le mot de passe est différent
						$this->set('data_updated', false);
					}
				}
				else
				{
					// Erreur de mot de passe de confirmation
					$this->set('data_updated', false);
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

	/**
	 * Mot de passe oublié
	 * 
	 * url:	diapazen.com/user/forgot
	 **/
	public function forgot($params = null)
	{
		if ($this->isUserConnected())
		{
			header('Location: ' . BASE_URL. '/dashboard');
		}

		// Titre de la page
		$this->set('title', 'Mot de passe oublié | Diapazen');
		$this->render('forgot');
	}

	/**
	 * Récupération du mot de passe
	 * 
	 * url:	diapazen.com/user/retrievePwd
	 **/
	public function retrievePwd($params = null)
	{
		$this->loadModel('user');
		$email = $_POST['mailRetrieve'];


		try
		{
			if(isset($email) && !empty($email) && $this->getModel()->isEmailRegistred($email))
			{
				$password = $this->getModel()->generatorPsw();

				$this->getModel()->changePassword(null, $email, $password);

				try
				{
					echo $password;
					$objMail = new MailUtil();
					$subject = 'Votre nouveau mot de passe.';
					$message = 'Voici votre nouveau mot de passe :<br />'.$password;
					$objMail->sendMail($email, $subject, $message);
				}
				catch(Exception $e)
				{
					die('Envoi mail échoué '+$password);
				}
	        }
			else
			{
				header('Location: ' . BASE_URL. '/user/forgot');
	 		}
		}
		catch(Exception $e)
		{
			die('Erreur interne de la base de données.');
		}

		
	}

	/**
	 * Déconnexion de l'application
	 * 
	 * url:	diapazen.com/user/logout
	 **/
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