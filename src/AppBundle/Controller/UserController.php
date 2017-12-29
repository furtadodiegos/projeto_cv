<?php

namespace AppBundle\Controller;


use AbstractBundle\Controller\AbstractController;
use AbstractBundle\Controller\InterfaceController;
use AppBundle\Service\UserService;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController implements InterfaceController
{
    /**
     * @Rest\Get("/user")
     */
    public function indexAction()
    {
        // TODO: Implement indexAction() method.
    }

    /**
     * @Rest\Get("/Route/{search}/{param}")
     */
    public function viewAction($search, $param)
    {
        // TODO: Implement viewAction() method.
    }

    /**
     * @Rest\Get("/user/add")
     */
    public function addAction()
    {
        $response = $this->service()->getForm();

        //Remove os campos que nao entram no formulario do frontEnd
        unset($response['data']['id']);
        unset($response['data']['salt']);
        unset($response['data']['plainPassword']);

        return
            $this->renderResponse($response['data'], $response['statusCode']);

    }

    /**
     * @Rest\Post("/user/insert")
     */
    public function insertAction(Request $request)
    {
//        $this->userSecurity($request->headers->get('Authorization'));
        $data = $this->decodeRequestDataIntoParameters($request);
        
        $response = $this->service()->insert($data);

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    /**
     * @Rest\Get("/Route/{id}")
     */
    public function editAction($id)
    {
        // TODO: Implement editAction() method.
    }

    /**
     * @Rest\Post("/Route")
     */
    public function updateAction(Request $request)
    {
        // TODO: Implement updateAction() method.
    }

    /**
     * @Rest\Delete("/Route/{id}")
     */
    public function deleteAction($id)
    {
        // TODO: Implement deleteAction() method.
    }

    /**
     * @param null $service
     * @return object | UserService
     */
    public function service($service = null)
    {
        return
            $this->getService();
    }

}
