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
include "shesna/ShesnaException.php";

ini_set("display_errors", 1);
error_reporting(-1);

$a = new Sqrt();
try {
    echo "Введите 3 аргумента-" . "\n";
    $valuesa = readline();
    $valuesb = readline();
    $valuesc = readline();

    MyLog::log("Введено уравнение" . $valuesa . "x^2+" . $valuesb . "x+ " . $valuesc);
    $x = $a->solve($valuesa, $valuesb, $valuesc);
    $str = implode(",", $x);
    MyLog::log("Корни уравнения" . $str);
} catch (ShesnaException $e) {
    MyLog::log($e->getMessage());
}
MyLog::write();
?>

