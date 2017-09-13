<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 25/08/17
 * Time: 10:16
 */

namespace AbstractBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

interface InterfaceController
{
    /**
     * @Rest\Get("/Route")
     */
    public function getAction();

    /**
     * @Rest\Get("/Route/{param}")
     */
    public function getParamAction($param);

    /**
     * @Rest\Post("/Route")
     */
    public function postAction(Request $request);

    /**
     * @Rest\Put("/Route/{id}")
     */
    public function putAction(Request $request, $id);

    /**
     * @Rest\Delete("/Route/{id}")
     */
    public function deleteAction($id);
}