<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    <?php
        $server="localhost";
        $user="root";
        $pass="";
        $db="programming";
        $totalper_page=3;
        
        $conn=new mysqli($server,$user,$pass,$db) or die("unable to connect");

        $q="SELECT * FROM record";
        if($result=$conn->query($q))
        {
            echo "<table cellspacing='0' cellpading='5' border='1'>";
            echo "<tr><th>id</th><th>Language name</th><th>Year</th><th>Description</th><th>logo</th>";

            while($row=$result->fetch_assoc())
            {
                $id=$row['id'];
                $langname=$row['langname'];
                $year=$row['year'];
                $desc=$row['desc'];
                $dest=$row['logo'];
                
                echo "<tr><td>";
                echo $id;
                echo "</td><td>";
                echo $langname;
                echo "</td><td>";
                echo $year;
                echo "</td><td>";
                echo $desc;
                echo "</td><td>";
                echo "";
                echo "<img src='$dest' width='100'>";
                // echo "</td><td>";
                // echo $desc;
                echo "</td><tr>";
            }
            echo "</table>";
        }

    ?>
</body>
</html>
