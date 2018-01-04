<?php

namespace AppBundle\Controller;


use AbstractBundle\Controller\AbstractController;
use AbstractBundle\Controller\InterfaceController;
//use AbstractBundle\Resources\traits\Security;
use AppBundle\Service\UserService;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserController extends AbstractController implements InterfaceController
{

//    use Security;

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
        $data = $this->decodeRequestDataIntoParameters($request);

        $response = $this->service()->insert($data);

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    /**
     * @Rest\Get("/user/edit/{id}")
     */
    public function editAction(Request $request, $id)
    {
        $authorization = $request->headers->get('Authorization');

        $this->security($authorization);

        $userId = $this->getUserFromToken($authorization);

        $form = $this->service()->getForm()['data'];
        unset($form['salt']);
        unset($form['plainPassword']);

        $response = [
            'data' => [
                'form' => $form,
                'user' => $this->service()->getOneBy('id', $userId->data->id)
            ],
            'statusCode' => 200
        ];

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    /**
     * @Rest\Post("/user/update")
     */
    public function updateAction(Request $request)
    {
        $this->security($request->headers->get('Authorization'));

        $data = $this->decodeRequestDataIntoParameters($request);

        $response = $this->service()->update($data);

        return
            $this->renderResponse($response['data'], $response['statusCode']);
    }

    /**
     * @Rest\Get("/user/delete/{id}")
     */
    public function deleteAction(Request $request, $id)
    {
        $this->security($request->headers->get('Authorization'));

        $response = $this->service()->delete($id);

        return
            $this->renderResponse($response['data'], $response['statusCode']);
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

    private function security($authorization)
    {
        $key = $this->getParameter('secret');   //Chave de acesso

        if (!$this->checkCredentials($authorization, $key)) {
            throw new HttpException(401, 'Unauthorized access!');
        }
    }
}
