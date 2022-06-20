<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for each in php</title>
</head>
<body>

    <?php
        $marks=array(22,56,77,88,99,67,45,687,83,85,67,56,65,67);
        $cars=array("hundai"=>101,"kia"=>73,"nissan"=>67,"honda"=>67);
        $temp=array(23,45,56,87,32,25,34,54,23,24,43,56);
        $city=array("America"=>"New York","India"=>"New Dehli","Japan"=>"Tokyo","Russia"=>"Moscow");
        
        /*  print_r(array_change_key_case($cars,CASE_UPPER));
         echo"<br>";

         print_r(array_chunk($temp,2));
         foreach(array_chunk($temp,2) as $p)
         {
             echo"<br>";
             print_r($p);
         } */


     print_r(array_chunk($city,2,true));

       foreach(array_chunk($city,2,true) as $z)
       {
           echo"<br>";
           print_r($z);
       }
            

      /*  foreach(array_chunk($marks,2) as $a)
        {
            foreach(array_chunk($a,2) as $b)
            {
                if(is_array($b))
                {
                    print_r($b);
                    echo"<br>";
                }
                else
                {
                    echo"no array";
                }
            }
        }  */
    ?>
    
</body>
</html>