<?php

namespace Defacto\LicenseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="software")
 */
class Software
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
	protected $name;

	/**
	 * @ORM\OneToOne(targetEntity="Manufacturer")
	 * @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
	 */
	protected $manufacturer;

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

	public function getManufacturer()
	{
	    return $this->manufacturer;
	}
	
	public function setManufacturer($manufacturer)
	{
	    $this->manufacturer = $manufacturer;
	    return $this;
	}
}