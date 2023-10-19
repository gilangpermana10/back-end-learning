<?php declare(strict_types=1);
function write_message($name){
    echo "Hello $name";
}

function addNumbers(int $a, int $b){
    return $a + $b;
}

function setHeight(int $minHeight = 50){
    echo "the height is : $minHeight";
}


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

// setHeight(30);
// setHeight();
// setHeight(599);



// echo addNumbers(10,15);

// write_message("gilang");
// write_message("permana");
// write_message("irsan");
?>