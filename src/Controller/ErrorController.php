<?php
class ErrorController{
    public function notFound(){
        require_once __DIR__.'../../../templates/error404.php';
    }
}