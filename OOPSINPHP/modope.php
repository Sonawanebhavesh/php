<html>
<body>
    <form  method="POST">
        Enter First number
        <br><input type="text" name="a">
        <br>
        Enter Second number
        <br><input type="text" name="b">
            <br>
            <br>
            <br>
            <br>Select any one of the following operations
            <br>
            <br><input type="radio" name="c" value="1">Find mod of two numbers
            <br><input type="radio" name="c" value="2">Find power of first number raised to second 
            <br><input type="radio" name="c" value="3">Find sum of first n numbers(Considering first number as n) 
            <br><input type="radio" name="c" value="4">Find factorial of second number
            <br>
        <br><input type="Submit" value="show result">
        <input type="reset" value="clear">  
    </form>
    <?php
    $int1=$_POST['a'];
    $int2=$_POST['b'];
    $ch=$_POST['c'];

    function ModeOperation($a,$b)
    {
        return fmod($a,$b);
    }
    function Power($a,$b)
    {
        $sum=1;
        $t=$b;
        while($t>0)
        {
            $sum=$sum*$a;
            $t--;
        }
        echo"$a raised to the power $b=$sum\n";
        

    }
    function sum($a)
    {
        $sum=0;
        for($x=1;$x<=$a;$x++)
        $sum=$sum+$a;
        return $sum;
    }
    function Fact($a)
    {
        $factorial=1;
        for($x=$a;$x>=$a;$x--)
        $fctorial=$factorial*$x;
        return $factorial;
    }
    if($ch==1)
    {
        echo $in1."modulo".$in2."=".ModOperation($in1,$in2);
    }
    if($ch==2)
    {
        echo Power($in1,$in2);
    }
    if($ch==3)
    {
        echo sum($in1);
    }
    if($ch==4)
    {
        echo"Factorial of second number".Fact($int2);
    }
?>
</body>
</body>
</html>
