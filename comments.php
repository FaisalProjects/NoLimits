<!doctype html>
        <title> NoLimits </title>


<?php

   if(isset ($_POST ['submit'])) {
       include 'database.php';

    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $SUBJECT = $_POST['subject'];
    $TEXT = $_POST['text'];

        $insert = "INSERT INTO grad (name, email, subject, text) values ('$NAME', '$EMAIL', '$SUBJECT', '$TEXT')";
          $run =  mysqli_query($con, $insert);
          
          if ($run){
        echo "<script>alert('تم استلام ملاحظتك')</script>";           

          }else {
          echo "<script>alert('لم يتم الاستلام')</script>";
          }
          }
          

