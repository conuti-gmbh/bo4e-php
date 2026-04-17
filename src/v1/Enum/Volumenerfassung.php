<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Volumenerfassung: string
{
    case HOCHFREQUENZSONDE = 'HOCHFREQUENZSONDE';
    case KENNLINIENKORREKTUR = 'KENNLINIENKORREKTUR';
    case SCHLEICHMENGENUNTERDRUECKUNG = 'SCHLEICHMENGENUNTERDRUECKUNG';
}
