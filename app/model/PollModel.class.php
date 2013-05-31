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
        
        private $pollId;
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
     * Affichage d'un sondage
     * @param type $pollUrl url du sondage
     * @return array contenu du sondage
     */
    public function viewPoll($pollUrl)
    {
        try
        {   
            // On r�cup�re les informations de base du sondage
            $request = $this->mDbMySql->prepare("SELECT firstname,lastname,POLL_ID,title,description, creation_date, expiration_date,open,url FROM dpz_view_users_join_polls WHERE url=:URL;");
            $request->bindValue(':URL', $pollUrl);
            $request->execute();
            $pollInfo=$request->fetch(PDO::FETCH_ASSOC);
            
            // On traite le r�sultat
            if($pollInfo)
            {
                // On r�cup�re les informations de chaque choix du sondage de la bdd
                $request = $this->mDbMySql->prepare("SELECT CHOICE_ID,value FROM dpz_view_choice WHERE POLL_ID=:ID;");
                $request->bindValue(':ID', $pollInfo['POLL_ID']);
                $request->execute();
                $results=$request->fetchAll(PDO::FETCH_ASSOC);

                // On r�cup�re les informations de chaque r�sultat des choixdu sondage de la bdd
                $request = $this->mDbMySql->prepare("SELECT CHOICE_ID,choice FROM dpz_view_poll WHERE POLL_ID=:ID;");
                $request->bindValue(':ID', $pollInfo['POLL_ID']);
                $request->execute();
                $choices=$request->fetchAll(PDO::FETCH_ASSOC);

                // Traitements des r�sultats
                $list = array();
                $nbTotalVotes = 0;
                foreach($choices as $choice)
                {
                    $id = $choice['CHOICE_ID'];
                    $list[$id]['choiceName'] = $choice['choice'];
                    $list[$id]['checkList'] = array();
                    foreach($results as $result)
                    {
                        $rid = $result['CHOICE_ID'];
                        if ($id == $rid)
                        {
                            $list[$id]['checkList'][] = $result['value'];
                            $nbTotalVotes++;
                        }
                    }
                }

                // calcul du pourcentage
                foreach($list as &$elem)
                {
                    if (count($elem['checkList']) != 0)
                        $elem['percent'] = (int) round((count($elem['checkList']) / $nbTotalVotes) * 100);
                    else
                        $elem['percent'] = 0;
                }
                
                // On pr�pare le tableau de retour
                $ret = $pollInfo;
                $ret['nbVotes'] = $nbTotalVotes;
                $ret['choices'] = $list;
                return $ret;
            }

            return false;
        }
        catch(Exception $e) 
        {
            throw new Exception('Erreur lors de la tentative de connexion :</br>' . $e->getMessage());
        }
    }

    /**
     * Affichage de la liste des sondages
     * @param type $pollUrl url du sondage
     * @return array contenu du sondage
     */
    public function viewAllPolls($userId)
    {
        try
        {   
            $request = $this->mDbMySql->prepare("SELECT title,description,open,url,POLL_ID,expiration_date,creation_date FROM dpz_view_users_join_polls WHERE USER_ID=:UID ORDER BY open DESC,creation_date DESC;");
            $request->bindValue(':UID', $userId);
            $request->execute();
            return $request->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(Exception $e) 
        {
            throw new Exception('Erreur lors de la tentative de connexion :</br>' . $e->getMessage());
        }
    }
    
    /**
     * Ajout d'un sondage
     * @param type $userId id de l'utilisateur
     * @param type $pollTitle titre du sondage
     * @param type $pollDescription description du sondage
     * @param type $poll_expiration_date date d'expiration du sondage
     * @return boolean true si l'ajout s'est bien ex�cut� sinon false
     */
    public function addPoll($userId, $pollTitle, $pollDescription, $poll_expiration_date)
    {
        try
        {
            //on set les valeurs
            $this->setPollTitle($pollTitle);
            $this->setPollDescription($pollDescription);
            $this->setPollExpirationDate($poll_expiration_date);
            
            // Url unique du sondage. ex: h8ddf2e561
            $this->setPollUrl(substr(md5(uniqid()),5,10));
            
            //on cr�er la requete pour cr�er une ligne d'un nouveau sondage
            $request = $this->mDbMySql->prepare("INSERT INTO dpz_polls 
                        (id, user_id, url, title, description, expiration_date, open) 
                        VALUES (NULL, :USERID, :URL, :TITLE, :DESCRIPTION, :EXPIRATIONDATE, 1);");
            $request->bindValue(':USERID', $userId);
            $request->bindValue(':URL', $this->getPollUrl());
            $request->bindValue(':TITLE', $pollTitle);
            $request->bindValue(':DESCRIPTION', $pollDescription);
            $request->bindValue(':EXPIRATIONDATE', $poll_expiration_date);
            $check = $request->execute();
            
            //on renvoie true si l'ajout a �t� un succ�s sinon false
            if($check == 1) 
            {
                $this->setPollId($this->mDbMySql->lastInsertId());
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(Exception $e)
        {
            throw new Exception('Erreur lors de la tentative d\'ajout d\'un sondage :</br>' . $e->getMessage());
        }
    }

    /**
     * Ajout d'un sondage
     * @param int $choiceId L'id du choix
     * @param string $pollTitle valeur � ins�rer
     * @return boolean true si l'ajout s'est bien ex�cut� sinon false
     */
    public function votePoll($choiceId, $value)
    {
        try
        {
            $request = $this->mDbMySql->prepare("INSERT INTO dpz_results
                        (id, choice_id, value) 
                        VALUES (NULL, :CHOICEID, :VALUE);");
            $request->bindValue(':CHOICEID', $choiceId);
            $request->bindValue(':VALUE', $value);
            
            return $request->execute();
        }
        catch(Exception $e)
        {
            throw new Exception('Erreur lors de la tentative d\'ajout d\'une r�ponse :</br>' . $e->getMessage());
        }
    }
    
    /**
     * Mise � jour de la table Sondage
     * @return boolean true si la mise � jour s'est bien ex�cut� sinon false
     */
    public function updatePoll($pollId)
    {
        try
        {
            $request = $this->mDbMySql->prepare("UPDATE .dpz_polls SET open=0 WHERE id = :POLLID;");
            $request->bindValue(':POLLID', $pollId);
            return $request->execute();
        }
        catch(Exception $e)
        {
            throw new Exception('Erreur lors de la mise a jour de la table sondage :</br>' . $e->getMessage());
        }
    }
    
    /**
     * Modification d'un sondage
     * @param type $pollTitle titre du sondage
     * @param type $pollDescription description du sondage
     * @param type $poll_expiration_date date d'expiration du sondage
     * @return boolean true si la modification s'est bien ex�cut� sinon false
     */
    public function modifPoll($pollTitle, $pollDescription, $poll_expiration_date)
    {
        try
        {
            $this->setPollTitle($pollTitle);
            $this->setPollDescription($pollDescription);
            $this->setPollExpirationDate($poll_expiration_date);
            $request = $this->mDbMySql->prepare("UPDATE .dpz_polls SET
                        title=:TITLE,description=:DESCRIPTION,expiration_date=:EXPIRATIONDATE 
                        WHERE dpz_polls.url=:URL;");
            $request->bindValue(':URL', $this->getPollUrl());
            $request->bindValue(':TITLE', $pollTitle);
            $request->bindValue(':DESCRIPTION', $pollDescription);
            $request->bindValue(':EXPIRATIONDATE', $poll_expiration_date);
            return $request->execute();
            
        }
        catch(Exception $e)
        {
            throw new Exception('Erreur lors de la modification du sondage :</br>' . $e->getMessage());
        }
    }
    
    /**
     * Suppression d'un sondage
     * @param type $pollId identifient du sondage
     * @return boolean true si la suppression s'est bien ex�cut� sinon false
     */
    public function deletePoll($pollId)
    {
        try
        {
            $this->setPollTitle(NULL);
            $this->setPollDescription(NULL);
            $this->setPollExpirationDate(NULL);
            $this->setPollUrl(NULL);
            $request = $this->mDbMySql->prepare("DELETE FROM dpz_polls WHERE id=:ID");
            $request->bindValue(':ID', $pollId);
            return $request->execute();
        }
        catch(Exception $e)
        {
            throw new Exception('Erreur lors de la suppression du sondage :</br>' . $e->getMessage());
        }
    }

    /**
     * R�cup�re le contenu du textarea et parse les emails
     * @return Tableau avec les emails valides auquels les mails ont �t� envoy�
     */
    public function sharePoll($texteareaContent)
    {

        $emails = preg_split("/[\r\n,; ]+/", $texteareaContent, -1, PREG_SPLIT_NO_EMPTY);

        $emails = array_unique($emails);

        $regexMail = '#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#';
        foreach($emails as $current)
        {
            if(!preg_match($regexMail, $current))
            {
                unset($emails[array_search($current, $emails)]);
            }
        }

        if (!isset($emails))
        {
            return null;
        }

        return $emails;
    }
    
    /**
     * Setteur du titre du sondage
     * @param type $pollTitle titre du sondage
     */
    public function setPollTitle($pollTitle)
    {
        $this->pollTitle = $pollTitle;
    }
    /**
     * Setteur de l'id du sondage
     * @param type $pollId Id du sondage
     */
    public function setPollId($pollId)
    {
        $this->pollId = $pollId;
    }
    
    /**
     * Setteur de la description du sondage
     * @param type $pollDescription description du sondage
     */
    public function setPollDescription($pollDescription)
    {
        $this->pollDescription = $pollDescription;
    }
    
    /**
     * Setteur de la date d'expiration du sondage
     * @param type $poll_expiration_date date d'expiration du sondage
     */
    public function setPollExpirationDate($poll_expiration_date)
    {
        $this->poll_expiration_date = $poll_expiration_date;
    }
    
    /**
     * Setteur de l'url du sondage
     * @param type $pollUrl url du sondage
     */
    public function setPollUrl($pollUrl)
    {
        $this->pollUrl = $pollUrl;
    }
    
    /**
     * Getteur du titre du sondage
     */
    public function getPollId()
    {
        return $this->pollId;
    }
    /**
     * Getteur de l'id du sondage
     */
    public function getPollTitle()
    {
        return $this->pollTitle;
    }
    
    /**
     * Getteur de la description du sondage
     */
    public function getPollDescription()
    {
        return $this->pollDescription;
    }
    
    /**
     * Getteur de la date d'expiration du sondage
     */
    public function getPollExpirationDate()
    {
        return $this->poll_expiration_date;
    }
    
    /**
     * Getteur de l'url du sondage
     */
    public function getPollUrl()
    {
        return $this->pollUrl;
    }

}

?>