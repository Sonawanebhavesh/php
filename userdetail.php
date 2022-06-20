<?php
session_start();

if(!$_SESSION['status'])
{
    header("Location:userinfo.php");
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
    <style>
        #cont
        {
           margin:0px auto;
           width:80%;
        }
        .ctrl
        {
          width:70px;
        }
        table
        {
            width:30%;
        }
    </style>
</head> 
<body>
    <?php
      include "userencl.php";
    ?>

    <div id="cont">
        <h1>Product Detail's</h1>
    <form method="POST">
      <input type="text" name="userName" placeholder="Enter User Name" required><br>
      <input type="text" name="useradd" placeholder="Address" required><br>
      <input type="number" name="usermo" required>

      <?php
         $f=fopen("product.csv","r") or die("File can't be opened");
         $p=0;
         $q=100;
         echo"<table border='1' cellspacing='0' cellspadding='5'>";
         echo"<th></th><th>Product:</th><th>Price:</th><th>Quantity</th>";
         while(($row=fgetcsv($f))!==false)
         {
             echo"<tr>";
             echo"<td><input type='checkbox' value=".$row[0]." name=".$row[0]." checked></td>";
             echo"<td>$row[0]</td>";
            //echo"<td>$row[1]</td>";
             echo"<td><input type='text' name=".$p." value=".$row[1]." readonly class='ctrl'></td>";       
             echo"<td><input type='number' name=".$q." class='ctrl'></td>";
             echo"</tr>";
             $p++;
             $q++;
             
        }
        
         echo"</table>";
         echo"<input type='submit' name='generate' value='submit'>";
      
      ?>

    </form>
</div>

<?php
 if(isset($_POST['generate']))
 {
    // print_r($_POST);
    $r=array_values($_POST);
    print_r($r);
    $pop=array_pop($r);
    print_r($pop);
    $f1=fopen("invoiced.csv","a");
    fputcsv($f1,$r);

    echo"<script>alert('Record Added')</script>";
    fclose($f1);
 }

?>
</body>
</html>