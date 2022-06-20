<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read question</title>
</head>
<body>
  <?php
     $fr=fopen("myque.csv","r");
     if($fr===false)
     {
         die("file not found");
     }
     else
     {
       $rowcount=0;
       echo "<form method='POST'>";
       echo"<table border='1' cellspacing='0' >";
       while(($rows=fgetcsv($fr))!==false)
       {
           if($rowcount!==0)
           {
               echo"<tr>";
               $colums=0;
               foreach($rows as $m)
               {
                
                   if($colums!==5)
                   {
                    if($colums!==0)
                    {
                        if($colums===1)
                        {
                            echo"<td>".$m;
                            echo"<input type='radio' value=".$colums." name="
                            .$rowcount." required>";
                            echo"</td>";
                        }
                        else
                        {
                         echo"<td>".$m;
                         echo"<input type='radio' value=".$colums." name="
                         .$rowcount.">";
                         echo"</td>";
                        }
                    }
                               
                    else
                    {
                        echo"<td>".$m."</td>";
                    }    
                       
                 }
                   
                 $colums++;
           }
           echo"</tr>";
       }
      $rowcount++;
     }
     echo"</table>";
     echo"<input type='submit' name='sa' value='submit'>";
     echo"</form>";
    }
  ?>
  <?php
    if(isset($_POST['sa']))
    {
        echo"submitted..!";
        print_r($_POST);
    }
  ?>

   
</body>
</html>