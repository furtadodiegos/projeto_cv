<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 16/09/17
 * Time: 15:15
 */

namespace AbstractBundle\Test;


use Doctrine\Common\DataFixtures\Purger\ORMPurger;
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

    /**
     * @return null|\Symfony\Component\HttpFoundation\Response
     */
    public function getResponse()
    {
        return $this->client->getResponse();
    }

    public function getData()
    {
        $response = json_decode($this->getResponse()->getContent(), true);

        if (isset($response['error'])) {
            echo "<pre>";
            \Doctrine\Common\Util\Debug::dump($response['error']['exception']);
            die('exception');
        }

        return $response;
    }

    /**
     * @param array $data
     * @return string
     */
    protected function getAuthorizedToken(array $data)
    {
        $this->client->request('POST', '/login', [
            'data' => json_encode($data)
        ]);
        $response = $this->getData();

        return
            'Bearer '. $response['content'];
    }
}