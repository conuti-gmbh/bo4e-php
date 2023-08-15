<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Tarifzeit: string
{
    case TZ_STANDARD = 'TZ_STANDARD';
    case TZ_HT = 'TZ_HT';
    case TZ_NT = 'TZ_NT';
}
