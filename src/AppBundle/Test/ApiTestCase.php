<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 16/09/17
 * Time: 15:15
 */

namespace AppBundle\Test;


use AbstractBundle\security\ApiAuth;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ApiTestCase extends KernelTestCase
{

    /**
     * @var Client
     */
    protected $client;

    public static function setUpBeforeClass()
    {
        self::bootKernel();
    }

    protected function setUp()
    {
        $this->purgeDatabase();
    }

    protected function tearDown()
    {
        //Todo
    }

    private function purgeDatabase()
    {
        $purger = new ORMPurger($this->getService('doctrine')->getManager());
        $purger->purge();
    }

    protected function getService($id)
    {
        return self::$kernel->getContainer()
            ->get($id);
    }

    protected function createClient(array $options = array(), array $server = array())
    {
        $client = $this->getService('test.client');
        $client->setServerParameters($server);

        return $client;
    }

    protected function createUser($email, $password = '123')
    {
        $data = array(
            'strEmail' => $email,
            'strSenha' => $password
        );

        $user = $this->getService('usuario.service')->prepare(new ParameterBag($data));

        $em = $this->getService('doctrine.orm.entity_manager');
        $em->persist($user);
        $em->flush();

        return $user;
    }

    /**
     * @return null|\Symfony\Component\HttpFoundation\Response
     */
    public function getResponse()
    {
        return $this->client->getResponse();
    }

    /**
     * @return array
     */
    protected function getAuthorizedToken()
    {
        $data = array(
            'strEmail' => 'foo@email.com',
            'strSenha' => '123',
            'hash' => true
        );

        $usuario = $this->getService('usuario.service')->checkUsuario($data['strEmail']);

        $auth = new ApiAuth(123);

        $response = $auth->singup($usuario, $data['strSenha'],$data['hash']);

        $token = 'Bearer '.$response->getContent();

        return $token;
    }
}