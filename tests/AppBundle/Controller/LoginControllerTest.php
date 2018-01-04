<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/12/17
 * Time: 11:11
 */

namespace Tests\AppBundle\Controller;


use AbstractBundle\Test\ApiTestCase;

class LoginControllerTest extends ApiTestCase
{

    protected function setUp()
    {
        parent::setUp();

        $this->client = $this->createClient();

        $this->createUserAdmin([
            'email' => 'admin@email.com',
            'password' => '654321'
        ]);
    }

    public function createUserAdmin($user)
    {
        $this->client->request('POST', '/user/insert', [
            'data' => json_encode($user)
        ]);
    }

    public function testLogin()
    {
        $this->client->request('POST', '/login', [
            'data' => json_encode(['email' => 'admin@email.com', 'password' => '654321'])
        ]);

        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('content', $response);

        $this->client->request('POST', '/login', [
            'data' => json_encode(
                ['email' => 'admin@email.com', 'password' => '654321', 'hash' => true]
            )
        ]);
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('content', $response);
    }

    public function testLoginError()
    {
        $this->client->request('POST', '/login', [
            'data' => json_encode(['email' => 'teste@email.com', 'password' => '654321'])
        ]);

        $this->assertEquals(500, $this->getResponse()->getStatusCode());

        $this->client->request('POST', '/login', [
            'data' => json_encode(['email' => 'admin@email.com', 'password' => '65432'])
        ]);

        $this->assertEquals(401, $this->getResponse()->getStatusCode());
    }
}
