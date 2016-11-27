<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 00:08
 *
 * CONDITIONS:
 *
 * IF
 * EVALUATES FOR A CONDITION (BOOLEAN VALUE), TO DETERMINE WHETHER TO EXECUTE CODE; CAN BE NESTED.
 *
 * ELSE
 * PROVIDES ALTERNATIVE EXECUTION, WHEN COMBINED WITH IF (=FALSE).
 *
 * ELSEIF ( ELSE IF )
 * PROVIDES ALTERNATIVE EXECUTION, WHEN COMBINED WITH IF (=FALSE), BUT ITS OWN CONDITION MUST BE MET
 * (FLOW: IF... ELSEIF ... ELSE)
 *
 * IF - ELSE (TERNARY OPERATOR)
 * SPECIAL FORM: (EXPRESSION) ? VALUEIFTRUE : VALUEIFFALSE
 *
 * TERNARY OPERATOR
 * SHORT FORM (VALUEIFTRUE) ?: VALUEIFFALSE
 *
 * SWITCH
 * USE TO EVALUATE (BOOLEAN VALUE) AGAINST A SERIES OF CONDITIONS, TO DETERMINE WHICH CODE TO EXECUTE FOR EACH CONDITION
 *
 */

$a = true;
$name = 'John';

// IF
if ($a) {
    echo 'Hello!' . PHP_EOL;
}

// ELSE
if (!$a) {
    echo 'Hello!' . PHP_EOL;
} else {
    echo 'Hello again!' . PHP_EOL;
}

// ELSEIF
if (!$a) {
    echo 'Hello!' . PHP_EOL;
} elseif (!isset($a)) {
    echo 'Hello again!' . PHP_EOL;
} else {
    echo 'Hello one more time!' . PHP_EOL;
}

// TERNARY OPERATOR
echo isset($a) ? 'Hello once again!' . PHP_EOL : 'Hello!' . PHP_EOL;

// TERNARY OPERATOR (SHORT FORM)
echo isset($a) ?: 'Hello again and again!' . PHP_EOL;
// @TODO: verificar output "1"

// SWITCH
switch ($name) {
    case 'William':
        echo 'Hello!' . PHP_EOL;
        break;
    case 'Michael':
        echo 'Hello!' . PHP_EOL;
        break;
    case 'John':
        echo 'Hello for the last time!' . PHP_EOL;
        break;
    default:
        echo 'Hello!' . PHP_EOL;
        break;
}
