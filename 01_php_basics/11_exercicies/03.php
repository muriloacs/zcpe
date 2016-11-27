<?php
require_once 'files/exercice_03.php';

/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 18:05
 */

/*
 * FUNCTION world() IS DEFINED IN THE NAMESPACE 'myapp\utils\hello'.
 * YOUR CODE IS IN NAMESPACE 'myapp'.
 * WHAT IS THE CORRECT WAY TO IMPORT THE HELLO NAMESPACE SO YOU
 * CAN USE THE world() FUNCTION?
 *
 * A: use hello
 * B: use utils\hello
 * C: use myapp\utils\hello
 * D: use myapp\utils\hello\world;
 */

use myapp\utils\hello\world;

world();

/*
 * D: use myapp\utils\hello\world;
 *
 *
 *
 */
