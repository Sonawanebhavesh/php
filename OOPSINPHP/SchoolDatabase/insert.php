<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert DATA</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="language" placeholder="Enter language name"><br><br>
        <input type="number" name="year"><br><br>
        <input type="file" name="logo"><br><br>
        <textarea name="description" cols="21" row="5"></textarea><br><br>
        <input type="submit" name="add" value="ADD DATA">
    </form>
    <?php
      $server="localhost";
      $user="root";
      $pass="";
      $db="programming";

      $conn=new mysqli($server,$user,$pass,$db) or die("Unable to connect");

      if(isset($_POST['add']))
      {
        $language=$_POST['language'];
        $year=$_POST['year'];
        $desc=$_POST['description'];

        $file=$_FILES['logo'];

        $fname=$file['name'];
        $ftype=$file['type'];
        $tmp=$file['tmp_name'];
        $allow=array("jpeg","png","jpg","gif");
        $x=end(explode(".",$fname));
        $ext=strtolower($x);
        $size=$_FILES['logo']['size'];
        $dest="images/".$fname;

        print_r($file);

        if(in_array($ext,$allow)===TRUE)
        {
            echo ($size/1000);

            if(!$size)
            {
                echo"<script> alert('Incorrect file size')</script>";

            }
            else
            {
                move_uploaded_file($tmp,$dest);

                $q="INSERT INTO `lang` (`language`, `year`, `description`, `logo`) VALUES ('$language', '$year', '$desc', '$dest')";

                
                /*$q="INSERT INTO 'lang' ('langname','year','logo','description') VALUES('$language', '$year', '$dest', '$desc')";
                */

                if($conn->query($q)===TRUE)
                {
                    echo"<img src=";
                    echo"'$dest' width='100'>";
                    echo"<script>alert('REcord addeed Successfuly..!')</script>";
                }
            }
        }
        else
        {
            echo"<script>alert('incorrect file type..!')</script>";
        }
      }
    ?>
</body>
</html>