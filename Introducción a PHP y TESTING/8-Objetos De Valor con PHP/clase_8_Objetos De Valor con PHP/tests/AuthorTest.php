<?php
/**
 * Created by PhpStorm.
 * User: gs
 * Date: 21-06-16
 * Time: 15:07
 */

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function verifica_la_excepcion_de_pasar_palabra_secreta_para_construir_un_author()
    {
        // función que espera que pase algo
        $this->setExpectedExceptionRegExp(InvalidArgumentException::class);
        // acá se le dice explicitamente que se espera que se ejecute esta excepción.
        $author = new \PlatziPHP\Author(
            'fake@mail.dev',
            '1234',
            'Clave_mala'
        );


    }
}