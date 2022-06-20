<?php
session_start();
if(!$_SESSION['status'])
{
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my page</title>
    </head>
    <body>
        welcome <?php $_SESSION['u']?>
        
        <form method="GET">
            <input type="submit" value="logout" name="logout">
        </form>
        
        <?php
      if(isset($_GET['logout']))
      {
          header("location:mylogin.php");
          session_destroy();
        }
        ?>
</body>
</html>