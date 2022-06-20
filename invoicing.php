<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing</title>
</head>
<body>
    

    <h1> The retrieved Data!</h1>
    <table border="1" cellspacing="0">
    <?php
    if(isset($_POST['show']))
    {
        $x=$_POST['s'];
        //echo $x;

        $file1=fopen("invoice.csv","r");
        if($file1===false)
        {
            echo "Unable to Open the File";
        }
        else
        {
            while(!feof($file1))
            {
                $row=fgetcsv($file1);
                //print_r($row);
                
                if($x===$row[0])
                {
                    
                    $custname=$row[0];
                    $_POST['custname']=$custname;
                    $prod=$row[1];
                    $price=$row[2];
                    $qty=$row[3];
                    $amt=$row[4];
                    
                    echo "<tr>";
                    echo "<th> Customer Name: </th>";
                    echo "<td>".$custname."</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo "<th> Product: </th>";
                    echo "<td>".$prod."</td>";
                    echo "</tr>";

                    
                    echo "<tr>";
                    echo "<th> Price </th>";
                    echo "<td>".$price."</td>";
                    echo "</tr>";

                    
                    echo "<tr>";
                    echo "<th> Qunatity: </th>";
                    echo "<td>".$qty."</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<th> Amount: </th>";
                    echo "<td>".$amt."</td>";
                    echo "</tr>";

                }
                else
                {
                    echo "";
                }
                
                //echo "<br>";
            }
            echo "</tr>";
        }

        //print_r($_POST);
    }


    
    ?>
    </table>

    <form method="POST" enctype="multipart/form-data">
        
        <select name="s" id="s">
            <option>Select Customer Name </option>

           
            <?php
            //Add array elements to the drop down
            $col = 0;
            $file = fopen("invoice.csv","r");
            $customer=array();
            while(!feof($file))
            {
                array_push($customer,fgetcsv($file)[$col]);
            }

            $i=0;
            //echo count($customer);
            while($i<count($customer))
            {
                echo "<option value=".$customer[$i].">".$customer[$i]."</option>";
                $i++;
            }

            print_r($customer);
            fclose($file);

            ?>

        </select>
        <input type="submit" value="SHOW" name="show">
    </form>



    
</body>
</html>