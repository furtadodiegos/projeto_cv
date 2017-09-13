<?php
/**
 * Created by PhpStorm.
 * User: diegofurtado
 * Date: 13/09/17
 * Time: 16:39
 */

namespace AbstractBundle\Resources\fixtures\provider;


use Faker\Factory;

class EntityProvider
{

    public static function birthdate()
    {
        $faker = Factory::create();

        return new \DateTime($faker->dateTimeThisCentury->format('Y-m-d'));
    }

    public static function modelo()
    {
        $genera = [
            'Toyota',
            'BMW',
            'Volkswagen',
            'Mercedes-Benz',
            'Honda',
            'Ford',
            'Hyundai',
            'Nissan',
            'Audi',
            'Renault',
            'Chevrolet',
            'Land Rover',
            'Peugeot',
            'Fiat',
            'Kia Motors',
        ];

        $key = array_rand($genera);

        return $genera[$key];
    }

    public static function categoria()
    {
        $categoria = [
            'Suv',
            'Hatch',
            'Hot Hatch',
            'Compact',
            'Sedan',
        ];

        $key = array_rand($categoria);

        return $categoria[$key];
    }

    public static function carronome($key)
    {

        return 'Modelo'.$key;
    }
}
