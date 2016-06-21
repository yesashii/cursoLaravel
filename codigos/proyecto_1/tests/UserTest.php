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

        $this->assertInstanceOF();
    }

}