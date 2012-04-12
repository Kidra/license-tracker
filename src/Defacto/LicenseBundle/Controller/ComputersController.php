<?php

namespace Defacto\LicenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ComputersController extends Controller
{
	/**
	 * @Route("/computers")
	 * @Template()
	 */
	public function indexAction()
	{
		$computerRepository = $this->getDoctrine()
    		->getRepository('DefactoLicenseBundle:Computer');

    	$computers = $computerRepository->findAll();

    	return $this->render('DefactoLicenseBundle:Computers:index.html.twig', array('computers' => $computers));
	}
}