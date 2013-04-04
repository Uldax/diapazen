<?php


/**
 * 
 * Fichier de définitions des constantes
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
define("DS", DIRECTORY_SEPARATOR);
define("WEB_ROOT", dirname(__FILE__).DS.'..'.DS);
define("APP_ROOT", WEB_ROOT.'app'.DS);
define("MODEL_ROOT", APP_ROOT.'model'.DS);
define("VIEW_ROOT",APP_ROOT.'view'.DS);
define("CONTROLLER_ROOT", APP_ROOT.'controller'.DS);
define("UTIL_ROOT", WEB_ROOT.'util'.DS);
?>