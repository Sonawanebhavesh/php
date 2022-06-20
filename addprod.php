<?php
session_start();

if(!$_SESSION['status'])
{
    header("Location:userlog.php");
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
     
   <!--   <h1>Add Product's</h1> 

   <form method="POST">
       <input type="text" name="proName" required>
       <input type="number" name="proqn" required>
       <input type="submit" name="add" value="Add">
    </form>
   -->
   <?php
  /*   if(isset($_POST['add']))
     {
        
             $data=array($_POST['proName'],$_POST['proqn']);
             $f=fopen("product.csv","r") or die("unable to read");
             $flag=0;
             while(($row=fgetcsv($f))!==false)
             {
                 if($row[0]===$_POST['proName'])
                 {
                   echo"<script>alert('already exist')</script>";
                   $flag=1;
                   fclose($f);
                   break;
                 }
              }
             if($flag===0)
             {
               $f1=fopen("product.csv","a");
               fputcsv($f1,$data);
               echo"<script>alert('Record Added')</script>";
               fclose($f1);
            }
              echo"Thank you...!";
     }
     echo"<br><br>";*/
     
    ?>
      <form method="POST">
         <select name="st">
         <?php
           $f=fopen("product.csv","r") or die("file cant be opened");
        
           while(($row=fgetcsv($f))!==false)
            {
              echo"<option>".$row[0]."</option>";
            }
            fclose($f);
         ?> 
         </select>
         <input type="submit" name="submit" value="Submit">

      </form><br><br>
      <form method="POST">
        <?php
         $m=0;
         $fl=fopen("product.csv","r") or die("file cant be opened");
         if(isset($_POST['submit']))
         {
           fseek($fl,0);
           while(($row=fgetcsv($fl))!==false)
           {
            //echo "<input type='text' name='nm' value=".$row[1].">";
               if($row[0]===$_POST['st'])
               {
                 echo "<input type='number' name='pr' value=".$row[1]."required>";
                 $pos=$m;
               }
               $m++;
           }
         }
         fclose($fl);

        ?>
        <input type="submit" value="Update" name="update">

      </form>

      <?php
        if(isset($_POST['update']))
        {
          
        }
      
      ?>

     
</body>
</html>