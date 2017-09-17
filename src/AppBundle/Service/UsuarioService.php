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
use AppBundle\Entity\Usuario;
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

    public function checkUsuario($email)
    {
        return
            $this->repository->findOneBy(['strEmail' => $email]);
    }

    /**
     * @param $params
     * @param null $entity
     * @return Usuario
     */
    public function prepare($params, $entity = null)
    {
        if ($entity === null) {
            $entity = new Usuario();
            $params = $this->encode($params, $entity->getStrSalt());
        }

        return
            $this->repository->persistUsuario($params, $entity);
    }

    public function isValid($entity)
    {
        $validator = $this->container->get('validator');
        $errors = $validator->validate($entity);

        if (count($errors)) {
            $message = $this->getErrorMessages($errors);

            throw new HttpException(400, end($message));
        }

        return true;
    }

    /**
     * @param $params
     * @return array
     */
    public function insert($params)
    {
        $usuarioEntity = $this->prepare($params);

        $params->set('usuario', $usuarioEntity);

        $usuarioInfoEntity = $this->container->get('usuario_info.service')->prepare($params);

        if ($this->isValid($usuarioEntity) && $this->isValid($usuarioInfoEntity)) {
            $this->em->persist($usuarioEntity);
            $this->em->persist($usuarioInfoEntity);

            if ($this->save()) {
                return array('statusCode' => 201, 'data' => array(
                    'usuario' => $usuarioEntity,
                    'usuarioInfo' => $usuarioInfoEntity,
                ));
            }
        }
    }

    public function update($params, $id)
    {
        // TODO: Implement update() method.
    }

    /**
     * @return bool
     */
    private function save()
    {
        try{
            $this->em->flush();
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }

        return true;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    private function encode($params, $salt)
    {
        $plainPassword = hash('sha256', $salt . $params->get('strSenha'));
        $encoded = hash('sha256', $salt . $plainPassword);

        $params->set('strPlainPassword', $plainPassword);
        $params->set('strSenha', $encoded);

        return $params;
    }

}