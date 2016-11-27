<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:44
 *
 * REFERENCING:
 *
 * VARIABLES CAN BE ASSIGNED BY VALUE OR BY REFERENCE
 * ATTACH AN "&" TO THE BEGINNING OF THE VARIABLE BEING ASSIGNED.
 *
 */

// BY VALUE
$a = 1;
$b = $a;
$b = 2;
echo $b; // outputs 2
echo PHP_EOL;
echo $a; // outputs 1
echo PHP_EOL;

// BY REFERENCE
$a = 1;
$b = &$a;
$b = 2;
echo $b; // outputs 2
echo PHP_EOL;
echo $a; // outputs 2
echo PHP_EOL;
