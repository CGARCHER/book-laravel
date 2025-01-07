<?php

namespace App\Enums;

enum StoreType: string
{
    case STORE = 'STORE';
    case PHYSICAL = 'PHYSICAL';
    case OTHER = 'OTHER';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}