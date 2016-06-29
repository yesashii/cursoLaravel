<?php

namespace PlatziPHP;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Created by PhpStorm.
 * User: gs
 * Date: 22-06-16
 * Time: 15:29
 */
class Email
{
    private $address;

    public function __construct( $address )
    {
        // validador nativo PHP

        $valid_email = filter_var($address, FILTER_VALIDATE_EMAIL);

        if( ! $valid_email )
        {
            // si no llevara la barra atras iria a buscar a PlatziPhp/
            throw new \InvalidArgumentException(

                "Invalid email address: [".$address."] "
            );
        }

        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}