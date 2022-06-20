<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php files</title>
    
</head>
<body>
    <?php
   if(isset($_POST['sub']))
   {
     /*  print_r($_POST); 

       foreach($_FILES as $key)
     foreach($key as $k)
     {
          echo"<br>".$k;
      }
  */
 
    /*  echo"<br>".$_FILES['file1']['name'];
     echo"<br>".$_FILES['file1']['type'];
    

     if($_FILES['file1']['type']==="image/jpeg" || $_FILES['file1']['type']==="image/jpg" || $_FILES['file1']['type']==="image/png" )
      {
        echo"<script>alert('file uploaded')</script>";
      }
      else
      {
        echo"<script>alert('Error')</script>";
      }    */

    //print_r($_FILES);
   if($_FILES['file1']['type']==='image/jpeg')
    {
      //echo"<script>alert('file uploaded')</script>";
          if($_FILES['file1']['size']>=150000)
          {
            echo"<script>alert('file size must be less than 150Kb..!')</script>";
            
          }
          else
          {
             $destfile="image/".$_FILES['file1']['name'];
             $imgdetail=getimagesize($_FILES['file1']['tmp_name']);
             if($imgdetail[0]!=1600 && $imgdetail[0]!=738)
             {
              echo"<script>alert('file resolution should be between 1600x738')</script>";  
             
             }
             else
             {
               move_uploaded_file($_FILES['file1']['tmp_name'],$destfile);
               echo"<script>alert('file uploaded succesfully...!')</script>";
               echo"<img src='".$destfile."'".">";
             }
          }
    }
    else
    {
      echo"<script>alert('Invalid file format')</script>";
    
    }
  }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"  enctype="multipart/form-data">
    <input type="file" name="file1">
    <input type="submit" name="sub" value="UPLOAD">
        
    </form>
    
</body>
</html>