<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control stat</title>
</head>
<body>
    
    <?php
      $marks1=array(78,87,90);
      $marks2=array(68,74,50);
      $marks3=array(98,54,80);
      
      $student1=array("name"=>"Bhavesh","RN"=>1,"marks"=>$marks1);
      $student2=array("name"=>"naeem","RN"=>2,"marks"=>$marks2);
      $student3=array("name"=>"faisal","R.N"=>3,"marks"=>$marks3);

      $dev=array($student1,$student2,$student3);

      print_r($dev);

      echo"<br>";

      foreach($dev as $dv)
      {
          if(is_array($dv))
          {
              foreach($dv as $d)
              {
                  echo"<br>";
                  if(is_array($d))
                  {
                      foreach($d as $s)
                      {
                          echo" ".$s;
                      }
                  }
                  else
                  {
                      echo" ".$d;
                  }
              }
          }
      }


      ?>
</body>
</html>