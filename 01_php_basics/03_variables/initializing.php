<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:54
 *
 * INITIALIZING:
 *
 * VARIABLES HAVE THEIR TYPE SET BY DEFAULT, IF NOT INITIALIZED (WHICH IS OPTIONAL).
 * NOT INITIALIZING VARIABLES CAN POTENTIALLY LEAD TO REPETITIVE VARIABLE NAMES (AND COLLISIONS) WHEN WORKING WITH MULTIPLE FILES.
 * isset () IS USED TO DETERMINE WHETHER A VARIABLE HAS BEEN INITIALIZED.
 *
 */

// the type is set by default
$a = 100; // int
$b = "bar"; // string
$c = 1.99; // float
var_dump($a, $b, $c);

// isset function
var_dump(isset($a)); // outputs: true
var_dump(isset($d)); // outputs: false
