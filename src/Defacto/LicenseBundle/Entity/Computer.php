<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="computers")
 */
class Computer
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $serial;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $os;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	public function getSerial()
	{
	    return $this->serial;
	}
	
	public function setSerial($serial)
	{
	    $this->serial = $serial;
	    return $this;
	}

	public function getOs()
	{
	    return $this->os;
	}
	
	public function setOs($os)
	{
	    $this->os = $os;
	    return $this;
	}
}