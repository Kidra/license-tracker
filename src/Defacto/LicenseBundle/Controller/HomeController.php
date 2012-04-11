<?php

namespace Defacto\LicenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Defacto\LicenseBundle\Entity\Computer;
use Defacto\LicenseBundle\Entity\User;
use Defacto\LicenseBundle\Entity\License;

class HomeController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function indexAction()
    {
    	$computerRepository = $this->getDoctrine()
    		->getRepository('DefactoLicenseBundle:Computer');

        return $this->render('DefactoLicenseBundle:Templates:base.html.twig');
    }
}
