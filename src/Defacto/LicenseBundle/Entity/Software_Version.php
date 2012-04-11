<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="software_versions")
 */
class Software_Version
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="Software")
	 * @ORM\JoinColumn(name="software_id", referencedColumnName="id")
	 */
	protected $software;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $version;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	public function getSoftware()
	{
	    return $this->software;
	}
	
	public function setSoftware($software)
	{
	    $this->software = $software;
	    return $this;
	}

	public function getVersion()
	{
	    return $this->version;
	}
	
	public function setVersion($version)
	{
	    $this->version = $version;
	    return $this;
	}
}