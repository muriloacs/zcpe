<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 20/11/16
 * Time: 15:33
 *
 * DEFINITION:
 *
 * NAMESPACES ARE A METHOD OF GROUPING RELATED PHP CODE ELEMENTS
 * WITHIN A LIBRARY OR APPLICATION
 *
 * USE:
 *
 * HELPS TO PREVENT ACCIDENTALLY RE-DEFINING FUNCTIONS, CLASSES,CONSTANTS, ...
 * AVOIDS HAVING TO USE LONG, HIGHLY DESCRIPTIVE CLASS NAMES
 * CONSTANTS, CLASSES, AND FUNCTIONS ARE AFFECTED BY THE USE OF NAMESPACES
 * CREATE SUB-NAMESPACES TO SUB-DIVIDE A LIBRARY
 *
 * DECLARING NAMESPACES:
 *
 * MUST DECLARE THE USE OF NAMESPACES WITH THE KEYWORD "namespace" AT
 * THE BEGINNING OF THE CODE FILE (RIGHT AFTER <?PHP )
 * USE ONE NAMESPACE PER CODE FILE (BEST PRACTICE)
 * UNLESS A NAMESPACE IS DEFINED, CLASSES AND FUNCTIONS ARE CONTAINED
 * WITHIN THE GLOBAL SPACE
 * PREPEND "\" TO INDICATE USE OF AN ELEMENT FROM GLOBAL SCOPE
 * ONCE CODE ELEMENTS WITHIN A SINGLE NAMESPACE ARE DEFINED, THEY CAN
 * BE USED IN OTHER PHP FILES
 *
 */

// DECLARING A NAMESPACE
namespace zcpe\php_basics\namespaces; // In this example: project\level\sublevel

class MyClass
{
    public function __construct()
    {
        echo 'Hello World!' . PHP_EOL;
    }
}