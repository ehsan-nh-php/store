<?php
     $db= mysqli_connect('localhost','root','','store1');
     if($db===false){
         echo "Error connection to mysql";
     }
//    run kardan query farsisaz
     $db->query("SET NAMES 'utf8'");
     $result =$db ->query("SELECT *  FROM user ");
     if($result==false){
         echo "Error in query";
         exit;
     }
//    var_dump($result);
     $users=$result->fetch_all(MYSQLI_ASSOC);
//    var_dump($users);
      $i=1;
      foreach($users as $user){
          echo "$i-$user[username] <a href='remove.php?id=$user[id]'>x</a><br> $user[password]<br> $user[codediscount]<br>";
          $i++;

     }
