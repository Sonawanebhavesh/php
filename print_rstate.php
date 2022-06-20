<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r </title>
</head>
<body>
    <?php
          $a="bhavesh";
          $b=03;
          
          print_r($a);
          echo"<br>";
          print_r($b);
         
          echo"<br>";
          $cars=['hundai','suzuki','kia','honda'];

          print_r($cars);
          echo"<br>";    
          class student
          {
              function id()
              {
                  echo"R.No 1"."<br/>";
                  echo"bhavesh";
              }
          }
        
          $o1=new student();
          print_r($o1);
          
          class employee
          {
              function desplay()
               {
                   echo"this is display function";
                  
               }
     
          }
        
          $p1=new employee();
          $p2=new employee();
          $p3=new employee();
          $p4=new employee();
          $p5=new employee();
          $o2=new student();

          echo"<br/>";
           
         $arrayobj=[$p1,$p2,$p3,$p4,$p5,"bhavesh",true,$o2];
         
          print_r($arrayobj);
          print_r($arrayobj[3]);
          





    ?>
    
</body>
</html>