<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Registeranzahl: string
{
    case EINTARIF = 'EINTARIF';
    case MEHRTARIF = 'MEHRTARIF';
    case ZWEITARIF = 'ZWEITARIF';
}
