<?php

namespace Defacto\LicenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Defacto\LicenseBundle\Entity\Computer;

class HomeController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function indexAction()
    {
    	$computer = new Computer();
    	$computer->setSerial('11-22-33-44');
    	$computer->setOs('Mac OS X 10.7 Lion');

    	$em = $this->getDoctrine()->getEntityManager();
    	$em->persist($computer);
    	$em->flush();

        return $this->render('DefactoLicenseBundle:Templates:base.html.twig');
    }
}
