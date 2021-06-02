<?php
    include "./PostManager.php";
    $id = $_GET['id'];
    $manager = new PostManager();
    $manager->delete($id);
    header('Location: index.php');
?>