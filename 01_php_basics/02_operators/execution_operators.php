<?php
/**
 * Created by PhpStorm.
 * User: murilo
 * Date: 19/11/16
 * Time: 23:27
 *
 * EXECUTION OPERATORS:
 *
 * USE BACKTICKS `` TO EXECUTE THE CONTENTS ENCLOSED BY THEM AS A
 * SHELL COMMAND, EQUIVALENT TO shell_exec()
 */

// USING BACKTICKS
echo `ls .`;
echo PHP_EOL;

// USING shell_exec FUNCTION
echo shell_exec("ls .");
echo PHP_EOL;
