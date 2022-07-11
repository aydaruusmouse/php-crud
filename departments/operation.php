<?php

include 'conn.php';




if(!isset($_POST['submit'])){
   $name= $_POST['name'];
   $phone= $_POST['phone'];
   $email= $_POST['email'];
   $query= "insert into department(name, phone, email) values('$name', '$phone', '$email')";
   $result = $conn->query($query);
   if($result){
       header("location: list.php");
       echo "registaration successfully";
   } 

}




?>