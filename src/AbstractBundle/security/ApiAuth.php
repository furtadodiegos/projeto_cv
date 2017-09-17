<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 19:37
 */

namespace AbstractBundle\security;


use AppBundle\Entity\Usuario;
use Firebase\JWT\JWT;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiAuth
{

    /**
     * @var
     */
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function singup(Usuario $user, $password, $getHash = false)
    {
        $key = $this->key;
        $plainPassword = $this->encodePassword($password, $user->getStrSalt());
        $encoded = $this->encodePassword($plainPassword, $user->getStrSalt());

        if (!$this->isPasswordValid($encoded, $user->getStrPlainPassword(), $user->getStrSalt())) {
            throw new HttpException(401, 'Usuario nao autorizado!');
        }

        $token = array(
            'sub' => $user->getId(),
            'email' => $user->getStrEmail(),
            'iat' => time(),
            'exp' => time() + (24 * 24 * 60 * 60)
        );

        $jwt = JWT::encode($token, $key, 'HS256');
        $decode = JWT::decode($jwt, $key, array('HS256'));

        $response = ($getHash) ? $jwt : $decode;

        return new JsonResponse($response);
    }

    /**
     * @param $encoded
     * @param $raw
     * @param $salt
     * @return bool
     */
    private function isPasswordValid($encoded, $raw, $salt)
    {
        return $encoded === $this->encodePassword($raw, $salt);
    }

    /**
     * @param $raw
     * @param $salt
     * @return string
     */
    private function encodePassword($raw, $salt)
    {
        return hash('sha256', $salt . $raw);
    }

    /**
     * @param $authorization
     * @return null
     */
    private function getBearerToken($authorization)
    {
        if (preg_match('/Bearer\s(\S+)/', $authorization, $matches)) {
            return str_replace('"', '', $matches[1]);
        }

        return null;
    }

    public function checkCredentials($authorization)
    {
        $token = $this->getBearerToken($authorization);

        $authCheck = $this->authCheck($token);

        return
            ($authCheck == true) ? $this->authCheck($token, true) : null;
    }

    /**
     * Check Hash
     *
     * @param $hash
     * @param bool|false $getIdentity
     * @return bool
     */
    private function authCheck($hash, $getIdentity = false)
    {
        $auth = false;

        if ($hash != null) {

            if ($getIdentity == false) {

                $check_token = $this->checkToken($hash);
                if ($check_token == true) {
                    $auth = true;
                }
            } else {
                $check_token = $this->checkToken($hash, true);

                if (is_object($check_token)) {
                    $auth = $check_token;
                }
            }
        }

        return $auth;
    }

    /**
     * @param $jwt
     * @param bool|false $getIdentity
     * @return bool|object
     */
    public function checkToken($jwt, $getIdentity = false)
    {
        $key = $this->key;
        $auth = false;
        $decode = JWT::decode($jwt, $key, array('HS256'));

        if (isset($decode->sub)) {
            $auth = true;
        }

        return ($getIdentity == true) ? $decode : $auth;
    }
}
