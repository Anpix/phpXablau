<?php

class CrudModel extends Model {
    
    public function read($id) {

        $sql    = 'SELECT * FROM thing WHERE id = :id';
        $query  = $this->db->prepare($sql);
        $params = array(
            ':id' => (int) $id
        );
        
        $query->execute($params);
        
        return $query->fetch();

    }
    
    public function readAll() {
        
        $sql    = 'SELECT * FROM thing';
        $query  = $this->db->prepare($sql);
        
        $query->execute();
        
        return $query->fetchAll();
        
    }
    
    public function update($id, $what) {
        
        $sql    = 'UPDATE thing SET what = :what WHERE id = :id';
        $query  = $this->db->prepare($sql);
        $params = array(
            ':id'   => (int)    $id,
            ':what' => (string) $what
        );
        
        $query->execute($params);
        
    }
    
    public function delete($id) {
        
        $sql    = 'DELETE FROM thing WHERE id = :id';
        $query  = $this->db->prepare($sql);
        $params = array(
            ':id'   => (int)    $id
        );
        
        $query->execute($params);
        
    }
    
    public function create($what) {
        
        $sql    = 'INSERT INTO thing (what) VALUES (:what)';
        $query  = $this->db->prepare($sql);
        $params = array(
            ':what' => (string) $what
        );
        
        $query->execute($params);
        
    }

}