<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return multiple in php</title>
</head>
<body>
    <input type="text" name="uname" required>
    <input type="email" name="email" required>
    <input type="submit" value="STORE" name="sub">

    <input type="submit" value="DISPLAY" name="display">
  <?php
     session_start();
   class user
   {
    public $uname,$email;

    function setdata($u,$e)
    {
        $this->uname=$u;
        $this->email=$e;

        $_SESSION['u']=$this->uname;
        $_SESSION['e']=$this->email;
    }

    function getdata()
    {
        return array($_SESSION['u'],$_SESSION['e']);
        session_destroy();
    }
   
 }

$obj1=new user();

  if(isset($_POST['sub']))
  {
      $obj1->setdata($_POST['uname'],$_POST['email']);
  }

  if(isset($_POST['display']))
  {
       foreach($obj1->getdata() as $a)
       {
           echo"<br>".$a;
       }
  }

  ?>
</body>
</html>