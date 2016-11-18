<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LandingController extends Controller
{
    /**
     * @Route("/", name="landing")
     * @Template()
     */
    public function landingAction()
    {
        return [
        ];
    }
}
