<?php

namespace AppBundle\Controller;


use AbstractBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;

class DefaultController extends AbstractController
{
    /**
     * @Rest\Get("/")
     */
    public function indexAction()
    {
        return true;
    }
}
