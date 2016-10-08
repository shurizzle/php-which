<?php

namespace Shura\Which;

class Path
{
    const SEPARATOR = PATH_SEPARATOR;
    const VARIABLE = PATH_SEPARATOR === ';' ? 'Path' : 'PATH';

    public static function get()
    {
        return preg_split('/\s*'.preg_quote(self::SEPARATOR).'+\s*/', getenv(self::VARIABLE), -1, PREG_SPLIT_NO_EMPTY);
    }
}
