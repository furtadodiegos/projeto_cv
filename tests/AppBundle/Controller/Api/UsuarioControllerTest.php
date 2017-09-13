<?php

namespace Tests\AppBundle\Controller\Api;


use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CarroControllerTest extends WebTestCase
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $conn;

    protected function setUp()
    {
        parent::setUp();
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->conn = $this->em->getConnection();
        $this->conn->beginTransaction();

        $this->client = static::createClient();
    }


    public function testGETAction()
    {
        $this->client->request('GET', '/usuario');

        echo "<pre>";
        \Doctrine\Common\Util\Debug::dump($this->client->getResponse()->getContent());
        die;

    }

    /**
     * {@inheritDoc}
     */
    protected function tearDown()
    {
        parent::tearDown();
        $this->em->close();
        $this->conn->rollback();
        $this->em = null;
    }
}
