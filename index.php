<?php include 'server.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Card</title>
</head>
<body>
  
   



<?php
if(isset($_POST['submit'])){
  if(empty($errors)){
    include "viewcard.php";
  }else{
  include "register.php";
  }
}else{
  include "register.php";
}
 
?>


</body>
</html>