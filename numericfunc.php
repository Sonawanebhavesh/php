<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric functions</title>

</head>
<body>
    <form method="POST">
     <table>
         <tr>
             <td>
                 <b>Enter Username:-</b>
                 <input type="text" name="nm" id="n" >
             </td>
             <tr>
                 <td>
                     <b>Password:-</b>
                     <input type="password" name="pass" id="p">
                 </td>
             </tr>
             <tr>
                 <td>
                     <b>Mo.num:-</b>
                     <input type="number" name="numb"  >
                 </td>
             </tr>
             <tr>
                 <td>
                    <input type="submit" name="sm" value="submit">
                 </td>
             </tr>
         </tr>
     </table>

    </form>
    <?php
      if(isset($_POST['sm']))
      {
          //echo"<script>alert()</script>";
          echo"<br>";
          echo rand(1000,100000);
        /* foreach($_POST as $x)
        {
           
        }
       */
      }
      else
      {
          echo"fill the form";
      }
    ?>
    
</body>
</html>