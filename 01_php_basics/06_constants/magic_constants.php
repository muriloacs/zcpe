<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 14:29
 *
 * "MAGIC" CONSTANTS (__XXX__)
 *
 * PHP PROVIDES A SET OF PREDEFINED CONSTANTS DEFINED BY THE PHP CORE
 * (EX: E_ERROR;TRUE)
 * SEVERAL OF THESE CAN CHANGE, DEPENDING UPON WHERE THEY ARE USED
 * THEREFORE, NOT TRUE CONSTANTS (EX: DIR; NAMESPACE)
 *
 */

var_dump(__DIR__);
var_dump(__FILE__);
var_dump(__LINE__);

trait sampleTrait
{
    public function sampleMethodTrait()
    {
        var_dump(__TRAIT__); // outputs: sampleTrait
    }
}

class SampleClass
{
    use sampleTrait;

    public function __construct()
    {
        var_dump(__CLASS__); // outputs: SampleClass
    }

    public function sampleMethod()
    {
        var_dump(__METHOD__); // outputs: SampleClass::sampleMethod
    }
}

function sampleFunction()
{
    var_dump(__FUNCTION__); // outputs: sampleFunction
}

$sample = new SampleClass();
$sample->sampleMethod();
$sample->sampleMethodTrait();
sampleFunction();
