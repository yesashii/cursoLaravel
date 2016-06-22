<?php
namespace PlatziPHP;
/**
 * Created by PhpStorm.
 * User: gs
 * Date: 20-06-16
 * Time: 15:55
 */
class Author extends User
{
    private $clave;
    // se sobre escribe el constructor.
    public function __construct($email, $password, $clave) // se crea si, un nuevo parametro.
    {
        parent::__construct($email, $password); // se reutiliza el constructor del padre.

        $this->clave = $clave;
        // se crea la lógica para manejar el error si no se ingresa una clave correcta

        if($clave != 'AUTOR_DE_PLATZI') // si lo que te dieron no es esa clave, fallá
        {
            throw new \InvalidArgumentException("clave inválida");
        }

    }

    public function getLastName()
    {
        return $this->lastName;
    }

}