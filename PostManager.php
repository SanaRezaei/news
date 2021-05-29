<?php 

class PostManager {

    public function __construct(){
        $this->setDb(new PDO('mysql:host=localhost;dbname=news', 'root', 'root'));
    }

    public function setDb(PDO $db){
        $this->db = $db;
    }

    public function add(Post $post){
        
    }

    public function get(int $id){
        
    }

    public function getAll(){
        
    }

    public function update(Post $post){
        
    }

    public function delete(int $id){
        
    }
}

?>