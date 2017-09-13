<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 15:26
 */

namespace AppBundle\Service;


use AbstractBundle\Service\AbstractService;
use AbstractBundle\Service\InterfaceService;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class UsuarioService
 * @package AppBundle\Service
 * @DI\Service("usuario.service")
 */
class UsuarioService extends AbstractService implements InterfaceService
{

    /**
     * @return array
     */
    public function getAll()
    {
        $result = $this->repository->findAll();

        $statusCode = $result === null ? 204 : 200;

        return
            array('statusCode' => $statusCode, 'data' => $result);
    }

    public function getOneBy($param)
    {
        // TODO: Implement getOneBy() method.
    }

    public function prepare($params, $entity = null)
    {
        // TODO: Implement prepare() method.
    }

    public function isValid($params)
    {
        // TODO: Implement isValid() method.
    }

    public function insert($params)
    {
        // TODO: Implement insert() method.
    }

    public function update($params, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}