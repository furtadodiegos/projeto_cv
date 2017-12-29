<?php

namespace AbstractBundle\Service;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class AbstractService
 * @DI\Service("abstract.service")
 * @package AbstractBundle\Service
 */
abstract class AbstractService
{
    /**
     * EntityManager da Doctrine
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var Container
     */
    protected $container;


    /**
     * @DI\InjectParams({
     *     "em" = @DI\Inject("doctrine.orm.entity_manager"),
     *      "container" = @DI\Inject("service_container")
     * })
     */
    public function __construct(EntityManager $em, Container $container)
    {
        $this->container = $container;
        $this->setEntityManager($em);
    }

    /**
     * @param EntityManager $em
     * @return $this
     */
    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;

        return $this;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * @param $class
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository($class)
    {
        if ($class === null) {
            $class = explode('\\', get_class($this));
            $class = str_replace('Service', '', end($class));
        }

        return
            $this->getEntityManager()->getRepository("AppBundle:$class");
    }

    /**
     * @return bool
     */
    protected function save(array $entities)
    {
        try{
            foreach ($entities as $entity) {
                $this->em->persist($entity);
            }

            $this->em->flush();

            return true;
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }

    /**
     * @param $errors
     * @return array
     */
    protected function getErrorMessages($errors) {
        $messages = array();

        foreach ($errors as $error) {
            $messages[$error->getPropertyPath()] = $error->getMessage();
        }

        return $messages;
    }
}