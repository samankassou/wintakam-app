<?php

namespace App;

use Hashids\Hashids;

class Hasher
{
    public static function encode(...$args)
    {
        return app(Hashids::class)->encode(...$args);
    }

    public static function decode($enc)
    {
        if (is_int($enc)) {
            return $enc;
        }

        abort_if(!app(Hashids::class)->decode($enc), 404);

        return app(Hashids::class)->decode($enc)[0];
    }
}
