<?php
use shesna\ShesnaException;
use shesna\Sqrt;
use shesna\MyLog;

include "core/EquationInterface.php";
include "core/LogInterface.php";
include "core/LogAbstract.php";
include "shesna/MyLog.php";
include "shesna/Line.php";
include "shesna/Sqrt.php";


ini_set("display_errors", 1);
error_reporting(-1);

$a = MyLog::Instance();
$b = MyLog::Instance();

$a->log('1');
$a->log('2');
$a->log('3');
$a->log('4');
$b->write();
?>

