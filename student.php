<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student page</title>
</head>
<body>
    <?php
      $name=$_GET['name'];
      $age=$_GET['age'];
      $color=$_GET['color'];

    ?>
    <div style="background-color:<?php echo $color; ?>;">
  
    <font size=50>
        <?php
        echo $name;
        echo $age;
        
        ?>
    </font>
    </div>
</body>
</html>