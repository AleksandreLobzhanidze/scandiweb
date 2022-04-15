<?php

// !! Db Connect !!

class Db{
    private $localhostDbName = 'mysql:host=localhost;dbname=scandiwebData';
    private $password = '';
    private $root = 'root';

    public function connect(){
        $db = new PDO($this->localhostDbName,$this->root,$this->password);
        return $db;
    }
}