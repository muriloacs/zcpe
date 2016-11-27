<?php
require_once 'files/exercice_03.php';

/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 18:05
 */

/*
 * WHAT IS THE OUTPUT OF THE FOLLOWING SCRIPT?
 *
 * A: 1,2,3,4,5,6,7,8,9
 * B: 1,2,3,4,5,6,7,8,9,10,
 * C: 1,2,3,5,8,13,21,34,55,89,
 * D: 1,1,1,1,1,1,1,1,1,1,
 */

function fibonacci ($x1, $x2)
{
    return $x1 + $x2;
}

$x1 = 0;
$x2 = 1;

for ($i=0; $i<10; $i++)
{
    echo fibonacci($x1, $x2) . ',';
}

/*
 * D: 1,1,1,1,1,1,1,1,1,1
 *
 * The values of variables x1 and x2 never change.
 *
 */
