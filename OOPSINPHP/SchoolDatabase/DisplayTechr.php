<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Teachears Record</title>
</head>
<body>
    <form method="POST">
        <select name="db">
          <option value="v">V</option>
          <option value="vi">VI</option>
          <option value="vii">VII</option>
          <option value="viii">VIII</option>
          <option value="ix">IX</option>
          <option value="x">X</option>
        </select>
        <input type="submit" value="Show-Teacher" name="show">
    </form>

    <?php
      if(isset($_POST['show']))
      {
        $server="localhost";
        $user="root";
        $pass="";
        $db=$_POST["db"];

        $conn=new mysqli($server,$user,$pass,$db);
        
        try
        {
            if(!$conn)
              {
                 die("cant connect to database".$conn->$connection_error);
              }
              else
                {
                   echo"connected to Database";
                   $q="select * from teacher";
                   $records=$conn->query($q);
                   print_r($records);
                   if($records->num_rows>0)
                   {
                       echo"<table border='1' cellpadding='10' cellspacing='0'>";
                       echo"<tr><th>Teacher-ID</th><th>Teacher-Name</th></tr>";
                       while($row=$records->fetch_assoc())
                       {
                            //print_r($row);
                            echo"<tr>";
                            echo"<td>".$row['id']."</td>";
                            echo"<td>".$row['teachername']."</td>";
                            echo"</tr>";
                       }
                       echo"</table>";
                   }
                   else
                   {
                     echo"Unable To show Data";
                   }
                  
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