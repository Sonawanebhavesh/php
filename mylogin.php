<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="user"><br><br>
        <input type="password" name="pass"><br><br>
        <input type="submit" value="login" name="submit">
    </form>

    <?php

     
     if(isset($_POST['submit']))
      {
           $_SESSION['u']=$_POST['user'];
           $_SESSION['p']=$_POST['pass'];
         if($_SESSION['u']==="bhavesh" && $_SESSION['p']==="bhavesh")
          {
             /* $_SESSION['status']=true;
             $_SESSION['prev']=1;
             if($_SESSION['prev']===1)
             { */
                header("Location:mypage.php");
            /*  }
             else
             {
                header("Location:admin.php");
             }
             */ 
          }
         else
          {
            header("Location:mylogin.php");
          }
      }
    ?>
</body>
</html>