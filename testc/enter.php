<?php
include "credentials.php";


      $name=($_POST["name"]);
      $mobile=($_POST["mobile"]);
      $email=($_POST["email"]);

       $sql2="INSERT into testc(name,mobile,email) values('$name','$mobile','$email');";
        $res1=mysqli_query($dbconnected,$sql2);
        if($res1==TRUE)
        {
          $list['uid']="success";
          echo json_encode($list);}
        else
        {
          $list['uid']="error";
          echo json_encode($list);
        }

      


   
?>
