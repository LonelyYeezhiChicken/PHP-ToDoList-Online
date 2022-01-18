<?php
class Database
{    
    public function  mode(){
        return "test";
    }
    
    public function default() {
        return [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'admin',
        'password' => 'a1234567',
        'database' => 'testdd',
        'DBDriver' => 'mysql',
        'DBPrefix' => '',
        'pConnect' => true,
        'DBDebug'  => true,
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => []
        ];
    }
    
    public function test(){
        return [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'admin',
        'password' => 'a1234567',
        'database' => 'testdd',
        'DBDriver' => 'mysql',
        'DBPrefix' => '',
        'pConnect' => true,
        'DBDebug'  => true,
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => []
        ];
    }
}
?>