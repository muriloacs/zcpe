<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 01:02
 *
 * EVALUATION CONSTRUCTS:
 *
 * empty ()
 * USED TO ASSESS WHETHER A VARIABLE (ONLY) IS EMPTY (EMPTY
 * STRING, EMPTY ARRAY, 0, 0.0, “0”, NULL, FALSE, A VARIABLE WITHOUT
 * AN ASSIGNED VALUE)
 *
 * eval ()
 * USED TO EVALUATE THE CONTENTS OF A STRING AS PHP CODE
 *
 * include AND include_once
 * USED TO BOTH INCLUDE AND EVALUATE A FILE
 *
 * require AND require_once
 * THESE CONSTRUCTS ARE SIMILAR TO include_once AND include
 * EXCEPT THAT A FAILURE IN EXECUTION RESULTS IN A FATAL ERROR, WHILE
 * include GENERATES A WARNING
 *
 */

// INCLUDE
include_once 'files/file_to_be_included.php';

// REQUIRE
require_once 'files/file_to_be_required.php';

// EMPTY
var_dump(empty(0)); // true
var_dump(empty("0")); // true
var_dump(empty(0.0)); // true
var_dump(empty("0.0")); // false
var_dump(empty(false)); // true
var_dump(empty(null)); // true
var_dump(empty($a)); // true

// EVAL
eval('$a = 1 + 1;');
var_dump($a); // int(2)

// INCLUDE FAILED
include_once 'file_does_not_exist.php'; // PHP Warning

// REQUIRE FAILED
require_once 'file_does_not_exist.php'; // PHP Fatal error
