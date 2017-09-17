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
     * @Rest\Get("/Request")
     */
    public function getAction();

    /**
     * @Rest\Get("/Request/{param}")
     */
    public function getParamAction($param);

    /**
     * @Rest\Post("/Request")
     */
    public function postAction(Request $request);

    /**
     * @Rest\Put("/Request/{id}")
     */
    public function putAction(Request $request, $id);

    /**
     * @Rest\Delete("/Request/{id}")
     */
    public function deleteAction($id);
}