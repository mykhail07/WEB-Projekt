<?php

$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;

if ($test1 < 0 || $test1 > 100 || $test2 < 0 || $test2 > 100 || $test3 < 0 || $test3 > 100) {
    echo "Neplatné bodové hodnocení!";
} else {

    $totalPoints = $test1 + $test2 + $test3;
    $average = $totalPoints / 3;
    $percentage = ($totalPoints / 300) * 100;

    if ($percentage >= 90) {
        $grade = 1;
        $wordGrade = "výborný";
    } elseif ($percentage >= 75) {
        $grade = 2;
        $wordGrade = "chvalitebný";
    } elseif ($percentage >= 60) {
        $grade = 3;
        $wordGrade = "dobrý";
    } elseif ($percentage >= 40) {
        $grade = 4;
        $wordGrade = "dostatečný";
    } else {
        $grade = 5;
        $wordGrade = "nedostatečný";
    }

    echo "<h1>Hodnocení studenta</h1>";
    echo "Jméno studenta: $studentName <br>";
    echo "1. test: $test1 bodů <br>";
    echo "2. test: $test2 bodů <br>";
    echo "3. test: $test3 bodů <br>";
    echo "Celkový počet bodů: $totalPoints <br>";
    echo "Průměrný počet bodů: $average <br>";
    echo "Procentuální úspěšnost: $percentage % <br>";
    echo "Výsledná známka: $grade <br>";
    echo "Slovní hodnocení: $wordGrade <br>";

    if ($grade == 5) {
        echo "Bonusové úkoly";
    }
}

?>