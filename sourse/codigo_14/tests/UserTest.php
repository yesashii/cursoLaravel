<?php
/**
 * Created by PhpStorm.
 * User: gs
 * Date: 21-06-16
 * Time: 12:32
 */

class UserTest extends PHPUnit_Framework_TestCase
{
    /** @test */

    function it_should_be_able_to_construct()
    {
        $user = new \PlatziPHP\User('fake@mail.dev','platzi');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }

    /** @test */

    function  it_shoud_have_a_first_name()
    {
        $user = new \PlatziPHP\User('fake@mail.dev','platzi');

        $user->setName('Luis','Herrera');

        $name = $user->getFistName();

        $this->assertEquals('Luis',$name); // verifica si dos strings son iguales.
    }
}