<?php
     $db= mysqli_connect('localhost','root','','store1');
     if($db == false){
        echo "connection Error";
     }

     $id =(int)$_GET['id'];
     $query= "DELETE FROM user WHERE id=$id";
     $result= $db->query($query);
     if($result==false) {
         echo "INSERT ERROR";
         echo $db->error;
         echo $query;
     }
     header("Location: index.php");
     exit;
