<?php
    $login = false;
    $showError = false;
   if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connect.php';
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
            $sql  = "Select * from users where username='$username' AND password='$password'";
            $result = mysqli_query($conn,$sql);
            $num =  mysqli_num_rows($result);
            if ($num == 1){
              $login = true;
              session_start();
              $_SESSION ['logedin'] = true;
              $_SESSION ['username'] = $username;
              header("location:welcome.php");
            }
           
           else{
            $showError = "Invalid";
          
           }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Loging</title>
</head>
<body>
    <div class="container my-5">
      <?php
      if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>success</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> ';
        }
        if($showError){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Error!</strong>'.$showError.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div> ';
            }
                  
         
    ?>

        
        

        
        

        
          <form method="post" action="login.php"> <!-- Adjust action attribute as needed -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <small id="passwordHelp" class="form-text text-muted">Make sure to type the password the same.</small>
            </div>
           
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2LcRIQ6v5IO1kBT9pDIjVJ30Ew1GOlVRBfIz6Xf6VO" crossorigin="anonymous"></script>
</body>
</html>
