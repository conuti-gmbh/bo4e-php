<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ErmittlungLeistungsmaximum: string
{
    case VERWENDUNG_HOCHLASTFENSTER = 'VERWENDUNG_HOCHLASTFENSTER';
    case KEINE_VERWENDUNG_HOCHLASTFENSTER = 'KEINE_VERWENDUNG_HOCHLASTFENSTER';
}
