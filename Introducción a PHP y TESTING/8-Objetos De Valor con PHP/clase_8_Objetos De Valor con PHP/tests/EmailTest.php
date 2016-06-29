<?php
use PlatziPHP\Email;


class EmailTest extends PHPUnit_Framework_TestCase
{
    function test_email_is_valid()
    {
        $email = new Email('fake@mail.dev');

        $this->assertInstanceOf(
            Email::class,
            $email

        );
    }

    function  test_email_is_invalid()
    {
        $this->setExpectedExceptionRegExp(
            \InvalidArgumentException::class
        );
        $email = new Email('this is not an email');
    }

}