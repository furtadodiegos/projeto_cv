<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 25/08/17
 * Time: 10:29
 */

namespace AbstractBundle\Service;


use \Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraint as Assert;

interface InterfaceService
{

    /**
     * @return array
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getOneBy($param);

    /**
     * @param $params
     * @param null $entity
     * @return EntityRepository
     */
    public function prepare($params, $entity = null);

    /**
     * @param $params
     * @return boolean|HttpException
     */
    public function isValid($params);

    /**
     * @param $params
     * @return array
     */
    public function insert($params);

    /**
     * @param $params
     * @param $id
     * @return array
     */
    public function update($params, $id);

    /**
     * @param $id
     * @return Response
     */
    public function delete($id);
}