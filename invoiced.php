<?php
session_start();
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
      body
      {
        background-image:url("image/bgimg3.jpg");
        background-size:cover;
        color:white;
       
      }
      #d1
      {
        text-align:center;
      }
     
      table
      {
        width:50%; 
        padding:20px;
        border-radius:15px;
        background-color:grey;
       
      }
       table th
      {
        color:black;
        background-color:yellow;
      }
    </style>
</head>
<body>
    <?php
      include "userencl.php";
    ?>
    <?php
      function convertNumberToWord($num = false)
      {
          $num = str_replace(array(',', ' '), '' , trim($num));
          if(! $num) {
              return false;
          }
          $num = (int) $num;
          $words = array();
          $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
              'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
          );
          $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
          $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
              'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
              'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
          );
          $num_length = strlen($num);
          $levels = (int) (($num_length + 2) / 3);
          $max_length = $levels * 3;
          $num = substr('00' . $num, -$max_length);
          $num_levels = str_split($num, 3);
          for ($i = 0; $i < count($num_levels); $i++) {
              $levels--;
              $hundreds = (int) ($num_levels[$i] / 100);
              $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
              $tens = (int) ($num_levels[$i] % 100);
              $singles = '';
              if ( $tens < 20 ) {
                  $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
              } else {
                  $tens = (int)($tens / 10);
                  $tens = ' ' . $list2[$tens] . ' ';
                  $singles = (int) ($num_levels[$i] % 10);
                  $singles = ' ' . $list1[$singles] . ' ';
              }
              $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
          } //end for loop
          $commas = count($words);
          if ($commas > 1) {
              $commas = $commas - 1;
          }
          return implode(' ', $words);
      }
    
    ?>
    
      <form method="POST" enctype="multipart/form-data">
       <select name="str" id="n">
       <option>Select Customer Name </option>
         <?php
           //Add array elements to the drop down
      /*      $col=0;
           $file=fopen("invoiced.csv","r");
           $customer=array();
           while(!feof($file))
           {
               array_push($customer,fgetcsv($file)[$col]);
           }

           $i=0;
         
           while($i<count($customer))
           {
               echo "<option value=".$customer[$i].">".$customer[$i]."</option>";
               $i++;
           }

           print_r($customer);
           fclose($file); */
           $f=fopen("invoiced.csv","r") or die("file cant be opened");
           while(($row=fgetcsv($f))!==false)
           {
             echo"<option>".$row[0]."</option>";
           }
           fclose($f);
         ?>
         </select>
         <input type="submit" value="SHOW" name="show">
         <?php
           if(isset($_POST['show']))
           {
             $fl=fopen("invoiced.csv","r") or die("file cant be opened");
             //$r=0;
             //$select=$_POST['str'];
             
             while(($row1=fgetcsv($fl))!==false)
             {
                if($_POST['str']===$row1[0])
                {
                  echo"<script>alert('record selected')</script>";
                  echo"<div id='d1'>";
                  array_pop($row1);
                  $nm=array_shift($row1);
                  $ad=array_shift($row1);
                  $cn=array_shift($row1);
                  // print_r($row1);
                  echo"<h1>Invoice</h1>";
                  echo"<h2>Customer Name : $nm<h3>";
                  echo"<h3>Customer Address : $ad<h3>";
                  echo"<h3>Customer Id : $cn<h3>";

                  echo"<div id='d2'>";

                  echo"<table align='center' border='1' cellspacing='0' cellpadding='5'>";
                  echo"</div>";
                  echo"<tr>";
                    echo"<th>Product</th><th>Price</th><th>Quantity</th><th>Total</th>";
                    echo"<tr>";
                  $total=0;
                  foreach(array_chunk($row1,3) as $a)
                  {
                    
                    echo"<tr>";  
                    echo"<td>$a[0]</td>";
                    echo"<td>$a[1]</td>";
                    $x=$a[1]*$a[2];
                    echo"<td>$a[2]</td>";
                    echo"<td>$x</td>";
                    $total=$total+$x;
                    $amount=round(($total/5.5)+$total);
                    echo"</tr>"; 
                  }
                  
                  
                }
                
              
             }
             echo"</table>";echo"<br><br>";
             echo"</div>";
             echo"<table align='center' border='1' cellspacing='0' cellpadding='5'>";
             echo"<tr>";
             
             echo"<th>Customer Name:</th><th>Customer Address:</th><th>Customer id:</th><th>Total</th><th>GST</th><th>Amount :</th>";
            
             echo"</tr>";

             echo"<tr>";
             echo"<td>$nm</td>";
             echo"<td>$ad</td>";
             echo"<td>$cn</td>";
             echo"<td>$total ₹</td>";
             echo"<td>5.5%</td>";
             echo"<td>$amount ₹</td>";
             echo"</tr>";

             //echo"<h2>Total Amount : $total</h2>";
              
             echo"</table>";
             $word=convertNumberToWord($amount);
             echo"<h3>The Total Amount is , $word Rupee(₹) only</h3>";
                   
           }
         ?>
      </form>
    
</body>
</html>