<?php

abstract class Db{
    private const DB_HOST = 'localhost';
    private const DB_USER = 'root';
    private const DB_PASS = '';
    private const DB_NAME = 'moka';

    // singleton
    private $_instance = null;


    protected function getDb(){
        try {
            if($this->_instance === null){
                $this->_instance = new PDO('mysql:host='.self::DB_HOST.';dbname='.self::DB_NAME,self::DB_USER,self::DB_PASS,[PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            }
           
        } catch (Exception $e) {
            die("Erreur sur la bdd:{$e->getMessage()}");
        }
        return $this->_instance;
    }
}