<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 21:52
 *
 * BITWISE OPERATORS:
 *
 * USE TO WORK WITH BITS WITHIN AN INTEGER; ARITHMETIC.
 * INTEGRAL NUMBERS ARE INTERNALLY CONVERTED INTO BITS.
 *
 */

$x = 1;

echo $x << 1;
echo PHP_EOL;
// 0001 << 1
// 0010
// outputs 2

echo $x << 2;
echo PHP_EOL;
// 0001 << 2
// 0100
// outputs 4


$x = 8;

echo $x >> 1;
echo PHP_EOL;
// 1000 >> 1
// 0100
// outputs 4

echo $x >> 2;
echo PHP_EOL;
// 1000 >> 2
// 0010
// outputs 2


$x = 0;

echo ~$x;
echo PHP_EOL;
// outputs -1
