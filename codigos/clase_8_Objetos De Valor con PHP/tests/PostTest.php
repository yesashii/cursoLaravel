<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 21-06-16
 * Time: 22:03
 */

class PostTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function esto_nos_da_el_nombre_del_autor()
    {
        $author = new \PlatziPHP\Author(
            'fake@mail.dev',
            '1234',
            'AUTOR_DE_PLATZI');

        $author->setName('Luis','Herrera'
        );

        $post = new \PlatziPHP\Post(
            $author,
            'titulo',
            'cuerpo'
        );

        //realizando la prueba

        $this->assertEquals(
            'by Luis',
            $post->getAuthor()

        );



    }
}