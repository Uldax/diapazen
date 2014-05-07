<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserClassController
 *
 * @author ldessaignes
 */
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

class UserClassController implements UserInterface, \Serializable
{
	private $id;
	private $name;
	private $mail;
	private $password;
	private $salt;
	private $isActive;
	
	public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }
	
	public function getPassword()
	{
		return $this->password;
	}

	public function getRoles()
	{
		return array('ROLE_USER');
	}

	public function getSalt()
	{
		return $this->salt;
	}

	public function getUsername()
	{
		return $this->name;
	}
	
	public function serialize()
	{
		return serialize(array(
            $this->id,
        ));
	}

	public function unserialize($serialized)
	{
		list (
            $this->id,
        ) = unserialize($serialized);
	}

	public function eraseCredentials()
	{
		
	}
	
	public function isEqualTo(UserInterface $user)
	{
		return $this->username === $user->getUsername();
	}
}
