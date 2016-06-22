<?php

namespace PlatziPHP;

/**
 * Created by PhpStorm.
 * User: luis
 * Date: 21-06-16
 * Time: 21:52
 */
class Post
{

    private $autor;

    private $title;

    private $body;

    // cuando le paso un objeto en php 5 se debe especificar que es un objeto
    public function __construct( Author $author, $title, $body)
    {

        $this->autor    = $author;

        $this->title    = $title;

        $this->body     = $body;

    }

    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return 'by '.$this->autor->getFistName();
    }

    


}