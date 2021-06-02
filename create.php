<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="styleC.css">
 
  </head>
  <body>
    <div class="container" style ="width:50%;">
      <form method="POST">
        <div class="mb-3">
            <label for="title" class="form-label" >Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="addNews" class="form-label" >Add News</label>
            <input type="text" name="addNews" id="addNews" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php
      include "./PostManager.php";
      if($_POST){
          if (isset($_POST['title']) && isset($_POST['addNews'])){
            $array = array("Titre"=>$_POST['title'], "Contenu"=>$_POST['addNews']);
            $post = new Post($array);
            $manager = new PostManager();
            $posts = $manager->addNews($post);
          }
      }
    ?>
  </body>
</html>

