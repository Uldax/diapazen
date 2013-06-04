<?php


/**
 * 
 * Class model d'utilisateur
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

require_once 'system/Model.class.php';

class UserModel extends Model
{	
	/**
	 * Constructeur
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Test des paramêtres du constructeur
	 * @param  params liste des paramêtres du constructeur
	 *
	 * @return bool true si les paramêtres sont bons
	 */
	private function testParamConstruct($params)
	{
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

		//si le premier paramêtre est true
		//test du nom, prénom, email
		if($params[0] && count($params)==4)
		{
			if(!empty($params[1]) && !empty($params[2]) && preg_match($regex, ($params[3])))
				return true;
			else
				return false;
		}
		//test de l'id, email, password
		else if(!$params[0] && count($params)==4)
		{
			if(!empty($params[1]) && preg_match($regex, ($params[2])) && !empty($params[3]))
				return true;
			else
				return false;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Connexion de l'utilisateur
	 *
	 * @param email email renseigné par l'utilisateur
	 * @param password mot de passe renseigné par l'utilisateur
	 * @param login_ip ip de l'utilisateur
	 *
	 * @return	bool true si la connexion s'est bien passé
	 */
	public function connectionToApp($email,$password,$login_ip=null)
	{
		try
		{
			// si les parametres sont corrects
			if(isset($email) && isset($password))
			{
				if($email != null && $password != null)
				{
					// on récupère l'identifiant, le mail et le password avec une clause WHERE sur l'email
					$fields = array('id', 'lastname', 'firstname', 'email', 'password');
					$view	= 'dpz_view_connexion';
					$where 	= array('email' => $email);

					$infos = $this->selectWhere($fields, $view, $where, 'assoc');

					// si on a un résultat, c'est que ce mail est dans la bdd
					// maintenant, on doit vérifier le password
					if (!empty($infos))
					{
						if (crypt($password, $infos[0]['password']) == $infos[0]['password']) 
						{
							$this->mId = $infos[0]['id'];

							$this->updateConnectionData($infos[0]['id'],$login_ip);

							return array(		'id' 		=> $infos[0]['id'],
												'firstname' => $infos[0]['firstname'],
												'lastname'	=> $infos[0]['lastname'],
												'email' 	=> $infos[0]['email']
											);
						}
					}
				}
			}
			return false;
		}
		catch(Exception $e) 
        {
            throw new Exception('Erreur lors de la tentative de connexion :</br>' . $e->getMessage());
        }
	}


	/**
	 * Mise à jour des données de connexion de l'utilisateur (adresse ip et date de derniere connexion)
	 *
	 * @param login_ip ip de l'utilisateur
	 *
	 * @return	bool true si la mise à jour s'est bien passé
	 */
	public function updateConnectionData($id,$login_ip=null)
	{
		try
		{
			// si le parametre est correct
			if(isset($id))
			{
				if( $id != null)
				{

					// on modifie les données de connexion grace à une clause where sur l'id
					$values = array('last_login_date' => date("Y-m-d H:i:s"), 'last_login_ip' => $login_ip);
					$conditions = array('id' => $id);
					return $this->updateWhere($values, $conditions, 'dpz_users');
				}				
			}
			return false;
		}
		catch(Exception $e) 
        {
            throw new Exception('Erreur lors de la tentative de mise à jour des données de connexion :</br>' . $e->getMessage());
        }
	}


	/**
	 * Récupération des données de l'utilisateur (sauf mot de passe)
	 *
	 * @param id id de l'utilisateur
	 *
	 * @return	bool true si on a bien récupéré les données de l'utilisateur
	 */
	public function dataProvider($id)
	{
		try
		{
			// si les parametres sont corrects
			if(isset($id))
			{
				if($id != null)
				{
					// on récupère toutes les données de l'utilisateur sauf le password avec une clause WHERE sur l'identifiant
					$fields = 'firstname, lastname, email, registration_date, last_login_date, last_login_ip';
					$view	= 'dpz_view_users';
					$where	= array('id' => $id);
					
					$infos = $this->selectWhere($fields, $view, $where, 'assoc');
					$infos = $infos[0];

					// si on a un résultat, c'est qu'il n'y a pas d'erreur sur l'identifiant
					if(!is_null($infos))
					{
						$this->mFirstname = $infos['firstname'];
						$this->mLastname = $infos['lastname'];
						$this->mEmail = $infos['email'];
						$this->mRegistration_date = $infos['registration_date'];
						$this->mLast_login_date = $infos['last_login_date'];
						$this->mLast_login_ip = $infos['last_login_ip'];
						return array(	
										'firstname' 		=> $infos['firstname'],
										'lastname'			=> $infos['lastname'],
										'email' 			=> $infos['email'],
										'registration_date' => $infos['registration_date'],
										'last_login_date'	=> $infos['last_login_date'],
										'last_login_ip' 	=> $infos['last_login_ip']
									);
					}
				}
			}
			return false;
		}
		catch(Exception $e) 
        {
            throw new Exception('Erreur lors de la tentative de récupération des données :</br>' . $e->getMessage());
        }
	}




	/**
	 * Enregistrement d'un nouvel utilisateur
	 *
	 * @param firstname prénom renseigné par l'utilisateur
	 * @param lastname nom de famille renseigné par l'utilisateur
	 * @param email email renseigné par l'utilisateur
	 * @param password mot de passe renseigné par l'utilisateur
	 *
	 * @return	bool true si l'enregistrement s'est bien passé
	 */
	public function registration($firstname,$lastname,$email,$password)
	{
		try
		{
			// si les parametres sont corrects
			if(isset($firstname) && isset($lastname) && isset($email) && isset($password))
			{
				if($firstname != null && $lastname != null && $email != null && $password != null)
				{
					
					if(!$this->isEmailRegistred($email))
					{
						// On hash le mot de passe avec BlowFish (md5 et sha1 etant unsecure)
						$salt = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789/."), 0, 20);
						$password = crypt($password, '$2a$07$'.$salt.'$');

						$values = array('id'                => 'NULL',
										'firstname'			=> $firstname,
										'lastname'			=> $lastname,
										'email'				=> $email,
										'password'			=> $password,
				                        'registration_date' => date("Y-m-d H:i:s"),
				                        'last_login_date'   => '',
				                        'last_login_ip'     => 'NULL'
				                        );

						return $this->insert($values, 'dpz_users');
					}
					else
					{
						throw new Exception();						
					}
				}
			}
			return false;
		}
		catch(Exception $e) 
		{
			throw new Exception('email_already_in_db');
		}
	}
        
    /**
     * Modification du profil de l'utilisateur
     * @param type $id id de l'utilisateur
     * @param firstname prénom renseigné par l'utilisateur
 	 * @param lastname nom de famille renseigné par l'utilisateur
     * @param email email renseigné par l'utilisateur
     * @return boolean true si la modification s'est bien passé
     */
    public function changeUser($id, $firstName, $lastName, $email)
    {
       	$values = array('firstname' => $firstName,
        				'lastname'	=> $lastName,
        				'email'		=> $email);

        return $this->updateWhere($values, array('id' => $id), 'dpz_users');
    }
    
    /**
     * Modification du mot de passe de l'utilisateur
     * @param type $email email de l'utilisateur
     * @param type $password mot de passe renseigné par l'utilisateur
     * @return boolean si la modification s'est bien passé
     */
    public function changePassword($email, $password)
    {
        // On hash le mot de passe avec BlowFish (md5 et sha1 etant unsecure)
		$salt = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789/."), 0, 20);
        $password = crypt($password, '$2a$07$'.$salt.'$');

		$values = array('password' => $password);
		$conditions = array('email' => $email);
        return $this->updateWhere($values, $conditions, 'dpz_users');
    }

    /**
     * Vérification du mot de passe de l'utilisateur
     * @param type $id id de l'utilisateur
     * @param type $password mot de passe renseigné par l'utilisateur
     * @return boolean si la vérification s'est bien passé
     */
    public function checkPassword($id, $password)
    {
    	// on récupère le password avec une clause WHERE sur l'id
		$infos = $this->selectWhere('password, email', 'dpz_view_connexion', array('id' => $id));

		if(!is_null($infos))
		{
			// vérification du hash
			if( crypt($password, $infos[0]['password']) == $infos[0]['password']) 
				return true;
		}

		return false;
    }

    /**
	 * Fonction qui génère un mot de passe aléatoire
	 * 
	 * Cette méthode génère un mot de passe aléatoire
	 * 
	 * @param     int	$size	taille du mot de passe
	 * @return retourne le mot de passe
	 */
    public function generatorPsw($size=8)
    {
    	$list = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

		mt_srand((double)microtime()*1000000);

		$psw="";

		while( strlen( $psw )< 9 ) 
		{
			$psw .= $list[mt_rand(0, strlen($list)-1)];
		}

		return $psw;
    }
   
    /**
     * Vérification si email contenu dans bdd
     * @param type $email email à vérifier
     * @return boolean true si l'email est présent
     */
    public function isEmailRegistred($email)
	{
		$infos = $this->selectWhere('count(*)', 'dpz_view_users', array('email' => $email));

		if($infos[0][0] < 1)
		{		
			return false;
		}
		
		return true;
	}

}

?>