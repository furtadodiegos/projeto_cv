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

        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(201, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('user', $response);

        //Erro: Tenta salvar um email q ja existe
        $this->client->request('POST', '/user/insert', [
            'data' => json_encode($post)
        ]);

        $this->assertEquals(400, $this->getResponse()->getStatusCode());
    }

    public function testEdit()
    {
        $this->client->request('GET', '/user/edit/null', [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => 'admin@email.com',
                    'password' => '654321',
                    'hash' => true
                ])
            ]);
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('form', $response);
        $this->assertArrayHasKey('user', $response);
    }

    public function testUpdate()
    {
        $this->client->request('GET', '/user/edit/null', [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => 'admin@email.com',
                    'password' => '654321',
                    'hash' => true
                ])
            ]);
        $response = $this->getData();

        $form = $response['form'];
        $user = $response['user'];
        $post = [];

        foreach ($form as $key => $value) {
            $post[$key] = $user[$key];
        }

        unset($post['password']);
        $post['email'] = 'admin2@email.com';

        $this->client->request('POST', '/user/update', [
            'data' => json_encode($post)
        ], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_Authorization' => $this->getAuthorizedToken([
                'email' => 'admin@email.com',
                'password' => '654321',
                'hash' => true
            ])
        ]);
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('user', $response);

        $this->client->request('GET', '/user/edit/null', [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => $response['user']['email'],
                    'password' => '654321',
                    'hash' => true
                ])
            ]);
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('form', $response);
        $this->assertArrayHasKey('user', $response);

//
        unset($response['user']['salt']);
        unset($response['user']['plainPassword']);
        $response['user']['password'] = '65432';

        $this->client->request('POST', '/user/update', [
            'data' => json_encode($response['user'])
        ], [], [
            'CONTENT_TYPE' => 'application/json',
            'HTTP_Authorization' => $this->getAuthorizedToken([
                'email' => $response['user']['email'],
                'password' => '654321',
                'hash' => true
            ])
        ]);
        $response = $this->getData();

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
        $this->assertArrayHasKey('user', $response);
//

//
        $this->client->request('GET', '/user/edit/null', [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => $response['user']['email'],
                    'password' => '65432',
                    'hash' => true
                ])
            ]);

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
//

//
        $this->client->request('GET', '/user/edit/null', [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => $response['user']['email'],
                    'password' => '6543',
                    'hash' => true
                ])
            ]);

        $this->assertEquals(500, $this->getResponse()->getStatusCode());
//
    }

    /**
     * @param $userProvider
     * @dataProvider userProvider
     */
    public function testDelete($userProvider)
    {
        $this->client->request('POST', '/user/insert', [
            'data' => json_encode($userProvider)
        ]);

        $response = $this->getData();
        $id = $response['user']['id'];

        $this->client->request('GET', '/user/delete/'.$id, [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => 'admin@email.com',
                    'password' => '654321',
                    'hash' => true
                ])
            ]);

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());

        $this->client->request('GET', '/user/delete/'.$id, [], [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_Authorization' => $this->getAuthorizedToken([
                    'email' => 'admin@email.com',
                    'password' => '654321',
                    'hash' => true
                ])
            ]);

        $this->assertEquals(404, $this->getResponse()->getStatusCode());
    }
}
