<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv file</title>
</head>
<body>
     <form method="POST">
                    <label>Question</label>
                     <input type="text" name="que" size="100"><br><br>
               
                     <label>Option A</label>
                     <input type="text" name="o1">&nbsp;&nbsp;&nbsp;&nbsp;
                     <label>Option B</label>                
                     <input type="text" name="o2">&nbsp;&nbsp;&nbsp;&nbsp;
                     <label>Option C</label>
                     <input type="text" name="o3">&nbsp;&nbsp;&nbsp;&nbsp;
                     <label>Option D</label>
                     <input type="text" name="o4">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
              
                     <input type="submit" value="Add-Question" name="add">
               
    </form>
    <br><br>
             <form method="POST">
                 <input type="submit" value="Rwtrive ALL" name="r">
             </form>
    <?php 
      if(isset($_POST['add']))
      {
          $f=fopen("Question.csv","w");
          $f=fopen("Question.csv","a");
          if($f==false)
          {
              die("unable to craet");
          }
          $headings=['Quiention','option A','option B','option C','option D'];
          $data=[$_POST['que'],$_POST['o1'],$_POST['o2'],$_POST['o3'],$_POST['o4']];
          fputcsv($f,$headings);
          fputcsv($f,$data);
          echo"<script>alert('added sucessfully)</script>";
          fclose($f);
      }
     /*  
       if(isset($_POST['r']))
      {
          $f1=fopen("myque2.csv","r");
          if($f1==false)
          {
              die('file connot be oppened');
          }
          echo"<form method ='POST'>";
          echo"<table border='1' colspacing='0'>";
          $rowcount=0;
          while(($row=fgetcsv($f1))!==false)
          {
              echo"<tr>";
              $columncount=0;
              foreach($row as $r)
              {
                  echo"<td>".$r;
                    if($rowcount!==0 && $columncount!==0)
                    {
                        echo"<input type='radio' name=".$rowcount." value=".$r.">";
                    }
                    echo"</td>";
                    $columncount++;
              }
              echo"</tr>";
              $rowcount++;
          }
          echo"<table>";
          echo"</form>";
          echo"<input type='submit' name='sa'>"
      }  */
    ?>    
</body>
</html>