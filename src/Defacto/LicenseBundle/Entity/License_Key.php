<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="license_keys")
 */
class License_Key
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="Software_Version")
	 * @ORM\JoinColumn(name="sofware_version_id", referencedColumnName="id")
	 */
	protected $software_version;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $date_purchased;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $license;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	    return $this;
	}

	public function getSoftware_version()
	{
	    return $this->software_version;
	}
	
	public function setSoftware_version(Software_Version $software_version)
	{
	    $this->software_version = $software_version;
	    return $this;
	}

	public function getDate_purchased()
	{
	    return $this->date_purchased;
	}
	
	public function setDate_purchased($date_purchased)
	{
	    $this->date_purchased = $date_purchased;
	    return $this;
	}

	public function getLicense()
	{
	    return $this->license;
	}
	
	public function setLicense($license)
	{
	    $this->license = $license;
	    return $this;
	}
}