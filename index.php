<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleI.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php
        include "./PostManager.php";
        $manager = new PostManager();
        $posts = $manager->getAll();
        foreach ($posts as $post){ 
?>
<div class="card">

  <h2><?php echo $post['title'];?></h2>
  
  <div class="desc"><?php echo $post['content'];?></div>
  <button  onClick="window.location.href='./update.php?id=<?php echo $post['id'];?>';" class="title title--epic">Update</button>
  <button  onClick="window.location.href='./delete.php?id=<?php echo $post['id'];?>';" class="title title--epic">Delete</button>

  <div class="actions">
    <button class="actions__like">like &nbsp; <i class="fas fa-heart"></i> </button>
    <button class="actions__trade">trade &nbsp; <i class="fas fa-exchange-alt"></i> </button>
    <button class="actions__cancel">close &nbsp; <i class="fas fa-times"></i> </button>
  </div>
</div>

<?php }?>
</div>


</body>
</html>