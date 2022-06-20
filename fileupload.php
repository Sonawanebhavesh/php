<?php
//$actualphoto=echo"<img src='".$destfile."'".">";
//$actualsign= echo"<img src='".$destfile2."'".">";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        #p
        {
            width: 100px;
            height:100px;
            background-color:grey;
            float:left;

        }
        #s
        {
            width: 100px;
            height:100px;
            background-color:grey;
            float:left;
        }
    </style>
</head>
<body>
      <!-- file processing start here -->
      <?php
         if(isset($_POST['submit']))
         {

           print_r($_POST);
           echo"<br>";
           print_r($_FILES['photo']);
           echo"<br>";
           print_r($_FILES['sign']);



            if($_FILES['photo']['error']===0||$_FILES['sign']['error']===0)
            {
                echo"<script>alert('file is added')</script>";

               /* file format code starts frome here */
                
                if(($_FILES['photo']['type']==="image/jpeg"||$_FILES['photo']['type']==="image/jpg")&&($_FILES['sign']['type']==="image/jpeg"||$_FILES['sign']['type']==="image/jpg"))
                {
                    echo"<script>alert('correct file format')</script>";
                    /*file size format code start from here */  
                    if($_FILES['photo']['size']>=150000||$_FILES['sign']['size']>=150000)
                    {
                      echo"<script>alert('file size must be less than 160Kb..!')</script>";
                      
                    }
                    else
                    {
                       $destfile="image/".$_FILES['photo']['name'];
                       $imgdetail=getimagesize($_FILES['photo']['tmp_name']);
                       print_r($imgdetail);
                       $destfile2="image/".$_FILES['sign']['name'];
                       $imgdetail2=getimagesize($_FILES['sign']['tmp_name']);
                       print_r($imgdetail2);
                       echo"<br>";
                      
                       if(($imgdetail[0]<=2000 || $imgdetail[1]<=1500) && ($imgdetail2[0]<=2000 || $imgdetail2[1]<=1500))
                       {
                         move_uploaded_file($_FILES['photo']['tmp_name'],$destfile);
                         move_uploaded_file($_FILES['sign']['tmp_name'],$destfile2);
                         echo"<script>alert('file uploaded succesfully...!')</script>";
                        //echo"<img src='".$destfile."'".">";
                       // echo"<img src='".$destfile2."'".">";
                        
                        echo"<script>alert('file formate is correct!')</script>";
                        $actualpath="image/".$_FILES['photo']['name'];
                        $filename=pathinfo($actualpath,PATHINFO_FILENAME);
                        $extention=pathinfo($actualpath,PATHINFO_EXTENSION);
                        $counter=1;
                        if(file_exists($actualpath))
                        {
                            $actualpath="image/".$filename."_".$counter.$extention;
                            $counter++;
                        }
                        move_uploaded_file($_FILES['sign']['tmp_name'],$actualpath);
                         
                       }
                       else
                       {
                        
                        echo"<script>alert('file resolution should be between 2000x1500')</script>";  
                       
                         
                       }
                    }
                }
                else
                {
                    echo"<script>alert('incorrect correct file format')</script>";
                }
            }
            else
            {
                echo"<script>alert('plese attache file')</script>";
            }
         }
         
      ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" method="POST">
      <table>
          <tr>
              <td>
                  <input type="file" name="photo">
              </td>
          </tr>
          <tr>
              <td>
                  <div id="p">
                     <img src="<?php $actualphoto; ?>"> 
                  </div>
                  
              </td>
          </tr>
          <tr>
              <td>
                  <input type="file" name="sign">
              </td>
          </tr>
          <tr>
              <td>
                  <div id="s">
                     <img src="<?php $actualsign; ?>"> 
                  </div>
                  
              </td>
          </tr>
          <tr>
              <td>
                  <input type="submit" value="upload" name="submit">
              </td>
          </tr>
      </table>
   </form>
</body>
</html>