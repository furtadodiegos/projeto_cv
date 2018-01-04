<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 25/08/17
 * Time: 10:29
 */

namespace AbstractBundle\Service;


use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpKernel\Exception\HttpException;

interface InterfaceService
{

    /**
     * @return array
     */
    public function getAll();

    /**
     * @param $param
     * @param $search
     * @return array
     */
    public function getBy($search, $param);

    /**
     * @param $entity
     * @return boolean|HttpException
     */
    public function isValid($entity);

    /**
     * @param $params ParameterBag
     * @return array
     */
    public function insert($params);

    /**
     * @param $params ParameterBag
     * @return array
     */
    public function update($params);

    /**
     * @param $params ParameterBag
     * @return array
     */
    public function delete($params);

    /**
     * @param null $repository
     * @return mixed
     */
    public function repository($repository = null);
}
