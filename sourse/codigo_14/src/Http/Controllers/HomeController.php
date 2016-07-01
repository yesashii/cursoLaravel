<?php


namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Http\Views\View;

class HomeController
{
    public function index( Request $request )
    {
      $template     = 'home';
      $array_params = array('message'=>'Hola desde una vista');
      $view = new View( $template, $array_params );

      $response = $view->render(); // devuelve un objeto Response.


        $response->send();


        //return $retorno;
    }
}
