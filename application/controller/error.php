<?php

class Error extends Controller {
    
    public function index() {
        require APP . 'view/_templates/header.php';
        require APP . 'view/error/index.php';
        require APP . 'view/_templates/footer.php';
    }

}
