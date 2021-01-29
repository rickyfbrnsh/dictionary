<?php

namespace Ricky\Dictionary;

class Sunda {
    public static function translate($word)
    {
        switch ($word) {
            case 'satu':
                return 'hiji';
            case 'dua':
                return 'dua';
            case 'tiga':
                return 'tilu';
            default :
                return 'teu acan aya';
        }
    }
}
