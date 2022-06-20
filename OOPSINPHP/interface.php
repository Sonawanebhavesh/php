<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface In php</title>
</head>
<body>
    <?php
      interface A
      {
          function P();
      }
    
      interface B
      {
          function Q();
      }

      class C implements A,B
      {
          function P()
          {
             echo"This is function P <br>";
          }
          function Q()
          {
             echo"This is function Q";
          }
      } 

      $obj=new C;
      $obj->P();
      $obj->Q();



    ?>
    
</body>
</html>