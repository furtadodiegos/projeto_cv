<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 19:37
 */

namespace AbstractBundle\Resources\traits;


use Firebase\JWT\JWT;
use Symfony\Component\HttpFoundation\JsonResponse;

trait Security
{
    /**
     * @param array $data
     * @param $key
     * @param $host
     * @param $hash
     * @return JsonResponse
     */
    protected function newToken(array $data, $key, $host, $hash = null)
    {
        $issuedAt   = time();
        $notBefore  = $issuedAt + 10; //Adding 10 seconds
        $expire     = $notBefore + 60; // Adding 60 seconds

        $token = array(
            'iat' => $issuedAt,
            'jti' => $key,
            'iss' => $host,
            'nbf' => $notBefore,
            'exp' => $expire,
            'data' => $data
        );

        JWT::$leeway = 10;

        $jwt = JWT::encode($token, $key, 'HS256');
        $decode = JWT::decode($jwt, $key, array('HS256'));

        $response = ($hash) ? $jwt : $decode;

        return new JsonResponse($response);
    }

    /**
     * @param $encoded
     * @param $raw
     * @param $salt
     * @return bool
     */
    protected function isPasswordValid($encoded, $raw, $salt)
    {
        return $encoded === $this->encodePassword($raw, $salt);
    }

    /**
     * @param $raw
     * @param $salt
     * @return string
     */
    protected function encodePassword($raw, $salt)
    {
        return hash('sha256', $salt . $raw);
    }

    /**
     * @param $authorization
     * @return null
     */
    protected function getBearerToken($authorization)
    {
        if (preg_match('/Bearer\s(\S+)/', $authorization, $matches)) {
            return str_replace('"', '', $matches[1]);
        }

        return null;
    }

    /**
     * @param $authorization
     * @param $key
     * @return bool|null
     */
    public function checkCredentials($authorization, $key)
    {
        $token = $this->getBearerToken($authorization);

        $authCheck = $this->authCheck($token, $key);

        return
            ($authCheck == true) ? $this->authCheck($token, $key, true) : null;
    }

    /**
     * @param $hash
     * @param $key
     * @param bool $getIdentity
     * @return bool|object
     */
    protected function authCheck($hash, $key, $getIdentity = false)
    {
        $auth = false;

        if ($hash != null) {

            if ($getIdentity == false) {

                $check_token = $this->checkToken($hash, $key);
                if ($check_token == true) {
                    $auth = true;
                }
            } else {
                $check_token = $this->checkToken($hash, $key, true);

                if (is_object($check_token)) {
                    $auth = $check_token;
                }
            }
        }

        return $auth;
    }

    /**
     * @param $jwt
     * @param $key
     * @param bool $getIdentity
     * @return bool|object
     */
    public function checkToken($jwt, $key, $getIdentity = false)
    {
        $auth = false;
        $decode = JWT::decode($jwt, $key, array('HS256'));

        if (isset($decode->data->id)) {
            $auth = true;
        }

        return ($getIdentity == true) ? $decode : $auth;
    }
}
