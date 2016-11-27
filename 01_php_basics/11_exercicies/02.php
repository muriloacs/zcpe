<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 17:52
 */

/*
 * WHEN PHP IS RUNNING ON A COMMAND LINE, WHAT SUPER-GLOBAL WILL
 * CONTAIN THE COMMAND LINE ARGUMENTS SPECIFIED?
 *
 * A: $_SERVER
 * B: $_ENV
 * C: $GLOBALS
 * D: $_POST
 * E: $_ARGV
 */

// You must execute this script like this: php 02.php var1 var2
var_dump($_SERVER['argv']); // OK
var_dump($_ENV); // empty
var_dump($GLOBALS['argv']); // OK
var_dump($_POST); // empty
var_dump($_ARGV); // does not exist

/*
 * A: $_SERVER
 * C: $GLOBALS
 *
 * Both $_SERVER and $GLOBALS contain the command line arguments under the key 'argv'.
 *
 */
