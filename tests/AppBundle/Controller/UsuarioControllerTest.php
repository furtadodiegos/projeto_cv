<?php

namespace Tests\AppBundle\Controller\Api;


use AppBundle\Test\ApiTestCase;

class CarroControllerTest extends ApiTestCase
{

    protected function setUp()
    {
        parent::setUp();

        $this->client = $this->createClient();

        $this->createUser('foo@email.com');
    }

    public function testPOSTLoginAction()
    {
        $data = array(
            'strEmail' => 'foo@email.com',
            'strSenha' => '123',
            'hash' => true
        );

        $this->client->request('POST', '/usuario/login', [
            'data' => json_encode($data),
        ]);

        $this->assertEquals(200, $this->getResponse()->getStatusCode());
    }

    public function testPOSTNewAction()
    {
        $data = array(
            'strEmail' => 'furtado.diegos@gmail.com',
            'strSenha' => '123',
            'strNome' => 'Diego',
            'strSobrenome' => 'Furtado',
            'datNascimento' => '02-05-1988'
        );

        $this->client->request('POST', '/usuario/new', [
            'data' => json_encode($data)
        ], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_Authorization' => $this->getAuthorizedToken()
        ]);

        $data = json_decode($this->getResponse()->getContent(), true);

        $this->assertEquals(201, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('usuario', $data);
        $this->assertArrayHasKey('usuarioInfo', $data);
    }

    public function testGETAction()
    {
        $this->client->request('GET', '/usuario');

        $this->assertEquals(200, $this->getResponse()->getStatusCode());
    }
}
