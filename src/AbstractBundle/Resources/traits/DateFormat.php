<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 28/12/17
 * Time: 08:37
 */

namespace AbstractBundle\Resources\traits;


trait DateFormat
{

    /**
     * @param $data
     * @return bool|\DateTime
     */
    public function converterData($data, $format = "d/m/Y")
    {
        return
            \DateTime::createFromFormat($format, $data);
    }
}