<?php
/**
* Created by Gbenga Ogunbule.
* User: Gbenga Ogunbule
* Date: 02/04/2020
* Time: 10:22
*/
namespace Drwcli\Output;

class CliColors
{
    static $FG_BLACK = '0;30';
    static $FG_WHITE = '1;37';
    static $FG_RED = '0;31';
    static $FG_GREEN = '0;32';
    static $FG_BLUE = '1;34';
    static $FG_CYAN = '0;36';
    static $FG_MAGENTA = '0;35';

    static $BG_BLACK = '40';
    static $BG_RED = '41';
    static $BG_GREEN = '42';
    static $BG_BLUE = '44';
    static $BG_CYAN = '46';
    static $BG_WHITE = '47';
    static $BG_MAGENTA = '45';

    static $THEME_REGULAR = 1;
    static $THEME_UNICORN = 2;

    static function palette($name = 'regular')
    {
        $themes['regular'] = [
            'default'     => [ CliColors::$FG_WHITE ],
            'alt'         => [ CliColors::$FG_BLACK, CliColors::$BG_WHITE ],
            'error'       => [ CliColors::$FG_RED ],
            'error_alt'   => [ CliColors::$FG_WHITE, CliColors::$BG_RED ],
            'success'     => [ CliColors::$FG_GREEN ],
            'success_alt' => [ CliColors::$FG_WHITE, CliColors::$BG_GREEN ],
            'info'        => [ CliColors::$FG_CYAN],
            'info_alt'    => [ CliColors::$FG_WHITE, CliColors::$BG_CYAN ]
        ];

        $themes['unicorn'] = [
            'default'     => [ CliColors::$FG_CYAN ],
            'alt'         => [ CliColors::$FG_BLACK, CliColors::$BG_CYAN ],
            'error'       => [ CliColors::$FG_RED ],
            'error_alt'   => [ CliColors::$FG_CYAN, CliColors::$BG_RED ],
            'success'     => [ CliColors::$FG_GREEN ],
            'success_alt' => [ CliColors::$FG_BLACK, CliColors::$BG_GREEN ],
            'info'        => [ CliColors::$FG_MAGENTA],
            'info_alt'    => [ CliColors::$FG_WHITE, CliColors::$BG_MAGENTA ]
        ];

        return isset($themes[$name]) ? $themes[$name] : $themes['regular'];
    }
}