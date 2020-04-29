<?php

namespace Core\Config;

class Config
{

    public function __construct(){
        $this->config = [
            'dbHost' => 'localhost',
            'dbPort' => '8889',
            'dbName' => 'animaux',
            'dbUser' =>  'root',
            'dbPassword' => 'root'
        ];
    }

    public function getConfig(){
        return $this->config;
    }
    
}
