<?php

namespace Bdls\ProjetBundle\Entity;

use Bdls\ProjetBundle\Entity\User as User;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
class Poll
{
	/** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
	private $id;

	/** @ORM\Column(type="datetime") */
	private $created_on;
        
        /** @ORM\ManyToOne(targetEntity="User")
	    @ORM\JoinColumn(nullable=false) 
         */
	private $created_by;

        /** @ORM\Column(type="text")*/
	private $name;

	/** @ORM\Column(type="string") */
	private $url;

	/** @ORM\Column(type="boolean") */
	private $is_open;
}


