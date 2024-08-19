    <?php
      session_start();
      if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
        header("location:login.php");
        exit;
      }
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connect.php';
        $name= $_POST ["name"];
        $class= $_POST ["class"];
        $Rollno= $_POST ["Rollno"];
        $sql  = "INSERT INTO `student-information` ( `name`, `class`, `Rollno`) VALUES ( '$name','$class', '$Rollno')";
        $result = mysqli_query($conn,$sql);
       if ($result){
          //  echo "";
          header('location:display.php');
       }else{
          echo "Invalid";
       }

      }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <title>welcome - <?php $_SESSION['username'] ?></title>
    </head>
    <body>
      <center>
        <div class="container style:">
        welcome  to- <?php echo $_SESSION['username'] ?>
        </div>
      </center>
      
    <div class="container">
    <form method="post" >
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="class">Student-class</label>
    <select class="form-control" id="class" name="class"   type="int">
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
    <input type="int" class="form-control" name="Rollno" id="Rollno" placeholder="132">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
    </body>
    </html>