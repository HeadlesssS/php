
<?php

function read(){
    $myfile=fopen("MOCK_DATA.csv","r+") or die("file not loaded!!!!");


    echo"<table border='2' cellpadding='5' >";
    while(($row=fgetcsv($myfile))!==false){
        echo "<tr>";
        foreach ($row as $data){
            echo"<td>".htmlspecialchars($data). "</td>";
    }
        echo "</tr>";
    }
    
    echo"</table>";

    fclose($myfile);


}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data handling</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <div name="tableData" id="tableData">
        <p>
            <?php 
            read();
            ?>
        </p>
    </div>
    <body>

        
        <script src="" async defer></script>
    </body>
</html>
