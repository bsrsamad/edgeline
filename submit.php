<?php
 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $sub=$_POST['subject'];
     $msg=$_POST['msg'];

     $to='bsrabdulsamad@gmail.com';
     $subject="subject: ".$sub;
     $message="name: ".$name."\n\n". "wrote the following: "."\n\n".$msg;
     $headers="from: ".$email;

     if(mail($to,$subject,$message,$headers)){
         echo"<h1> sent successful thank you" ."  ".$name.",we will contact you shortly</h1>";
     } else{
         echo"something went wrong";
     }
 }
?>