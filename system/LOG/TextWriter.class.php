<?php

/**
 * 
 * Writer text
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
require_once "IWriter.php";
require_once "./defineConstant.inc.php";
class TextWriter implements IWriter
{
   private $mlogSizeMax=5242880; //5Mo
   private  $mlogSizeAlert=5138020; // environs 98% de 5Mo

   private  $mfile;
   

    /**
    * Constructeur
    * 
    * Constructeur du writer texten defini le fichier du log
    * 
    * @param     string	file	url du fichier de log text
    */ 
   public function __construct($file="") 
   {
      if ($file != "")
      {
          $this->mfile = $file;   
      }
      else
      {
          $this->mfile =WRITER_ROOT."log.txt";
      }
     
   }
   
    /**
    * write
    * 
    * Ajout d'un log implemente l'interface IWRITER
    * 
    * @param     string message  log
     */
   public function write($message)
   {
      $logSize = $this->testSize();
      if ($logSize <= $this->mlogSizeMax)
      {
       
         file_put_contents($this->mfile, array(PHP_EOL, $message),
            FILE_APPEND | LOCK_EX );
         $logSize = $this->testSize(); 
         if ($logSize >=  $this->mlogSizeAlert) 
         {
            //envoi d'un mail d'alerte
         }
      }
      
   }

        /**
     * Test size
     * 
     * retourne la taille du fichier de log
     * 
     * 
     * @return   int taille du fichier de log
     */
   private function testSize()
   {
      return (file_exists($this->mfile)) ? filesize($this->mfile) :0;
   }



}

?>
