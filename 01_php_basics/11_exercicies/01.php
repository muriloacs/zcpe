<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 17:46
 */

/*
 * WHAT IS THE OUTPUT OF THE FOLLOWING CODE:
 *
 * A: 4
 * B: 3
 * C: 5
 * D: 0
 * E: 1
 */

$a = 1;
++$a;
$a *= $a;
echo $a--;

/*
 * A: 4
 *
 * Important: echo $a--; The operator (--) is placed after its operand ($a), the interpreter
 * will first return the value, and then decrement it by one.
 *
 */
