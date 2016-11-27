<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:05
 *
 * ARRAY OPERATORS:
 *
 * + UNION
 * == EQUAL
 * === IDENTICAL
 * != NOT EQUAL
 * <> NOT EQUAL
 * !== NOT IDENTICAL
 *
 */

$a = [1, "2", 3];
$b = [1, 2, 3];
$c = [1, "2", 3];

var_dump($a + $b); // UNION: outputs [1, "2", 3]

var_dump($a == $b); // EQUAL: outputs true
var_dump($a == $c); // EQUAL: outputs true

var_dump($a === $b); // IDENTICAL: outputs false
var_dump($a === $c); // IDENTICAL: outputs true

var_dump($a != $b); // NOT EQUAL: outputs false
var_dump($a != $c); // NOT EQUAL: outputs false

var_dump($a <> $b); // NOT EQUAL: outputs false
var_dump($a <> $c); // NOT EQUAL: outputs false

var_dump($a !== $b); // NOT IDENTICAL: outputs true
var_dump($a !== $c); // NOT IDENTICAL: outputs false
