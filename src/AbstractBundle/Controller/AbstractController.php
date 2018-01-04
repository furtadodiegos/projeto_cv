<?php

namespace AbstractBundle\Controller;


use AbstractBundle\Resources\traits\Security;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;

abstract class AbstractController extends FOSRestController
{

    use Security;

    /**
     * Return container service
     *
     * @param null $service
     * @return object
     */
    protected function getService($service = null)
    {
        if ($service) {
            return $this->get($service);
        } else {
            $arr = explode('\\', get_class($this));
            $arr[count($arr) - 1] = (str_replace('Controller', '', $arr[count($arr) - 1])) . '.service';

            return $this->get(strtolower(end($arr)));
        }
    }

    /**
     * @param $data
     * @param int $statusCode
     * @param string $header
     * @return Response
     */
    protected function renderResponse($data, $statusCode = 200, $header = 'hal+json')
    {
        $normalizers = array(new GetSetMethodNormalizer());
        $encoders = array("json" => new JsonEncoder());

        $serializer = new Serializer($normalizers, $encoders);
        $json = $this->serialize($serializer, $data);

        $response = new Response($json, $statusCode);

        $response->headers->set("Content-Type", 'application/'.$header);

        return $response;
    }

    private function serialize(Serializer $serializer, $data, $format = 'json')
    {
        $context = array();

        $serialization = new SerializationContext();
        $serialization->setSerializeNull(true);

        $context[] = $serialization;

        return $serializer->serialize($data, $format, $context);
    }

    protected function decodeRequestDataIntoParameters(Request $request)
    {
        if (!$request->get('data')) {
            $data = array();
        } else {
            $data = json_decode($request->get('data'), true);

            if ($data === null) {
                throw new HttpException(400, 'Sem conteudo valido!');
            }
        }

        return new ParameterBag($data);
    }

    /**
     * @param $authorization
     * @return bool|object
     */
    protected function getUserFromToken($authorization)
    {
        return
            $this->checkToken($this->getBearerToken($authorization),
                $this->getParameter('secret'), true);
    }
}