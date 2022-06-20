<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Student</title>
</head>
<body>
<form action="POST" enctype="multipart/form-data">
        <input type="text" name="language" placeholder="Enter language name"><br><br>
        <input type="number" name="year"><br><br>
        <input type="file" name="logo"><br><br>
        <textarea name="description" cols="21" row="5"></textarea><br><br>
        <input type="submit" name="add" value="ADD DATA">
    </form>

    <?php
      if(isset($_POST['add']))
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