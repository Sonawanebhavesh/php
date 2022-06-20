<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
     $server="localhost";
     $user="root";
     $pass="";
     $db="mysql";

     /*Method 1 procedurale*/
     /*  $conn=mysqli_connect($server,$user,$pass)
     if(!$conn)
     {
         die("unable to load file".mysqli_connect_error());
     } 
     echo"connect successful!"; */
 
      /*Method 2 Object oriented*/
   /*   $conn=new mysqli($server,$user,$pass);
     if($conn->connection_error)
     {
         die("unable to connect file".$con->mysqli_connect);
     }
     echo "connection successful!";
      */
    
     /*Mthod 3 : PDO*/

      try
     {
         $conn=new PDO("mysql:host=$server;database=$db",$user,$pass);
         if($conn)
         {
             echo"<h3>connection Establish</h3>";
         }
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     } 
    ?>
</body>
</html>