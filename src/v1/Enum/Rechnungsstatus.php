<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Rechnungsstatus: string
{
    case DUPLIKAT = 'DUPLIKAT';
    case ORIGINAL = 'ORIGINAL';
    case STORNIERT = 'STORNIERT';
}
