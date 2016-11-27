<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 13:45
 *
 * DEFINITION:
 *
 * IDENTIFIER FOR A VALUE THAT DOES NOT CHANGE ONCE DEFINED (IMMUTABLE VALUES).
 *
 * THEY CAN ONLY CONTAIN SCALAR VALUES (INT, FLOAT, BOOLEAN, STRING) OR ARRAYS.
 *
 */

// @TODO: verificar const de array no php5.5

// DEFINING DIFFERENT TYPES OF CONSTANTS.
define("ONE", 1);
define("PI", 3.14);
define("BOOL_TRUE", true);
define("LANGUAGE", "PHP");
define("NOT_SCALAR_ONE", array(1, 2));
define("NOT_SCALAR_TWO", new stdClass()); // PHP Warning: Constants may only evaluate to scalar values or arrays
var_dump(ONE, PI, BOOL_TRUE, LANGUAGE, NOT_SCALAR_ONE, NOT_SCALAR_TWO);

// Use of undefined constant THIS_CONST_WAS_NOT_SET - assumed 'THIS_CONST_WAS_NOT_SET'
var_dump(THIS_CONST_WAS_NOT_SET);
