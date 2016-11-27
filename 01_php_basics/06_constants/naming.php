<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 14:01
 *
 * NAMING:
 *
 * START WITH A LETTER OR UNDERSCORE, ARE CASE SENSITIVE, CONTAIN ONLY
 * ALPHANUMERIC CHARACTERS AND UNDERSCORES
 * BY CONVENTION USE ONLY UPPERCASE LETTERS
 */

// NAMING
define("1CONST", 1); // invalid
define("_2CONST", 3.14); // valid
define("CONST3_", true); // valid
define("CONST_4", "4"); // valid
var_dump(_2CONST, CONST3_, CONST_4);

// CASE SENSITIVE
var_dump(const_4); // PHP Notice:  Use of undefined constant const_4 - assumed 'const_4'

// CASE INSENSITIVE
define("CONST_5", "5", true); // valid
var_dump(const_5);
