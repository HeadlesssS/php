<?php

for ($i=1;$i<=5;$i++){
    for ($k=5;$k>$i;$k--){
        echo " ";
    }
    for ($j=1;$j<=$i;$j++){

        echo '* ';
    }
    echo "\n";

}


for ($i=1;$i<=4;$i++){


    for ($j=0;$j<$i;$j++){
        echo " ";
    }

    for ($k=4;$k>=$i;$k--){
        echo "* ";
    }
    echo "\n";
}

?>
