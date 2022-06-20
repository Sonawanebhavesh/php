<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
   <form method="POST" enctype="multipart/form-data">
       <input type="file" name="photo">
       <input type="submit" value="upload" name="upload">
   </form>

  <?php
   if(isset($_POST['upload']))
   {
      if($_FILES['photo']['name']!=="")
      {
           echo"<script>alert('file selected')</script>";
           $ext=pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);
           $allowext=array("jpg","jpeg","png","gif");
           if(!in_array($ext,$allowext))
           {
            echo"<script>alert('file type not allowed')</script>";
           }
           else
           {
               echo"<script>alert('Correct Formate')</script>";
               $temp=explode(".",$_FILES['photo']['name']);
               print_r($temp);
               $time=round(microtime(true));
               echo"<br>Real time in numeric value ".$time;
               $path="image/".$temp[0].$time.".".$temp[1];
               echo"<br>".$path;
               if(move_uploaded_file($_FILES['photo']['tmp_name'],$path))
               {
                echo"<script>alert('file uploaded..!')</script>";
               }
               else
               {
                echo"<script>alert('file Not uploaded')</script>";
               }
           }
          
      }
      else
      {
       echo"<script>alert('file not selected ')</script>";
      }
    
    
   }
  ?>
</body>
</html>