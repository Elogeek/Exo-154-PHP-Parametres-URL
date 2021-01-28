<?php

if(!isset($_GET['iteration'])) {
    header('Location: index.php?error=1');
}

$iteration = htmlentities($_GET['iteration']);
$iteration = intval($_GET['iteration']);
if($iteration <= 20) {
    $iteration = 1000;
}
elseif($iteration <= 0) {
    $iteration = 1;
}

for($i = 0; $i < $iteration; $i++) {
    echo "<a href=''>Hello world, valeur de \$i:$i </a><br>";
}