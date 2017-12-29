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

        $emUser = $this->repository()->persist($params, $user);

        if ($this->isValid($emUser)) {
            $dataEntity = ['user' => $emUser];

            if ($this->save($dataEntity)) {
                return array('statusCode' => 201, 'data' => $dataEntity);
            }
        }
    }

    /**
     * @param $params
     * @return array
     */
    public function update($params)
    {
        // TODO: Implement update() method.
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
