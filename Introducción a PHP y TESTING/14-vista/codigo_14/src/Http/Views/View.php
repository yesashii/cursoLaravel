<?php

namespace PlatziPHP\Http\Views;

use Illuminate\Http\Response;

class View
{
    private $template;
    private $params;

    /*
     * El constructor  recibe un template y
     * un array parametros (opcional)
     */

    public function __construct( $template, array $params = [] )
    {

        $this->template = $template;

        $this->params = $params;

    }

    /*
     * Esta función render, debe ir a buscar un template y renderizarlo
     *
     */

    public function render()
    {
        /*
         * paso 1: ir a buscar el template
         */
        $content = $this->loadTemplate();

        /*
         * Luego vamos a crear un response usando un objeto "Response" de Http
         * que muestra un contenido ( casi como un echo ).
         */
        $response = new Response($content);
        return $response;

    }

    /*
     * Carga el template ( el archivo html que creamos debe ser cargado )
     * si el archivo existe, entonces que lo cargue
     */
    private function loadTemplate()
    {


        /*
         * En primer lugar debemos ubicarnos en el direcctorio: resources/views
         */
        $base_path      = dirname(dirname(dirname(__DIR__)));
        $basic_path     = '/resources/views';
        $path           = $base_path.$basic_path;
        $templatePath   = $path."/".$this->template.".php";

        $retorno        = $this->includeTemplateFromFile(
                            $templatePath,
                            $this->params );
        return $retorno;

    }

    private function includeTemplateFromFile( $path, $params )
    {
        //var_dump($path);
        //die();

        if( file_exists($path) )
        {

            /*
             *  extract(): convierte un array asociativo en variables.
             */
            extract( $params );

            /*
             * ahora se incluye el archivo.
             */

            ob_start();

            include $path;

            return ob_get_clean();

        }
    }
}