
<?php


include 'conn.php';
$id= $_GET['updateid'];  
     
     $dhaman= "select * from employee where id= $id";

     $natiijo= $conn->query($dhaman);

     if($natiijo){
         while($row= $natiijo->fetch_assoc()){
             $id= $row['id'];
             $name= $row['name'];
             $title= $row['title'];
             $email= $row['email'];
             $phone= $row['phone'];
             
         }
     }
   
   
   
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $title= $_POST['title'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $sql= "update employee set name= '$name',title= '$title', email= '$email', phone= '$phone' where id= '$id'";
    $result= $conn->query($sql);
    if($result){
       header('location: list.php');
    }else{
        echo $conn->error;
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    




<form  method="POST">
  <div class="form-group container">
    <label for="exampleInputEmail1">Employee Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value= <?php echo $name ?>>
   
  </div>
  <div class="form-group container">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title" value= <?php echo $title ?>>
   
  </div>
  
  <div class="form-group container">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value= <?php echo $email ?>>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group container">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone" name="phone" value= <?php echo $phone ?>>
  </div>
 
  
 
  <div class="container">
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </div>

</form>
























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>