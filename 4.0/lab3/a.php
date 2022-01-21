<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{  
$name=$_POST['name'];
$email=$_REQUEST['email'];
$id=$_REQUEST['id'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$date=$_REQUEST['date'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    div{
    border: 6px;
    width: 330px;
   
    height: 500px;
    padding-top: 10px;
    padding-left: 50px;
border-radius:50px;
    padding-right: 50px;
    background-image:linear-gradient(to left,black,red,yellow,black);
    position:absolute;
    left: 35%;
    top: 20%;
    border:4px solid white;
}
body{
    background-image:linear-gradient(to left,black,red,yellow);
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><a href="l4p3.php">Back</a>
<div>
  <h1>  STUDENT DETAILS</h1><br><br>
  NAME:<?php print"$name";?><br><br>
  EMAIL:<?php print"$email";?><br><br>
  
  ID:<?php print"$id";?><br><br>
  GENDER:<?php print"$gender";?><br><br>
  
  ADDRESS:<?php print"$address";?><br><br>
  DATE OF BIRTH:<?php print"$date";?>
  
  
</div>
</body>
</html>