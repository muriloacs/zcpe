<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:13
 *
 * LOGICAL OPERATORS:
 *
 * 'and' / '&&': true if both left and right operands are true.
 * 'OR' / '||': true if either left side or right side are true.
 * 'XOR': true if either left side or right side are true, but not both.
 * '!': not.
 *
 */

var_dump(true and true); // outputs: true
var_dump(true and false); // outputs: false
var_dump(true && true); // outputs: true
var_dump(true && false); // outputs: false

var_dump(true or false); // outputs: true
var_dump(true or true); // outputs: true
var_dump(false or false); // outputs: false
var_dump(true || false); // outputs: true
var_dump(true || true); // outputs: true
var_dump(false || false); // outputs: false

var_dump(false xor false); // outputs: false
var_dump(true xor true); // outputs: false
var_dump(true xor false); // outputs: true

var_dump(!true); // outputs: false
var_dump(!false); // outputs: true
