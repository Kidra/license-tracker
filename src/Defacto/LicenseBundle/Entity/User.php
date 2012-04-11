<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=64)
	 */
	protected $name;

	/**
	 * @ORM\OneToOne(targetEntity="Computer")
	 * @ORM\JoinColumn(name="computer_id", referencedColumnName="id")
	 */
	protected $computer;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName($name)
	{
	    $this->name = $name;
	    return $this;
	}

	public function getComputer()
	{
	    return $this->computer;
	}
	
	public function setComputer(Computer $computer)
	{
	    $this->computer = $computer;
	    return $this;
	}
}