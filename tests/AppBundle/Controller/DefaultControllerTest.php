<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/12/17
 * Time: 11:11
 */

namespace Tests\AppBundle\Controller;


use AbstractBundle\Test\ApiTestCase;

class DefaultControllerTest extends ApiTestCase
{

    protected function setUp()
    {
        parent::setUp();

        $this->client = $this->createClient();
    }

    public function testIndex()
    {
        $this->client->request('GET', '/');

        $this->assertTrue($this->getResponse()->isSuccessful());
        $this->assertEquals(200, $this->getResponse()->getStatusCode());
    }
}
