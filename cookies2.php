<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies 2</title>
</head>
<body>

<?php
print_r($_COOKIE);

setcookie("username","");
setcookie("eduacation","");
setcookie("age","");
setcookie("eduacation","",time()-(2*86400));

?>
    
</body>
</html>