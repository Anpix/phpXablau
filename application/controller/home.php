<?php

class Home extends Controller {
    
    public function index() {
        header('Location: ' . URL . 'crud');
    }

}
