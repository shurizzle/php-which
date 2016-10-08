<?php

namespace Shura\Which;

class Which
{
    public static function which($bin)
    {
        foreach (Path::get() as $path) {
            $t = $path.DIRECTORY_SEPARATOR.$bin;
            if (file_exists($t) && is_executable($t)) {
                return $t;
            }
        }
    }

    public static function whichAll($bin)
    {
        $res = [];

        foreach (Path::get() as $path) {
            $t = $path.DIRECTORY_SEPARATOR.$bin;
            if (file_exists($t) && is_executable($t)) {
                $res [] = $t;
            }
        }

        return $res;
    }
}
