    <?php
      session_start();
      if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
        header("location:login.php");
        exit;
      }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <title>welcome - <?php $_SESSION['username'] ?></title>
    </head>
    <body>
    welcome  to- <?php echo $_SESSION['username'] ?>
    </body>
    </html>