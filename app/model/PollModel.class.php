<?php


/**
 * 
 * Class model d'un sondage
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

class PollModel extends Model
{
        
        private $pollUrl;
        private $pollTitle;
        private $pollDescription;
        private $poll_expiration_date;


        /**
	 * Constructeur par d�faut
	 */
	public function __construct()
	{
		parent::__construct();
	}
        
        /**
         * Cr�ation d'une chaine de caract�re al�atoire
         * @param type $number nombre de caract�res
         * @return string la chaine de caract�re
         */
        private function randomString($number)
        {
            $string = "";
            $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            srand((double)microtime()*1000000);
            for($i=0; $i<$number; $i++) {
            $string .= $chaine[rand()%strlen($chaine)];
            }
            return $string;
        }
        
        /**
         * Construction d'un sondage
         * @param type $pollTitle titre du sondage
         * @param type $pollDescription description du sondage
         * @param type $poll_expiration_date date d'expiration du sondage
         */
        public function pollModel($pollTitle, $pollDescription, $poll_expiration_date)
        {
            $this->pollTitle = $pollTitle;
            $this->pollDescription = $pollDescription;
            $this->poll_expiration_date = $poll_expiration_date;
            $this->pollUrl = $this->randomString(11);
        }

}

?>