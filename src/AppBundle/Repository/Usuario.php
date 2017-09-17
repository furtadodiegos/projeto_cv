<?php

namespace AppBundle\Repository;

/**
 * Usuario
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Usuario extends \Doctrine\ORM\EntityRepository
{

    public function persistUsuario($params, \AppBundle\Entity\Usuario $usuario)
    {
        try {
            $usuario
                ->setStrEmail($params->get('strEmail'))
                ->setStrSenha($params->get('strSenha'))
                ->setStrPlainPassword($params->get('strPlainPassword'));

            return $usuario;
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }
}
