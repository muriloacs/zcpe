<?php
require_once 'files/exercice_03.php';

/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 18:05
 */

/*
 * WHICH PHP FUNCTIONS MAY BE USED TO FIND OUT WHICH PHP
 * EXTENSIONS ARE AVAILABLE IN THE SYSTEM? (CHOOSE 2)
 *
 * A: extension_loaded()
 * B: get_extension_funcs()
 * C: get_loaded_extensions()
 * D: phpinfo()
 */

var_dump(extension_loaded('curl')); // true, but refers to only one extension, in this case 'curl'.
var_dump(get_extension_funcs('curl')); // true, but refers to only one extension and its methods.
var_dump(get_loaded_extensions()); // OK, retrieves an array with all extensions loaded.
var_dump(phpinfo()); // OK, retrieves information from the php.ini

/*
 * C: get_loaded_extensions()
 * D: phpinfo()
 *
 */
