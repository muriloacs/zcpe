<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 14:14
 *
 * ACCESS:
 *
 * MAY BE DEFINED AND ACCESSED ANYWHERE IN A PROGRAM
 * MUST BE DEFINED BEFORE USE
 * CANNOT BE CHANGED SUBSEQUENTLY
 *
 */

// MAY BE DEFINED AND ACCESSED ANYWHERE IN A PROGRAM:
define('NAME', 'John');

# SCRIPT ACCESS
echo NAME . PHP_EOL;

# FUNCTION ACCESS
function echo_name() {
    echo NAME . PHP_EOL;
}
echo_name();

# CLASS ACCESS
class Sample {
    public $name = null;

    public function __construct()
    {
        $this->name = NAME;
    }
}
$sample = new Sample();
echo $sample->name . PHP_EOL;


// MUST BE DEFINED BEFORE USE
echo NOT_DEFINED_CONST . PHP_EOL; // PHP Notice:  Use of undefined constant NOT_DEFINED_CONST - assumed 'NOT_DEFINED_CONST'
define("NOT_DEFINED_CONST", true);


// CANNOT BE CHANGED SUBSEQUENTLY
define("MYCONST", true);
define("MYCONST", false); // PHP Notice:  Constant MYCONST already defined
var_dump(MYCONST); // outputs: true
