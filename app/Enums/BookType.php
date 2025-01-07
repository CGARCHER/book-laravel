<?php

namespace App\Enums;

enum BookType: string
{
    case DRAMA = 'DRAMA';
    case SCIFI = 'SCIFI';
    case THRILLER = 'THRILLER';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}