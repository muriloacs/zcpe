<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 22:36
 *
 * ASSIGNMENT OPERATORS:
 *
 * ASSIGN ( = )
 * SHORT FORMS (COMBINED)
 * INCREASE / DECREASE ( ++ --)
 */

// ASSIGN
$a = 1;
$b = "foo";

// SHORT FORMS: ASSIGNMENT
echo $a += 1; // $a = $a + 1
echo PHP_EOL;
echo $a -= 1; // $a = $a - 1
echo PHP_EOL;
echo $a *= 1; // $a = $a * 1
echo PHP_EOL;
echo $a /= 1; // $a = $a / 1
echo PHP_EOL;

// SHORT FORMS: CONCATENATING
echo $b .= " bar"; // $b = $b . " bar"
echo PHP_EOL;

// SHORT FORMS: INCREASE/DECREASE
echo $a++; // INCREASE AFTER THE echo EXECUTION
echo PHP_EOL;
echo $a--; // DECREASE AFTER THE echo EXECUTION
echo PHP_EOL;
echo ++$a; // INCREASE BEFORE THE echo EXECUTION
echo PHP_EOL;
echo --$a; // DECREASE BEFORE THE echo EXECUTION
echo PHP_EOL;
