<?php

namespace timofeev;

use core\LogAbstract;
use core\LogInterface;


class MyLog extends LogAbstract implements LogInterface
{

    public static function log(string $str): void
    {
        LogAbstract::Instance()->_log($str);
    }


    public static function write(): void
    {
        LogAbstract::Instance()->_write();
    }

    public function _write()
    {
        foreach (LogAbstract::Instance()->log as $value) {
            echo $value;
        }
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/'))
        {
            mkdir("./Log/");
        }
        file_put_contents($file, $this->log);

    }
    public function _log($str)
    {
        $this->log[] = $str;
    }
}
