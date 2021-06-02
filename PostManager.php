<?php 
include "./database.php";
include "./Post.php";
//$db = Database :: connect ();
class PostManager {
    private $db;

    public function __construct(){
        $db = Database::connect();
        $this->setDb($db);
        //$this->setDb(new PDO('mysql:host=localhost;dbname=news', 'root', 'root'));
    }

    public function setDb(PDO $db){
        $this->db = $db;
    }

    public function addNews(Post $post){
        $title = $post->getTitre();
        $content = $post->getContenu();
        $sql = "INSERT INTO posts (title,content) VALUES ('$title','$content')";
        $res = $this->db->query ($sql);
        return $res; 
    }

    public function get(int $id){
        $res = $this->db-> query ("SELECT * FROM posts WHERE id=$id");
        return $res->fetch();
    }

    public function getAll(){
        $res = $this->db-> query ("SELECT * FROM posts ORDER BY id");
        return $res;
    }

    public function update(Post $post){
        $title = $post->getTitre();
        $id=$post->getId();
        $content = $post->getContenu();
        $sql = "UPDATE posts SET title='$title' , content='$content'  WHERE id=$id";
        $this->db->query($sql); 
    }

    public function delete(int $id){
        $this->db->query ("DELETE FROM posts WHERE id=$id");
    }
}

?>