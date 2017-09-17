<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 15/09/17
 * Time: 10:39
 */

namespace AppBundle\Service;


use AbstractBundle\Service\AbstractService;
use AbstractBundle\Service\InterfaceService;
use AppBundle\Entity\UsuarioInfo;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class UsuarioInfoService
 * @package AppBundle\Service
 * @DI\Service("usuario_info.service")
 */
class UsuarioInfoService extends AbstractService implements InterfaceService
{

    /**
     * @return array
     */
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param $param
     * @return mixed
     */
    public function getOneBy($param)
    {
        // TODO: Implement getOneBy() method.
    }

    /**
     * @param $params
     * @return UsuarioInfo
     */
    public function prepare($params, $entity = null)
    {
        $entity = $entity === null ? new UsuarioInfo() : $entity;

        $datNascimento = new \DateTime($params->get('datNascimento'));
        $params->set('datNascimento', $datNascimento->format('Y-m-d'));

        return
            $this->repository->persistUsuarioInfo($params, $entity);
    }

    /**
     * @param $params
     * @return boolean|HttpException
     */
    public function isValid($params)
    {
        // TODO: Implement isValid() method.
    }

    /**
     * @param $params
     * @return array
     */
    public function insert($params)
    {

    }

    /**
     * @param $params
     * @param $id
     * @return array
     */
    public function update($params, $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}