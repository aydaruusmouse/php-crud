<?php

include 'conn.php';




if(!isset($_POST['submit'])){
   $name= $_POST['name'];
   $credit= $_POST['credit'];
   $query= "insert into course(course_name, credit_hour) values('$name', '$credit')";
   $result = $conn->query($query);
   if($result){
       header("location: list.php");
       echo "registaration successfully";
   } 

}




?>