<?php

include 'conn.php';




if(!isset($_POST['submit'])){
   $name= $_POST['name'];
   $phone= $_POST['phone'];
   $email= $_POST['email'];
   $class= $_POST['class'];
   $query= "insert into student(name, phone, email, class) values('$name', '$phone', '$email', '$class')";
   $result = $conn->query($query);
   if($result){
       header("location: list.php");
       echo "registaration successfully";
   } 

}




?>