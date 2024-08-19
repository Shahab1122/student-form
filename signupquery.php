<?php
    $showAlert = false;
    $showError = false;
   if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'connect.php';
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        // $exists = false;
       
        if(($password == $cpassword )){
         echo $hash = password_hash($password, PASSWORD_DEFAULT);
        //  echo $password;
            $sql  = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if ($result){
              $showAlert = true;
            }
           }
           else{
            $showError = "passsword don not match";
          
           }
          }
    
?>
