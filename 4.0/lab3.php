
<!DOCTYPE html>
<html lang="en">
<head><style>
    div{
    border: 6px;
    width: 330px;
   
    height: 500px;
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
    background-color: ;
}
input[type=submit]{

    width: 320px;
    border:5px solid blue;
    background-color:blue;
    height: 40px;
    color:white;
    
}

textarea{
    width:320px;
    color:red;
    border:2px solid blue;
}
input{
    width:320px;
    height: 30px;
    color:black;
    border:2px solid blue;
}
input[type=radio]{
width: 30px;
height:20px;

border:5px solid blue;
background-color:blue;
color:white;
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
<form method="POST"action="a.php" ><h3><center>STUDENT DETAILS</center></h3><br><br>
        <input type="text" name="name" placeholder="Enter name" required><br><br>
        <input type="email" name="email" placeholder="Enter email" required><br><br>
        <input type="text" name="id" placeholder="student id" required><br><br>
        <textarea name="address" placeholder="Enter address....." rows="4" cols="50" required>
</textarea><br><br>
      Male<input type="radio"value="male" name="gender">Female<input type="radio" value="female" name="gender"><br><br>
        <input type="date" name="date" placeholder="Date of birth" required><br><br>
        <input type="submit" value="SUBMIT">  <br>
        
    </form></div></h4>
</body>
</html>
