<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Display</title>
</head>
<body>
     <form method="POST">
     <select name="db">
         <option value="v">V</option>
         <option value="vii">VII</option>
         <option value="viii">VIII</option>
         <option value="ix">IX</option>
         <option value="x">X</option>
      </select>
       <input type="submit" value="Show" name="show">

     </form>    

     <?php
       if(isset($_POST['show']))
       {
           $server="localhost";
           $user="root";
           $pass="";
           $db=$_POST['db'];
           try
           {
              $conn=new mysqli($server,$user,$pass,$db);
              if(!$conn)
              {
                  die("unable to connect with Database ".$conn->$connection_error);
              }
              else
              {
                  echo"connected to Database";
                  echo"<br>";
                  $q="select * from student";
                  $record=$conn->query($q);
                  print_r($record);
                  echo"<br>";
                  echo"<table border='1' cellpadding='5' cellspacing='0'>";
                  echo"<tr><th>Roll.NO.</th><th>Student-Name</th></tr>";
                  while($row=$record->fetch_assoc())
                  {
                       //print_r($row);
                       echo"<tr>";
                       echo"<td>".$row['roll']."</td>";
                       echo"<td>".$row['studentname']."</td>";
                       echo"</tr>";
                  }
                  echo"</table>";
                  
              }
           }
           catch(Exception $e)
           {
               echo $e->getMessage();
             
           }
       }

     
     ?>
</body>
</html>