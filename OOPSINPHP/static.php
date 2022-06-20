<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static In PHP</title>
    <style>
        input
        {
          padding:10px;
          width:60px;
          text-align:center;
        }
    </style>
</head>
<body>
    <form method="POST">
    <input type="text" name="count"><br>
    <input type="Button" name="click" value="CLICK">
    </form>
     <?php
   // if(isset($_POST['click']))
     //{
        if(isset($_COOKIE['cnt']))
        {
            static $x;
            $x=$_COOKIE['cnt'];
            $x=$x+1;
            setcookie('cnt',$x);
        } 
        else
        {
            setcookie('cnt',2);
            echo"you click button 1st time";
        }
       echo"you click cutton $x times";   
    //}  

    class stat
    {
        function __contrusct()
        {

        }
    }
    
    ?>
    
</body>
</html>