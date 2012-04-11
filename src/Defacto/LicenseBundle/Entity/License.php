<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="licenses")
 */
class License
{
	/**
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="License_Key")
	 * @ORM\JoinColumn(name="license_key_id", referencedColumnName="id")
	 */
	protected $license_key;

	/**
	 * @ORM\OneToOne(targetEntity="Computer")
	 * @ORM\JoinColumn(name="computer_id", referencedColumnName="id")
	 */
	protected $computer;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $date_installed;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	public function getLicense_key()
	{
	    return $this->license_key;
	}
	
	public function setLicense_key(License_Key $license_key)
	{
	    $this->license_key = $license_key;
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

	public function getDate_installed()
	{
	    return $this->date_installed;
	}
	
	public function setDate_installed($date_installed)
	{
	    $this->date_installed = $date_installed;
	    return $this;
	}
}