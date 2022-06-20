<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login page</title>
    <style>
        body
        {
            background-image:url("image/bgimg.jpg");
            background-size:cover;
        }
        form
        {
           background-image:url("image/2.jpg");
           background-size:cover;
           padding :50px;
           margin :10px;
           border-radius:20px;
           background-color:pink;
           opacity:1;
           width:15%;
           height:30%;
           margin-left:500px;
           margin-top:200px;
        }
        input
        {
            padding:10px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="email" name="mail" placeholder="Enter E-mail" required><br><br>
        <input type="password" name="pass" required><br><br>
        <input type="submit" value="login" name="log">
    </form>
    <?php
      if(isset($_POST["log"]))
      {
          $flag=0;
          $fl=fopen("userdata.csv","r") or die("unable to login !");
          while(!feof($fl))
          { 
              $row=fgetcsv($fl);
              if($_POST['mail']===$row[0] && $_POST['pass']===$row[1])
              {
                  $_SESSION['e']=$_POST['mail'];
                  $_SESSION['p']=$_POST['pass'];
                  $_SESSION['photo']=$row[2];
                  //print_r($row);
                  $_SESSION['status']=true;
                  $enu=explode("@",$_POST['mail']);
                  $_SESSION['user']=$enu[0];
                  $flag=1;
                  //echo"<script>alert('login Successfull')</script>";
                  header("Location:userinfo.php");
                  break;
              }
              
          }
          if($flag==0)
          {
            echo"<script>alert('login Failed')</script>";
          }
      }
    ?>
    
</body>
</html>