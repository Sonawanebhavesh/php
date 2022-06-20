<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Data</title>
</head>
<body>
    <?php
      $str="<h1>Hellow world<h1>";
      $s=filter_var($str,FILTER_SANITIZE_STRING);
      echo $s;

      echo"<br>";

      $x=1212;

      if(filter_var($x,FILTER_VALIDATE_INT))
      {
          echo "valid Interger";
      }
      else
      {
          echo "Invaid Interger";
      }
     
      echo"<br>";

      $m=0;

      if(filter_var($m,FILTER_VALIDATE_BOOL))
      {
          echo "booelen";
      }
      else
      {
          echo "not boolean";
      }
    
      echo"<br>";

      $url="https://www.php.net/manual/en/filter.constants.php";
      
      if(filter_var($url,FILTER_VALIDATE_URL))
      {
          echo "Valid URL";
      }
      else
      {
          echo "Invaid URL";
      }



    ?>
</body>
</html>