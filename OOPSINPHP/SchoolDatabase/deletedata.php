<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletion of data from table</title>
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
         $db=$_POST['db'];

        $conn= new mysqli($server,$user,$pass,$db);
        if($conn->connect_error)
        {
            die("Error while ".$conn->connect_error);
        }
        else
        {
            echo "<br>Connection successfull to $db<br>";

            $q="SELECT * FROM teacher";

            $res=$conn->query($q);

            print_r($res);
            if($res->num_rows>0)
            {
                echo "<table border=1 cellspacing=0 cellpadding=10 style='margin-top:50px; margin-left:100px;'>";
                echo "<tr><th>Teachers ID</th><th>Teachers Name</th><th>Deletion option</th></tr>";
                // echo "data can be accessed";
                while($row=$res->fetch_assoc())
                {
                   echo "<tr>";
                   echo "<td>".$row['id']."</td><td>".$row['teachername']."</td>";
                   echo "<td>"."<a href=deletedata.php?id=".$row['id']."&teachername=".$row['teachername'].">Delete</a>"."</td>";
                   echo "</tr>";
                }
                echo "</table>";
                // print_r($_GET);
                $tid=$_GET['id'];
                $tname=$_GET['teachername'];

                $qu="DELETE FROM teacher WHERE id=$tid";
                $r=$conn->query($qu);
                if(!$r)
                {
                    die("Deletion failed");
                }
                else
                {
                    echo "<script>alert('Data deleted successfully');</script>";
                }
        
                $conn->close();
            }
            else
            {
                echo "No data is present to be accessed";
            }

        }
     }

     ?>
</body>
</html>