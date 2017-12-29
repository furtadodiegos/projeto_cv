<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/12/17
 * Time: 11:11
 */

namespace Tests\AppBundle\Controller;


use AbstractBundle\Test\ApiTestCase;

class UserControllerTest extends ApiTestCase
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

    public function userProvider()
    {
        return [
            [[
                'email' => 'diego@email.com',
                'password' => '123456'
            ]]
        ];
    }

    public function testIndex()
    {
        $this->client->request('GET', '/');

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
    }

    public function testAdd()
    {
        $this->client->request('GET', '/user/add');
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('email', $response);
    }

    /**
     * @param $userProvider
     * @dataProvider userProvider
     */
    public function testInsert($userProvider)
    {
        //Pega o formulario
        $this->client->request('GET', '/user/add');
        $form = $this->getData();
        $post = [];

        foreach ($form as $key => $value) {
            $post[$key] = $userProvider[$key];
        }

        //Salva o formulario
        $this->client->request('POST', '/user/insert', [
            'data' => json_encode($post)
        ]);
        $reponse = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(201, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('user', $reponse);

        //Erro: Tenta salvar um email q ja existe
        $this->client->request('POST', '/user/insert', [
            'data' => json_encode($post)
        ]);

        $this->assertEquals(400, $this->getResponse()->getStatusCode());
    }
}
