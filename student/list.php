<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lists</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table table-sm">
  <thead>
    <a href="form.php" class= "btn btn-primary">Add </a>
    <tr>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Phone</th>
      <th scope="col">Student Email</th>
      <th scope="col">StudentClass</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
    <?php

    include 'conn.php';
   $query= "SELECT * FROM student";
   $result=  $conn->query($query);
   
    $htmltable= "</tr>";
   if($result){
       while($row= $result->fetch_assoc()){
         $id= $row['id'];
          $htmltable.= "<td>". $row['id'] ."</td>";
          $htmltable.= "<td>". $row['name'] ."</td>";
          $htmltable.= "<td>". $row['phone'] ."</td>";
          $htmltable.= "<td>". $row['email'] ."</td>";
          $htmltable.= "<td>". $row['class'] ."</td>";
         $htmltable.= "<td>" . '<a href="update.php? updateid='.$id.'" class="btn btn-primary">Update</a>' . "</td" ."</br>";
         $htmltable.= "<td>" . '<a href="delete.php? deleteid='.$id.'"  class="btn btn-danger">Delete</a>' . "</td" ."</br>";
        
          $htmltable.= "</tr>";
       }
       echo $htmltable;
   }else{
       echo $conn->error;
   }

?>
  </tbody>
</table>
    </div>

</body>
</html>