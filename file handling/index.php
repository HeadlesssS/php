
<?php

function read(){
    echo readfile("MOCK_DATA.csv");
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
