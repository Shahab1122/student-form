<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
    </button>
    </div>
    <div class="container ">
    <table class="table">
  <thead>
    <tr>
      <td></td>
      <th  scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Rollno</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="select * from `student-information`";
      $result=mysqli_query($conn,$sql);
      If ($result)  
       while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['class'];
        $mobile=$row['Rollno'];
        
        echo '  <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      
       <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button  class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
   </td>
    </tr>';
       }   
    ?>
  
</table>
    </div>

</body>
</html>