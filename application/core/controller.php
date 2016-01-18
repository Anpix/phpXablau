<?php

class Controller {
    
    public $db = null;

    function __construct() {
        
        $this->openDatabaseConnection();
        
    }

    private function openDatabaseConnection() {
        
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
        
    }

    public function load($name, $type = 'Model') {
        
        $type = ($type == 'Controller') ? 'Controller' : 'Model';
        
        require_once APP . 'model/' . strtolower($name) . '.php';
        
        $instance = ($type == 'Model') ? $name . 'Model' : $name;
        
        return new $instance($this->db);

    }
    
}
