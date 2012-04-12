<?php

namespace Defacto\LicenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Defacto\LicenseBundle\Entity\Computer;

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

	/**
	 * @Route("/computers/add")
	 * @Template()
	 */
	public function addAction()
	{
		$response = $this->forward('DefactoLicenseBundle:Computers:edit');

		return $response;
	}

	/**
	 * @Route("/computers/edit", name="computers_edit")
	 * @Route("/computers/edit/{id}")
	 * @Template()
	 */
	public function editAction(Request $request, $id = null)
	{
		$computerRepository = $this->getDoctrine()
    		->getRepository('DefactoLicenseBundle:Computer');

    	$computer = $computerRepository->find($id);

    	$form = $this->createFormBuilder($computer)
    		->add('serial', 'text')
    		->add('os', 'text')
    		->getForm();

    	if($request->getMethod() == 'POST')
    	{
    		$form->bindRequest($request);

    		if($form->isValid())
    		{

    		}
    	}

		return $this->render('DefactoLicenseBundle:Computers:edit.html.twig', array(
			'computer' => $computer,
			'form'     => $form->createView()
		));
	}
}