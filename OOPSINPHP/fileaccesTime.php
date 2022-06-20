<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File details</title>
</head>
<body>
    <form method="POST">
       <input type="file" name="fl"><br>
       <!-- <label>Enter the File Path :</label><input type="text" name="flth"><br> -->
       
       <input type="radio" name="ch">Display File Type<br>
       <input type="radio" name="ch">Display Last Access Time<br>
       <input type="radio" name="ch">Display File Size<br>
        <input type="radio" name="ch">Delete File<br>
        <input type="submit" name="upload" value="UPLOAD">
        <input type="submit" name="clear" value="CLEAR">
    </form>
    
    <?php
    if(isset($_POST['upload']))
    {
    $ch=$_POST['ch'];


     switch($ch)
     {
         case 1:
            echo "File name :".$_FILES['fl']['name'];echo"<br>";
            echo "File type :".$_FILES['fl']['type'];
            break;

        case 2:
             $filename=$_POST['fl'];
             if(file_exists($filename))
             echo $filename."last modified:".date("F D Y H:i:s.",filetime($filename));
             break;

        case 3:
            $filename=$_POST['fl'];
            echo"Size of the file:".filesize($filename);
            break;

        case 4:
          $filename=$_POST['fl']['name'];
          $d=unlink($filename);
          if($d==1)
          echo"File delete";
          else
          echo"there is problem to deleted File";
          break;

     }
    }
    
    ?>
</body>
</html>