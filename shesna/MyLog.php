<?php
namespace shesna;
use core\LogInterface;
use core\LogAbstract;
class MyLog extends LogAbstract implements LogInterface
{
    public function __log($str)
    {
        $this->log[] = $str;
    }
    public static function log($str)
    {
        self::Instance()->__log($str);
    }

    public static function write()
    {
        MyLog::Instance()->_write();
    }

    public function _write()
    {
        for($i=0;$i<sizeof($this->log);$i++){
            echo $this->log[$i]."\n";
        }
    }
}

?>
