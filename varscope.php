<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable scope </title>
</head>
<body>
    <?php
    //Local variable
    echo"<b>local variable<b><br>";
     function myfunc()
     {
         $x=500;
         echo $x."<br>";
         --$x;
         echo  $x."<br>";
         $x++;
         echo "$x"."<br>";
     }
     myfunc();
     $x=200;
     echo $x."<br>";
     myfunc();

     echo"<br><br>";

     //function parameter
     echo"<b>function parameter</b><br>";
     function square($num)
     {
         echo"inside the square function".$num*$num."<br>";
     }
     square(30);
     echo"<br><br>";
     //global variable
     echo"<b>global variable</b><br>";
      $v1=20;
      function myfunction()
      {
          global $v1;
          echo"inside the my function".$v1."<br>";
          $v1++;

      }
      myfunction();
      $v1++;
      echo"outside the my function".$v1."<br>";
      echo"<br><br>";
     //static variable
     echo"<b>static variable</b><br>";
     function mystat()
     {
         static $count=0;
         echo"inside the my stat function".$count."<br><br>";
         $count++;
     }

     mystat();
     mystat();
     mystat();
     mystat();


    ?>
    
</body>
</html>