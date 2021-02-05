<?php
use shesna\ShesnaException;
use shesna\Sqrt;
use shesna\MyLog;

require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting(-1);
MyLog::log("Версия программы ".file_get_contents("./version"));
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

