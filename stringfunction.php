<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strimg Function</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="n">
        <input type="text" name="f">
        <input type="text" name="r">
        <!-- <input type="checkbox" name="a" >a
         <input type="checkbox" name="an" >an -->
        <input type="submit" value="submit" name="s">

    </form>
    <?php
     if(isset($_POST['s']))
     {
         /*  $mystr=$_POST['n'];
          foreach($_POST as $x)
         {
          if(is_array($x))
          {
              foreach($x as $o)
              {
                  if($o==="a")
                  {
                      echo "<script>alert('a is slected')</script>";
                      echo strpos($mystr,$o);
                  }
                  else if($o==="an")
                  {
                    echo "<script>alert('an is slected')</script>";  
                    echo strpos($mystr,$o);
                  }
                  else
                  {
                    echo "<script>alert('invalid')</script>";
                      
                  }
              }
          }   
        }
     } */

    /*  if(is_string($P_POST['n'])!==false)
     {
         echo"it is a string";
     }
     else
     {
         echo"any other type";
     }

     $temp=(int)$_POST['n'];
     echo gettype($temp);
     $temp++;
     echo"<br>".$temp;
     $sum=0;
      $temp=$_POST;
      foreach($temp as $n)
      {
          foreach($n as $t)
          {
              $x=(int)$t;
              $sum=$sum+$x;
              echo"<>".gettype($x);
          }

      }
     echo"<br> sum :".$sum;
     echo"<br>upper case".strtoupper($_POST['n']);
     echo is_array($_temp);
 */
     if(isset($_POST['s']))
     
     {
         
         $mydata="  bhavesh  ";
         echo strlen($mydata);
         $x=trim($mydata," ");
         
         echo"<br>".$x;

         echo strlen($x);

         $mystr=$_POST['n'];
         $find=$_POST['f'];
         $replace=$_POST['r'];

         echo str_replace($find,$replace,$mystr);
         echo"<br>".substr($mystr,5,10);
         echo"<br>".strstr($mystr,"to");
     }
 }
    ?>
    
</body>
</html>