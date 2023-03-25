<?php

// All students grades
$grades = array(10,12,8,19,3,16,11,13,9);

// Pass Mark & grades printing grades function
function ShowPassMarkFromArray($list) {
    $total = 0;
    foreach ($list as $grade) {
        $total += $grade;
    }
    $total = $total / count($list);
    return "<br>Moyenne : ".number_format($total, 2,".","");
}

function ShowGradesMessageFromGrades($grades) {
    $text = "Students have obtained these grades :";
    echo "<br>";
    foreach ($grades as $number) {
        $text = $text." <br>- ".$number;
    }
    return $text;
}

// Printing Grades & Pass Mark
echo ShowGradesMessageFromGrades($grades);

// Spacing
echo "<br>";

echo ShowPassMarkFromArray($grades);