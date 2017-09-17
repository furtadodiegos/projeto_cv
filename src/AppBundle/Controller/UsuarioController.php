<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 15:20
 */

namespace AppBundle\Controller;


use AbstractBundle\Controller\AbstractController;
use AbstractBundle\Controller\InterfaceController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\HttpException;

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

    /**
     * @Rest\Post("/usuario/new")
     */
    public function postAction(Request $request)
    {

        $this->userSecurity($request->headers->get('Authorization'));

        $data = $this->decodeRequestDataIntoParameters($request);

        $response = $this->getService()->insert($data);

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    public function putAction(Request $request, $id)
    {
        // TODO: Implement putAction() method.
    }

    public function deleteAction($id)
    {
        // TODO: Implement deleteAction() method.
    }

    /**
     * @Rest\Post("/usuario/login")
     */
    public function postLoginAction(Request $request)
    {
        $data = $this->decodeRequestDataIntoParameters($request);

        $usuario = $this->getService()->checkUsuario($data->get('strEmail'));

        if (!$usuario) {
            throw new HttpException(400, 'Usuario nao encontrado');
        }

        $response = $this->apiAuth->singup($usuario, $data->get('strSenha'),$data->get('hash'));

        return $this->renderResponse($response);
    }

}