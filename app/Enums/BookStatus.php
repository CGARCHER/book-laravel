<?php 

namespace App\Enums;

enum BookStatus: string {
    case ONSALE = 'ONSALE';
    case PREORDER = 'PREORDER';

    public static function values(): array {
        return array_column(self::cases(), 'value');
    }
}
