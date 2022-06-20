<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coockies in php</title>
</head>
<body>
    <h1 align="center">$_COOKIE</h1>
    <?php
      
       $city="malegaon";
      setcookie("username","bhavesh");
      setcookie("age",21);
      setcookie("city",$city);
      setcookie("educatiopn","BCS",time()+(2*86400));
    ?>

    <?php
      echo"cookies data as follows";
      echo"<br>";
      print_r($_COOKIE);
      echo"<br>";
    ?>
    <input type="text" value="<?php echo $_COOKIE['username'];?>"><br>
    <input type="text" value="<?php echo $_COOKIE['age'];?>"><br>
    <input type="text" value="<?php echo $_COOKIE['city'];?>"><br>

</body>
</html>