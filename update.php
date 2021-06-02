<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styleC.css">

 
  </head>
  <body>
    <?php
          include "./PostManager.php";
          $id = $_GET['id'];
          $manager = new PostManager();
          $post = $manager->get($id);
    ?>
      <div class="container" style ="width:50%;">
      <h2> Update News </h2>
      <form method="POST">
        <div class="mb-3">
            <label for="title" class="form-label" >Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'];?>">
        </div>
        <div class="mb-3">
            <label for="addNews" class="form-label" >Add News</label>
            <input type="text" name="addNews" id="addNews" class="form-control" value="<?php echo $post['content'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
    <?php
      if($_POST){
          if (isset($_POST['title']) && isset($_POST['addNews'])){
            $array = array("Titre"=>$_POST['title'], "Contenu"=>$_POST['addNews'], "id"=>$_GET['id']);
            $post = new Post($array);
            $manager = new PostManager();
            $posts = $manager->update($post);
            header('Location: index.php');
          }
      }
    ?>
  </body>
</html>