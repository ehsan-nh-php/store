<?php
     $db= mysqli_connect('localhost','root','','store1');
     if($db == false){
        echo "connection Error";
     }
     if($_SERVER['REQUEST_METHOD']==="POST"){
     $username= $_POST['username'];
     $password= $_POST['password'];
     $codediscount= $_POST['codediscount'];
     $query= "INSERT INTO user (username, password, codediscount) VALUES ('$username',$password,$codediscount)";
     $result= $db->query($query);
     if($result==false) {
         echo "INSERT ERROR";
         echo $db->error;
         echo $query;
     }
     echo "user has been added";
     }
     header("location:index.php");
     exit();
?>



<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
<form action="" method="post">
    <label>
        نام :
        <input type="text" name="username">
    </label><br>
    <label>
        پسوورد :
        <input type="number" name="password">
    </label><br>
    <label>
        کد تخفیف :
        <input type="number" name="codediscount">
    </label><br>

    <input type="submit" value="ذخیره">

</form>

</body>
</html>