<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 00:27
 *
 * LOOPS:
 *
 * WHILE
 * EXECUTES STATEMENT UNTIL CONDITION IS NO LONGER EVALUATED AS BOOLEAN TRUE;
 * CONDITION EVALUATED AT BEGINNING.
 *
 * DO - WHILE
 * EXECUTES STATEMENT UNTIL CONDITION IS NO LONGER EVALUATED AS BOOLEAN TRUE;
 * CONDITION EVALUATED AT END.
 *
 * FOR
 * EXECUTES FIRST STATEMENT ONE TIME AS AN ASSIGNMENT, THE SECOND STATEMENT AS A
 * LOOPING CONDITION CHECKED AT THE
 * BEGINNING OF THE FIRST AND SUBSEQUENT ITERATIONS UNTIL
 * CONDITION IS NO LONGER
 * EVALUATED AS BOOLEAN TRUE, THEN EXECUTES THE THIRD AND FINAL
 * STATEMENT AT THE END OF EACH ITERATION
 *
 * FOREACH
 * USED ONLY FOR ARRAYS; ASSIGNS VALUE OF CURRENT ELEMENT TO THE
 * VARIABLE AND ADVANCES THE ARRAY POINTER UNTIL IT REACHES THE
 * LAST ELEMENT
 *
 * CONTINUE
 * WITHIN LOOPS, USED TO PASS OVER ANY REMAINING CODE WITHIN THE
 * ITERATION AND RETURN TO THE INITIAL CONDITION EVALUATION STEP
 *
 * BREAK
 * HALTS EXECUTION OF LOOPS UTILIZING THE FOR, FOREACH, WHILE,
 * DO-WHILE, SWITCH CONTROL STRUCTURES
 *
 */

$a = [1, 2, 3];
$i = 0;
$count = count($a);

// WHILE
while (isset($a[$i])) {
    echo $a[$i] . PHP_EOL;
    $i++;
    // output:
    // 1
    // 2
    // 3
}

// DO - WHILE
do {
    $random = rand(0, 9);
    echo 'Trying to find 7!' . PHP_EOL;
    // output:
    // 'Trying to find 7!' until find 7
}
while ($random != 7);

// FOR
for ($i = 0; $i < $count; $i++) {
    echo $a[$i] . PHP_EOL;
    // output:
    // 1
    // 2
    // 3
}

// FOREACH
foreach ($a as $value) {
    echo $value . PHP_EOL;
    // output:
    // 1
    // 2
    // 3
}

foreach ($a as $key=>$value) {
    echo "key: $key, value: $value" . PHP_EOL;
    // output:
    // key: 0, value: 1
    // key: 1, value: 2
    // key: 2, value: 3
}

// CONTINUE
foreach ($a as $value) {
    if ($value == 2) {
        continue;
    }
    echo $value . PHP_EOL;
    // output:
    // 1
    // 3
}

// BREAK
foreach ($a as $value) {
    if ($value == 2) {
        break;
    }
    echo $value . PHP_EOL;
    // output:
    // 1
}
