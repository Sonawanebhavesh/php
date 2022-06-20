<?php
session_start();
if(!$_SESSION['status'])
{
    header("Location:userinfo.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Display Products</title>
</head>
<body>
    <?php
      include "userencl.php";
    ?>
    <h1>Products's</h1>
    <form method="POST">
      <input type="submit" value="Show-All" name="show">

    </form>

    <?php
       if(isset($_POST['show']))
       {
         $fl=fopen('product.csv',"r")or die("unable to open file");
         while(($row=fgetcsv($fl))!==false)
         {
           echo $row[0]."  ".$row[1];
           echo"<br>";
         } 
      }
    
    
    ?>
</body>
</html>