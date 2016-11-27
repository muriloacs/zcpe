<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 22:46
 *
 * COMPARISON OPERATORS:
 *
 * EQUALITY ( == )
 * INEQUALITY ( != )
 * PHP HANDLES DATA TYPE CONVERSION "123" == 123
 * ( === )
 * ( !== )
 * PHP CHECKS THE DATA TYPE "123" !== 123
 * GREATER THAN (>)
 * LESS THAN (<)
 * GREATER OR EQUAL (>=)
 * LESS THAN OR EQUAL (<=)
 */

var_dump(1 == 1); // true
var_dump(1 != 1); // false
var_dump(1 == "1"); // true
var_dump(1 === "1"); // false
var_dump(1 != "1"); // false
var_dump(1 !== "1"); // true
var_dump(1 > 2); // false
var_dump(1 < 2); // true
var_dump(1 >= 1); // true
var_dump(1 <= 1); // true
