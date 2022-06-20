<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Student</title>
</head>
<body>
    <form method="POST">
       <!-- <input type="text" name="db" placeholder="Enter class name :"><br> -->
       <select name="db">
         <option value="v">V</option>
         <option value="VII">VII</option>
         <option value="VIII">VIII</option>
         <option value="IX">IX</option>
         <option value="X">X</option>
       </select><br>
       <input type="text" name="rn" placeholder="Enter Roll NO:"><br>
       <input type="text" name="sname" placeholder="Enter Student Name:"><br>
       <input type="submit" value="Add-Student" name="stn">
    </form>

    <?php
      if(isset($_POST['stn']))
      {
          $server="localhost";
          $user="root";
          $pass="";
          $db=$_POST['db'];
          $rn=$_POST['rn'];
          $sn=$_POST['sname'];
             
           try
           {
              $conn=new mysqli($server,$user,$pass,$db);
              if(!$conn)
              {
                  die("cant connected to Database ".$conn->$connection_error);
              }
              else
              {
                  echo"connected to database";
                  $q="insert into student(roll,studentname) VALUES($rn,'$sn')";
                  if($conn->query($q)===TRUE)
                  {
                      echo"Record Added Successfuly";
                  }
                  else
                  {
                      echo"Unable to Add record";
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