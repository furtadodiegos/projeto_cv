<?php

namespace AppBundle\Controller;


use AbstractBundle\Controller\AbstractController;
use AbstractBundle\Resources\traits\Security;
use AppBundle\Entity\User;
use AppBundle\Service\UserService;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LoginController extends AbstractController
{

    use Security;

    /**
     * @Rest\Post("/login")
     */
    public function loginAction(Request $request)
    {
        $data = $this->decodeRequestDataIntoParameters($request);

        try {
            $user = $this->userService()->getOneBy('email', $data->get('email'));

            if ($this->credentialsAreValid($user, $data->get('password'))) {

                $response = [
                    'data' => $this->newToken(['id' => $user->getId(), 'email' => $user->getEmail()],
                        $this->getParameter('secret'), $request->getHost(), $data->get('hash')),
                    'statusCode' => 200
                ];

                return
                    $this->renderResponse($response['data'], $response['statusCode']);
            }
        } catch (HttpException $httpException) {
            throw new HttpException($httpException->getStatusCode(), $httpException->getMessage());
        } catch (\Throwable $t) {
            throw new \Exception($t->getMessage(), $t->getCode());
        }
    }

    /**
     * @param $user
     * @param $password
     * @return bool
     */
    private function credentialsAreValid(User $user, $password)
    {
        $plainPassword = $this->encodePassword($password, $user->getSalt());
        $encoded = $this->encodePassword($plainPassword, $user->getSalt());

        if (!$this->isPasswordValid($encoded, $user->getPlainPassword(), $user->getSalt())) {
            throw new HttpException(401, 'Invalid credentials!');
        }

        return true;
    }

    /**
     * @return object|UserService
     */
    private function userService()
    {
        return
            $this->getService('user.service');
    }
}
