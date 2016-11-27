<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 01:29
 *
 * OTHER CONSTRUCTS:
 *
 * isset():
 * USE TO DETERMINE WHETHER A VARIABLE HAS BEEN SET (THEREFORE, IS NOT NULL)
 *
 * unset():
 * USE TO UNSET THE VARIABLE
 *
 * list ():
 * USE TO ASSIGN A GROUP OF VARIABLES IN ONE STEP
 *
 */

// ISSET
$a = null;
$b = false;
var_dump(isset($a)); // false
var_dump(isset($b)); // true
var_dump(isset($c)); // false

// UNSET
unset($b);
var_dump(isset($b)); // false

// LIST
$info = array('beer', 'golden', 'alcohol');
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special" . PHP_EOL;
