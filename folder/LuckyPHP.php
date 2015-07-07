<?php

function NumberCheck($base_str, $find_str, $print_str)
{
    if(strpos($base_str, $find_str) === false){
        print($base_str);
    }
    else{
        print($print_str);
    }
     print("\n");
}

for($i=1; $i<=100; $i++){
    NumberCheck($i, "7", "Lucky!");
}

?>