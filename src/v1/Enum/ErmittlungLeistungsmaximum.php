<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ErmittlungLeistungsmaximum: string
{
    case VERWENDUNG_HOCHLASTFENSTER = 'VERWENDUNG_HOCHLASTFENSTER';
    case ENDEKEINE_VERWENDUNG_HOCHLASTFENSTER_ABO = 'KEINE_VERWENDUNG_HOCHLASTFENSTER';
}
