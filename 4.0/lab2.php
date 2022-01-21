<?php
 $message="";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   
$n=$_POST['number'];
$f=1;
for($i=$n;$i>=1;$i--)
{
    $f=$f*$i;
}
$message="factorial 0f $n is $f";
}
?>
<!DOCTYPE html>
<html lang="en">
<head><style>
    div{
    border: 6px 

    width: 300px;
   
    height: 200px;
    padding-top: 10px;
    padding-left: 50px;
    padding-right: 50px;
    background-color:white;
    position:absolute;
    left: 35%;
    top: 20%;
    border:4px solid blue;
}
body{
    background-color: white;
}
input[type=submit]{

    width: 120px;
    border:5px solid blue;
    background-color:white;
    height: 40px;
    color:black;
    
}
h4{
    color:red;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><div>
<center><form method="POST"action="lab2.php" ><h3>FACTORIAL</h3>
        Enter a number:&nbsp;&nbsp;<input type="text" name="number" required><br><br>
        <input type="submit" value="SUBMIT">  <br>
   <h4> "<?php print $message ?>  </form></div></h4>
</body>
</html>
