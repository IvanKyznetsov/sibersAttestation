<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class CsvController
 *
 * @Route("/csv")
 *
 * @package AppBundle\Controller
 */
class CsvController extends Controller
{
    /**
     * @Route("/generate")
     * @Template
     *
     * @return Response|array
     */
    public function indexAction()
    {
        return [];
    }
}