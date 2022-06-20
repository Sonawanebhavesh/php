<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Constatents</title>
</head>
<body>
    <?php
       class A
       {
           const p=25;
           const q=30;
           public $r;

           function __construct($t)
           {
                $this->r=$t;
           }

           function display()
           {
               echo"<br>";
               echo $this->r;
               echo self::p."<br>".self::q;
           }

       }

       $o1=new A(20);
       $obj1=new A(50);

       $o1->display();
       echo "\n";
       $obj1->display();

       echo A::p."\n";
       echo A::q;
    
    ?>    

</body>
</html>