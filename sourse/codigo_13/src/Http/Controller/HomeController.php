<?php


namespace PlatziPHP\Http\Controller;

use Illuminate\Http\Request;

class HomeController
{
    public function index( Request $request )
    {
        $retorno = 'Hello from Controller!';
        $retorno = $retorno.'<br/><br/>';
        $retorno = $retorno.'fullUrl(): '.$request->fullUrl();
        $retorno = $retorno.'<br/><br/>';
        $retorno = $retorno.'getBasePath(): '.$request->getBasePath();
        $retorno = $retorno.'<br/><br/>';
        $retorno = $retorno.'getBaseUrl(): '.$request->getBaseUrl();
        $retorno = $retorno.'<br/><br/>';
        $retorno = $retorno.'getRequestUri(): '.$request->getRequestUri();
        $retorno = $retorno.'<br/><br/>';
        $retorno = $retorno.'getUri()): '.$request->getUri();


        return $retorno;
    }
}
