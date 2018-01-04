<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/12/17
 * Time: 11:42
 */

namespace AppBundle\Service;


use AbstractBundle\Resources\traits\GenerateForm;
use AbstractBundle\Service\AbstractService;
use AbstractBundle\Service\InterfaceService;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpKernel\Exception\HttpException;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class UserService
 * @package AppBundle\Service
 * @DI\Service("user.service")
 */
class UserService extends AbstractService implements InterfaceService
{

    //Cria um array com os campos para o formulario
    use GenerateForm;

    /**
     * @return array
     */
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param $param
     * @param $search
     * @return array
     */
    public function getBy($search, $param)
    {
        // TODO: Implement getBy() method.
    }

    /**
     * @param $search
     * @param $param
     * @return null|object|User
     */
    public function getOneBy($search, $param)
    {
        return
            $this->repository()->findOneBy([$search => $param]);
    }

    /**
     * @param $entity
     * @return boolean|HttpException
     */
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

    public function getForm()
    {
        try {
            $metadata = $this->em->getClassMetadata('AppBundle\Entity\User');
            $validator = $this->container->get('validator');

            return [
                'data' => $this->generateForm($metadata->fieldMappings,
                    $validator->getMetadataFor('AppBundle\Entity\User')),
                'statusCode' => 200
            ];
        } catch (\Exception $e) {
            throw new HttpException($e->getCode(), $e->getMessage());
        }
    }

    /**
     * @param $params ParameterBag
     * @return array
     */
    public function insert($params)
    {
        $user = new User();
        $params = $this->encode($params, $user->getSalt());

        return
            $this->transaction($this->repository()->persist($params, $user), 201);
    }

    /**
     * @param $params ParameterBag
     * @return array
     */
    public function update($params)
    {
        /*** @var $user User */
        $user = $this->repository()->find($params->get('id'));

        if ($params->get('password')) {
            $params = $this->encode($params, $user->getSalt());
        }

        return
            $this->transaction($this->repository()->persist($params, $user), 200);
    }

    /**
     * @param $params
     * @return array
     */
    public function delete($params)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $entity
     * @param $successCode
     * @return array
     */
    private function transaction($entity, $successCode)
    {
        try {
            if ($this->isValid($entity)) {
                $dataEntity = ['user' => $entity];

                if ($this->save($dataEntity)) {
                    return [
                        'statusCode' => $successCode,
                        'data' => $dataEntity
                    ];
                }
            }
        } catch (HttpException $he) {
            throw new HttpException($he->getStatusCode(), $he->getMessage());
        } catch (\Exception $e) {
            throw new HttpException(500, 'Internal error!');
        }
    }

    /**
     * @param null $repository
     * @return \Doctrine\ORM\EntityRepository | UserRepository
     */
    public function repository($repository = null)
    {
        return
            $this->getRepository($repository);
    }

    /**
     * @param $params ParameterBag
     * @param $salt
     * @return ParameterBag
     */
    private function encode($params, $salt)
    {
        $plainPassword = hash('sha256', $salt . $params->get('password'));
        $encoded = hash('sha256', $salt . $plainPassword);

        $params->set('plainPassword', $plainPassword);
        $params->set('password', $encoded);

        return $params;
    }

}
