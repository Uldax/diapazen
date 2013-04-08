<?php
/**
 * 
 * File using for send e-mail
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

class MailUtil 
{
	protected $mailFrom;
	protected $pswFrom;
	protected $configSMTP;

	 /**
	 * Fonction permettant d'envoyer un mail 
	 * 
	 * Cette méthode permet d'envoyer un mail depuis $mailFrom à $mailTo
	 * 
	 * @param     string	$mailTo	mail de destination
	 * @param     string    $subject sujet du mail
	 * @param     string    $message message du mail
	 */
	 public function sendMail($mailTo,$subjet,$message)
	{
		
	}
}

?>