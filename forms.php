<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms php</title>

    <script>
        function func()
        {
            var x=document.getElementById('un').value;
                            var rx=/^[ A-Z ]+[a-zA-Z0-9_@./#&+-]*$/;
                                if(x.length>=6 && x.length<=10)
                                {
                                    var t=rx.test(x);
                                    if(t==true)
                                    {
                                    document.getElementById('ns').innerHTML="valid";
                                    document.getElementById('ns').style.color="blue";
                                    }
                                    else
                                    {
                                    document.getElementById('ns').innerHTML="First later of username must be in Capital";
                                    document.getElementById('ns').style.color="red";
                                     }    
                                }
                                else
                                {
                                    document.getElementById('ns').innerHTML="Username Should be between 6-10 characters"
                                    document.getElementById('ns').style.color="red";
                                }
                                
                                
        }
    </script>
    
</head>
<body>
    <form method="POST">
    <table>
        <tr>
            <td>
                
                <input type="text" name="nm" id="n" placeholder="Enter Name" onkeyup="func();" >
             
            </td>
            <td>
        
                    <td>
                        <span id="ns">*</span>
                    </td>
        </tr>

        <tr>
             <td>
                 <input type="password" name="pass" id="p"> 
             </td>
          
       </tr>
       <tr>
             <td>
                    <b>Male</b>
                    <input type="radio" id="male" value="male" name="gender">
                    <b>Female</b>
                    <input type="radio" id="female" value="female" name="gender">
             </td> 
       </tr>
       <tr>
             <td>
                    <b>SSC</b>
                    <input type="checkbox" id="SSC" value="SSC" name="ch[]">
                    <b>HSC</b>
                    <input type="checkbox" id="SSC" value="HSC" name="ch[]">
                    <b>Graduate</b>
                    <input type="checkbox" id="SSC" value="Graduate" name="ch[]">
                    
            </td>
      </tr>
   <!--   <tr>
             <td>
                    <b>Select Your Facualty</b>
                    <select>
                        <option>Arts</option>
                        <option>commerce</option>
                        <option>Science</option>
                        <option>Engineering</option>
                    </select>
             </td>
    </tr>
    <tr>
             <td>
                    <b>Choose Your Course</b>
                    <select>
                        <option>B.A(Bechlor of Arts)</option>
                        <option>B.com(Bechlor of commerce)</option>
                        <option>B.B.A(Bechlor of bussiness Administrative)</option>
                        <option>B.Sc(Bechlor of science)</option>
                        <option>B.C.S(Bechlor of Computer Science)</option>
                        <option>B.C.A(Bechlor of Computer Aplication)</option>
                        <option>B.E(Bechlor of Engineering)</option>
                        <option>M.A(master of arts)</option>
                    </select>
                     
             </td>
    </tr>-->
    <tr>
        <td>
           <input type="submit" value="SUBMIT " name="btn1" id="s1" onclick="func();">
           <input type="button" value="CLEAR" name="btn2" id="s2">
  
        </td>

   </tr>
    </table>
    
    </form>
    
    <?php
     /* function myfunc($multi)
      {
          
          echo"this is function 1 mutiplication =".$multi*$multi;
          print_r($_GET);
      
      }

      function myfunc2($div1,$div2)
      {
        
         echo "this is my func 2 division = ".$div1/$div2;
         print_r($_GET);
      }
     
         if(isset($_GET['btn1']))
          {
                echo"SUBMIT 1 is clicked!"."&#160";
                myfunc(20);
            
          }
          else
            {
                    echo"SUBMIT 2 is clicked!"."&#160";
                    myfunc2(200,2);    
                
            }
      
     
     */
    ?>
    <?php
     

       if(isset($_POST['btn1']))
        {
         /*     $username=$_POST['nm'];
            $pass=$_POST['pass'];
            $check=$_POST['ch[]'];
            
            echo" ".$username;
            echo" ".$pass;
            
            foreach($check as $c);
            {
                echo" ".$c;
            }
           */ 


           foreach($_POST as $val)
           {
             if(is_array($val))
             {
                 foreach($val as $v)
                 {
                     echo" ".$v;
                 }

             }  
             else
             {
                
                 //echo"<br>";
                 //print_r($val);
                 //if($val="submit")
                  //echo" ";
                 //else
                 echo" ".$val;

             }     
           }
        
        }
           

    ?>
</body>
</html>