<?php

class Siberian_Version
{
    const TYPE = 'SAE';
    const NAME = 'Single App Edition';
    const VERSION = '4.3.1';
    const NATIVE_VERSION = '1';

    static function is($type) {
        return self::TYPE == strtoupper($type);
    }
}
