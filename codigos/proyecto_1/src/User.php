<?php
namespace PlatziPHP;

/**
 *
 */
class User // acá dentro va el estado interno del objeto y su comportamiento.
{
  private $email;

  private $password;

  private $fistName;

  private $lastName;

  public function __construct($email, $password)
  {
    $this->email    = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  public function setName($fistName, $lastName)
  {
    $this->fistName = $fistName;
    $this->lastName = $lastName;
  }

  public function  getFistName()
  {
    return $this->fistName;
  }
}
