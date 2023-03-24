<?php

// All students grades
$grades = array(10,12,8,19,3,16,11,13,9);

// Pass Mark function
function GetPassMarkFromArray($list) {
    $total = 0;
    for ($i = 0, $i <= count($list)) {
        $total += $list[$i];
    }
    $total = $total / count($list);
    echo "Moyenne :".$total;
}

echo GetPassMarkFromArray($grades);