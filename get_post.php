<?php   
   if(isset($_GET['name'])){

    $name = htmlentities($_GET['name']);

  }
/*
  if(isset($_POST['name'])){

    $name = htmlentities($_POST['name']);
    echo $name;
  } 

  // REQUEST works with get and post - not used very mus=ch
  if(isset($_REQUEST['name'])){
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  } */

  echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My website</title>
</head>
<body>
  <form method="GET" action="get_post.php"> 
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Brad">Brad</a>
    </li>
    <li>
      <a href="get_post.php?name=Steve">Steve</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profie"?></h1>
</body>
</html>
