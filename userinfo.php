<?php
   session_start();

   if(!$_SESSION['status'])
   {
       header("Location:userlog.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashBord</title>
    <style>
       form
       {
           margin-top:30px;
       } 
       #maincontent
       {
           background-image:url("image/bgimg3.jpg");
           background-size:cover;
           background-color:lightsalmon;
           padding:10px;
           height:315px;
           border-radius:20px;
       }
       #content
       {
         
          float:right;
          text-align:center;
          color:black;
          padding:10px;
          background-color:cornflowerblue;;
          border-radius:20px;
          width:200px;
          margin-right:20px;
          margin-top:10px;
          

       }
       .op
       {
           display:block;
           text-decoration:none;
           background-color:#eb7633;
           color:white;
           text-align:center;
           margin-top:15px;
           margin-left:20px;
           padding:10px;
           width:15%;
           border-radius:20px;
       }
       input
       {
           padding:10px;
           border-radius:10px;
           margin-bottom:5px;
       }
       
    </style>
</head>
<body>
   
    <!--<h1 align="center">User Dashbord</h1>-->
    <div id="maincontent">
        <div id="content">
         
        <?php
        // echo "<b>User Email</b> =".$_SESSION['e']."<br>";
         //echo "<b>Password</b> =".$_SESSION['p']."<br>"; 
        echo"<img src=".$_SESSION['photo']." width='150' align='center'><br>"; 
        echo"<p><strong>User Name:</strong><br>This is ".strtoupper($_SESSION['user']);"'s Dashbord..!</p>";
        ?>

         <form method="POST"> 
              <input type="submit" value="logout" name="lout">
          </form>
    
        </div>
    </div>
     
         <a class="op" href="dispalyprod.php">Display Product</a><br>     
         <a class="op" href="addprod.php">Add Product</a><br>
         <a class="op" href="userdetail.php">Product Detail</a><br>
         <a class="op" href="invoiced.php">Invoice</a><br>
     
    
   
    <?php
     if(isset($_POST['lout']))
     {
         session_destroy();
         sleep(1);
         header("Location:userinfo.php");
     }
    
    ?>
</body>
</html>