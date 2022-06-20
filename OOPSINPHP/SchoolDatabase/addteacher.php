<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Teachers</title>
</head>
<body>
    <form method="POST">
      <!-- <input type="text" name="db" placeholder="Class Name :" required><br><br> -->
     <select name="db">
         <option value="v">V</option>
         <option value="VII">VII</option>
         <option value="VIII">VIII</option>
         <option value="IX">IX</option>
         <option value="X">X</option>
     </select><br><br>
      <input type="text" name="tid" placeholder="Teacher-Id :" required><br><br>
      <input type="text" name="tname" placeholder="Teacher_Name:" required><br><br>
      <input type="submit" name="add" value="Add-Teacher">
    </form>

    <?php
     if(isset($_POST['add']))
     {
         $server="localhost";
         $user="root";
         $pass="";
         $db=$_POST["db"];
         $tid=$_POST["tid"];
         $tname=$_POST["tname"];

         try
         {
           $conn=new mysqli($server,$user,$pass,$db);
           if(!$conn)
           {
                die("Cant connect to the sever !");
           }
           else
           {
               $q="insert into teacher(id,teachername) VALUES($tid,'$tname')";
               if($conn->query($q)===TRUE)
               {
                   echo"Record Added";
               }
               else
               {
                   echo"unable To add record";
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