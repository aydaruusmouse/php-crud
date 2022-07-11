<?php

include 'conn.php';




if(!isset($_POST['submit'])){
   $name= $_POST['name'];
   $title= $_POST['title'];
   $phone= $_POST['email'];
   $email= $_POST['phone'];

   $query= "insert into employee(name,title, email, phone) values('$name','$title', '$email', '$phone')";
   $result = $conn->query($query);
   if($result){
       header("location: list.php");
       echo "registaration successfully";
   } 

}




?>