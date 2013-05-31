<?php


/**
 * 
 * Cette classe fait le lien entre la base de données et les contrôleurs
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

//require_once 'system/Config.class.php';

class Model
{

	/*
	 * Instance de PDO
	 */
	protected $mDbMySql;

	/**
	 * Constructeur
	 *
	 */
	public function __construct()
	{
		
		$this->mDbMySql = $this->connectToDatabase();
	}

	/**
	 * Connexion de la classe à la database
	 *
	 * @return	l'instance de PDO
	 */
	public function connectToDatabase()
	{
		try
		{

			$dataBaseConfig = Config::getDatabaseConfig();
			
            $options[PDO::ATTR_ERRMODE]				= PDO::ERRMODE_EXCEPTION;	// Exceptions autorisées
            $options[PDO::MYSQL_ATTR_INIT_COMMAND]	= "SET NAMES utf8";			// L'encodage est en utf-8

            // le @ désactive les warnings
        	return @new PDO('mysql:host='.$dataBaseConfig['host'].';dbname='.$dataBaseConfig['name'], $dataBaseConfig['user'], $dataBaseConfig['pass'], $options);
        }
        catch(Exception $e) 
        {
        	die('<html><head><meta charset="utf-8" /></head><body><strong>Erreur de connexion à la base de données</strong><div>Vérifiez le fichier de configuration.</div></body></html>');
            //throw new Exception('Erreur connexion base de donnée ' . $e->getMessage());
        }

	}

	/**
	 * Lecture
	 *
	 * @return	tableau
	 */
	public function read()
	{
		echo'4';
	}

	/**
	 * Fait une recherche dans la base de données
	 *
	 * @param 	array $data Paramètres de la recherche
	 * @return	Un tableau de résultats
	 */
	public function find($data=array())
	{
		try
		{
			$conditions= "1=1";
			$fields= "*";
			$limit= "";
			$order= "id DESC";

			if(isset($data['conditions'])) $conditions=$data['conditions'];
			if(isset($data['fields'])) $fields=$data['fields'];
			if(isset($data['limit'])) $limit=$data['limit'];
			if(isset($data['order'])) $order=$data['order'];

			// selon les paramètres, on récupère les champs, avec conditions, avec un ordre, avec une limite
			$request = $this->mDbMySql->prepare("SELECT $fields FROM diapazen.dpz_view_users WHERE $conditions ORDER BY $order $limit");
			//$request->bindValue(':FIELDS', $fields);
			//$request->bindValue(':CONDITIONS', $conditions);
			//$request->bindValue(':ORDER', $order);
			//$request->bindValue(':LIMITATION', $limit);
			$request->execute();

			$result=array();
			while($data = $request->fetch()){
				$result[]= $data;
			}

			return $result;
		}
		catch(Exception $e) 
        {
            throw new Exception('Erreur connexion base de donnée ' . $e->getMessage());
        }
	}

}

?>