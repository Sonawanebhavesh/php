<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Teachears Record</title>
    <style>
      #btn1{
        padding:10px;
        margin-top:10px;
        margin-left:50px;
      }
      #btn2{
        padding:10px;
        margin-top:10px;
        margin-left:30px;
      }
    </style>
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
                       echo "<form method='GET' action='deleteMultiple.php'>";                     
                       echo "<table border='1' cellpadding='10' cellspacing='0'>";
                       echo "<tr><th>Teacher-ID</th><th>Teacher-Name</th><th>Delete</th></tr>";
                       while($row=$records->fetch_assoc())
                       {
                            //print_r($row);
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['teachername']."</td>";
                            echo "<td><input type='checkbox' name='delete[]'";
                            echo "value='";
                            echo $row['id'];
                            echo "'</td>";
                            echo "</tr>";
                            }
                       echo "</table>";
                       echo "<td><input type='submit' name='submit' value='SUBMIT' id='btn1'></td>";
                       echo "<td><input type='reset' name='reset' value='RESET' id='btn2'></td>";
                       echo "<td>";
                       echo "</form>";
                      
                  }
                    else
                     {
                     echo"Unable To show Data";
                     }
                     if(isset($_GET['submit']))
                     {
                      //echo "<script>alert('Record Deleted successfully')</script>";
                      foreach($_GET['delete'] as $r)
                        {
                           $delid="Delete from teacher where id=$r";
                           if($conn->query($delid)===TRUE)
                              {
                                echo "<script>alert('Record Deleted successfully')</script>";
                              }
                         
                         }
                         
                         //header("refresh:0");
                        }
                }
               

        }
        catch(Exception $e)
          {
             echo $e->getMessage();
          }
       
      }
    ?>
    <?php
       

    ?>
</body>
</html>
</body>
</html>