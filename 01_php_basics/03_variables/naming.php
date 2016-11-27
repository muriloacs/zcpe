<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:35
 *
 * NAMING:
 *
 * START WITH A " $ "
 * CONTAINS LETTERS, NUMBERS, AND UNDERSCORES
 * BY CONVENTION, START WITH LOWER CASE
 * CASE-SENSITIVE
 *
 */

// must start with either a letter or underscore
$foo = "foo";
$_foo = "foo";

// may contain letter, number or underscore
$bar_1 = "bar";

// they are case-sensitive
var_dump(isset($Foo)); // outputs false
