<?php

namespace AbstractBundle\Service;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use JMS\DiExtraBundle\Annotation as DI;

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
     * @var \Doctrine\ORM\EntityRepository
     */
    protected $repository;

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
        $this->setRepository(get_class($this));
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
     */
    public function setRepository($class)
    {
        $repo = explode('\\', $class);

        $this->repository = $this->getRepository(str_replace('Service', '', end($repo)));
    }

    /**
     * @param $class
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository($class)
    {
        return
            $this->getEntityManager()->getRepository("AppBundle:$class");
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