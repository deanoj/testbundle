<?php

namespace Deanoj\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Deanoj\GoogleTagManagerBundle\TagManager;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $this->get('deanoj_google_tag_manager')->setDataLayer('test', 'abcd');
        return array();
    }
}
