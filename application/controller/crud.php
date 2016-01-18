<?php

class Crud extends Controller {

    public function index() {
        
        # LOAD ONLY MODELS THAT YOU NEED
        $crud = $this->load('Crud');
        
        # READ
        $thing = $crud->read(1);
        $things = $crud->readAll();
        
        # VIEW
        require APP . 'view/_templates/header.php';
        require APP . 'view/crud/index.php';
        require APP . 'view/_templates/footer.php';
        
    }
    
    public function edit($id, $updateTo) {
        if (isset($id)) {
            // that can be a POST
            if ( ! isset($updateTo)) {
                $updateTo = 'Xablau';
            }
            
            # UPDATE
            $this->load('Crud')->update($id, $updateTo);
            
        }
        
        header('Location: ' . URL . 'crud');
        
    }
    
    public function remove($id) {
        
        if (isset($id)) {
            $this->load('Crud')->delete($id);
        }
        
        header('Location: ' . URL . 'crud');
        
    }
    
    public function add($what) {
        
        if ( ! isset($what)) {
            $what = 'Xablau';
        }
        
        // that can be a POST
        $this->load('Crud')->create($what);
        
        header('Location: ' . URL . 'crud');
        
    }

}