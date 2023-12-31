<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum StatusArt: string
{
    case PLAUSIBILISIERUNGSHINWEIS = 'PLAUSIBILISIERUNGSHINWEIS';
    case ERSATZWERTBILDUNGSVERFAHREN = 'ERSATZWERTBILDUNGSVERFAHREN';
    case KORREKTURGRUND = 'KORREKTURGRUND';
    case GRUND_ERSATZWERTBILDUNGSVERFAHREN = 'GRUND_ERSATZWERTBILDUNGSVERFAHREN';
    case GASQUALITAET = 'GASQUALITAET';
    case MESSKLASSIFIZIERUNG = 'MESSKLASSIFIZIERUNG';
}
