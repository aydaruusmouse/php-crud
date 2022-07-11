<?php
include 'conn.php';
if(isset($_GET['deleteid'])){
     $id= $_GET['deleteid'];
     

     $sql= "DELETE from employee where id= $id";
     $result= $conn->query($sql);

     if($result){
         header('location: list.php');
         
     }else{
        echo $conn->error;
     }



}


?>