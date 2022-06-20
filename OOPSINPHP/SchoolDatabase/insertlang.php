<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .b
        {
            border-radius:8px;
        }
    </style>
    <title>Coding Language</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="langname" placeholder="Language Name" class="b"><br><br>
        <input type="number" name="year" placeholder="Year" class="b"><br><br>
        <input type="file" name="logo"><br><br>
        <textarea name="description" cols="21" rows="5"></textarea><br><br>
        <input type="submit" name="submit" value="Add Data" class="b">
    </form>
    <?php
        $server="localhost";
        $user="root";
        $pass="";
        $db="collection";

        $conn=new mysqli($server,$user,$pass,$db) or die("unable to connect !!!!");

        if(isset($_POST['submit']))
        {
            $langname=$_POST['langname'];
            $year=$_POST['year'];
            $desc=$_POST['description'];
            $file=$_FILES['logo'];

            print_r($file);

            $fname=$file['name'];
            $ftype=$file['type'];
            $temp=$file['tmp_name'];
            $size=$file['size'];
            $allow=array("jpeg","png","gif","jpg");
            $x=end(explode(".",$fname));
            $ext=strtolower($x);
            $dest="images/".$fname;

            if(in_array($ext,$allow)===TRUE)
            {
                echo ($size/1000);
                if(($size/1000)<1 || ($size/1000)>100)
                {
                    echo "<script>alert('Incorrect file size')</script>";
                }
                else
                {
                    move_uploaded_file($temp,$dest);
                    $q="INSERT INTO 'record'('langname','year','description','logo') VALUES ('$langname','$year','$desc','$file')";
                    $q="INSERT INTO `record` (`langname`, `year`, `logo`, `desc`) VALUES ('$langname', '$year', '$dest', '$desc')";

                    if($conn->query($q)===TRUE)
                    {
                        echo "<script>alert('Record Added Successfully !!! ')</script>";
                    }
                    
                }
            }
            else
            {
                echo "<script>alert('Incorrect File Type')</script>";
            }
        }
        
    ?>
</body>
</html>
