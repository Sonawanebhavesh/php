<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Create & Delete</title>
</head>
<body>
    <form method="POST">
      <input type="text" name="data">
      <input type="submit" name="creat" value="CREAT">
      <input type="submit" name="delete" value="DELETE">
    </form>
    <?php
      if(isset($_POST['creat']))
      {
          if($_POST['data']==="")
          {
            echo"please enter database name ! <br>";
          }
           else
          {
            $server="localhost";
            $user="root";
            $pass="";
            $db=$_POST['data'];

            try
            {
              
                $conn=new mysqli($server,$user,$pass);
                if(!$conn)
                {
                    die("unable To connect with Mysql".$conn->$connect_error);

                }
                echo"database connected <br>";

                $q="create database $db";
                if($conn->query($q)===true)
                {
                  echo $db."database created !";
                }
                $conn->close();

                $conn1=new mysqli($server,$user,$pass,$db);
                if(!$conn1)
                {
                  die("unable to connect with database".$conn1->$connection_error);

                }
                else
                {
                    $tbl1="create table student(
                      roll TINYINT NOT NULL PRIMARY KEY,
                      studentname VARCHAR(50) NOT NULL
                      
                      )";

                      $tbl2="create table teacher(
                        id TINYINT NOT NULL PRIMARY KEY,
                        teachername VARCHAR(50) NOT NULL
                        
                        )";

                        if($conn1->query($tbl1)===TRUE && $conn1->query($tbl2)===TRUE )
                        {
                           echo"<br> Table Created...!";
                        }
                }
            }
            catch(Exception $e)
            {
               echo $e->getMessage();
            } 
          }
       }
    
    ?>
</body>
</html>