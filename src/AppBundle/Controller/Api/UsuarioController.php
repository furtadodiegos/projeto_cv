<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 15:20
 */

namespace AppBundle\Controller\Api;


use AbstractBundle\Controller\AbstractController;
use AbstractBundle\Controller\InterfaceController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class UsuarioController extends AbstractController implements InterfaceController
{

    /**
     * @Rest\Get("/usuario")
     */
    public function getAction()
    {
        $response = $this->getService()->getAll();

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    public function getParamAction($param)
    {
        // TODO: Implement getParamAction() method.
    }

    public function postAction(Request $request)
    {
        // TODO: Implement postAction() method.
    }

    public function putAction(Request $request, $id)
    {
        // TODO: Implement putAction() method.
    }

    public function deleteAction($id)
    {
        // TODO: Implement deleteAction() method.
    }

}