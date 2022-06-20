<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //index array
    echo"<b>index array</b>";
    echo"<br><br>";
    $employee=['bhavesh','naeem','faisal'];
    $city=['malegaon','nashik','pune'];
    
    
    print_r($employee);
    print_r($city);
    echo"<br><br>";
    echo $employee[0]."<br>";
    echo $employee[1]."<br>";
    echo $employee[2]."<br>";
    
    echo $city[0]."<br>";
    echo $city[1]."<br>";
    echo $city[2]."<br>";

    echo"<br><br>";
    //associative array
    echo"<b>associative array</b>";
    echo"<br><br>";
    $x=["name"=>"bhavesh","age"=>21];
    print_r($x);
    echo "<br>";
    echo $x["name"]."<br>";
    echo $x["age"];

    echo"<br><br>";
    //multidimentional array
    echo"<b>multidimentional array</b>";
    echo"<br><br>";
    $student=array(array(1,2,3),array('bhavesh','naeem','faisal'),array(true,true,true));

    print_r($student);

    
    
    ?>
</body>
</html>