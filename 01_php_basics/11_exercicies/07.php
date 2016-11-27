<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 16:31
 */


/*
 * WHAT WILL THE FOLLOWING CODE PRODUCE?
 *
 * A: One
 * B: Two
 * C: Syntax Error
 */

define('CONSTANT', 1);
define('_CONSTANT', 0);
define('EMPTY', '');

if ( !empty(EMPTY) )
{
    if ( !((boolean) _CONSTANT) )
    {
        print "One";
    }
    elseif ( constant('CONSTANT') == 1 )
    {
        print "Two";
    }
}

/*
 * C: Syntax Error
 *
 * Functions such as empty() and isset() are used to verify variables.
 * In order to verify constants it is used the constant() function instead.
 *
 */
