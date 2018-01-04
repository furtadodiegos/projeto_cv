<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 29/12/17
 * Time: 09:32
 */

namespace AbstractBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractRepository extends EntityRepository
{
    /**
     * @param $data ParameterBag
     * @param $entity
     * @return mixed
     */
    public function generateProperties($data, $entity)
    {
        $classMethods = get_class_methods($entity);

        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $classMethods)) {
                $entity->$method($value);
            }
        }

        return $entity;
    }
}
