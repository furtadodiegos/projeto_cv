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
    public function indexAction();

    /**
     * @Rest\Get("/Route/{search}/{param}")
     */
    public function viewAction($search, $param);

    /**
     * @Rest\Get("/Route")
     */
    public function addAction();

    /**
     * @Rest\Post("/Route")
     */
    public function insertAction(Request $request);

    /**
     * @Rest\Get("/Route/{id}")
     */
    public function editAction(Request $request, $id);

    /**
     * @Rest\Post("/Route")
     */
    public function updateAction(Request $request);

    /**
     * @Rest\Delete("/Route/{id}")
     */
    public function deleteAction($id);

    /**
     * @param null $service
     * @return mixed
     */
    public function service($service = null);
}