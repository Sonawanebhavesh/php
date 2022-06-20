<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and objects in php</title>
</head>
<body>
<input type="text" name="uname" required>
    <input type="email" name="email" required>
    <input type="submit" value="STORE" name="sub">

    <input type="submit" value="DISPLAY" name="display">
       
     <?php
        class contry
        {
            public $cname,$continent,$capital;
            
            public function readdata($nm,$cnt,$c)
            {
                $this->cname=$nm;
                $this->continent=$cnt;
                $this->capital=$c;
            }

            public function getdata()
            {
                echo"<br>".$this->cname;
                echo"<br>".$this->continent;
                echo"<br>".$this->capital;
            }


        }

        $obj1=new contry();
        $obj1->readdata("INDIA","ASIA","NEW_DEHLI");
        //echo"<br>";
        $obj2=new contry();
        $obj2->readdata("AMERICA","NORTH-AMERICA","WANSHINGTON");

  
        $obj1->getdata();
        $obj2->getdata();
     ?>
</body>
</html>