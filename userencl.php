<div id="maincontent">
        <a class="op" href="dispalyprod.php">Display Product</a>
        <a class="op" href="addprod.php">Add Product</a>
        <a class="op" href="userdetail.php">Product Detail</a>
        <a class="op" href="invoiced.php">Invoice</a>
        <a class="op" href="userlog.php">Log-in</a>
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
      
    <?php
     if(isset($_POST['lout']))
     {
         session_destroy();
         sleep(1);
         header("Location:userinfo.php");
     }
    
    ?>