<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user define function</title>
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>
                    <input type="text"  name="uname" id="un" placeholder="Enter name">
                </td>
            </tr>
           <tr>
                <td>
                    <input type="password"name="pass"  id="pd">
                </td>

            </tr>
            <tr>
                <td>
                    <input type="SUBMIT" name="submit" value="SUBMIT" >
                </td>
            </tr>
        </table>

        <?php
           
           $user=array("bhavesh","naeem","faisal");
           $passw=array(9889,8745,34556);

           function check()
           {
               echo'<script>alert("...");</script>';
               
              

           }

           if(array_key_exists('submit',$_POST))
           {
               check();
           }
           else
           {
               echo "not found";
           }
         ?>
    </form>
</body>
</html>