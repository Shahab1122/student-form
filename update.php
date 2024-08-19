<?php
include 'connect.php';
 $id=$_GET ['updateid'];
 $sql="select * from `student-information` where id=$id";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['name'];
 $class=$row['class'];
 $Rollno=$row['Rollno'];
 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $Rollno = $_POST['Rollno'];
    
    $sql = "update `student-information` set id=$id,name='$name',class='$class',Rollno='$Rollno', where id=$id";
    $result=mysqli_query($conn,$sql);
    
    if ($result) {
        echo "Data updating successfully";
        // header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        
        <title>Update</title>
    </head>
    <body>
      <center>
        <div class="container style:">
        update
        </div>
      </center>
      
    <div class="container">
    <form method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label for="class">Student-class</label>
    <select class="form-control" id="class" name="class"   type="int" autocomplete="off" value=<?php echo $class; ?> >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <div class="form-group">
    <label for="rollno">
      Roll no
    </label>
    <input type="int" class="form-control" name="Rollno" id="Rollno" placeholder="132" autocomplete="off" value=<?php echo $Rollno; ?>>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
    </body>
    </html>
</html>