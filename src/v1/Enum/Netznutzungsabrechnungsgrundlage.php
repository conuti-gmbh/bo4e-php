<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Netznutzungsabrechnungsgrundlage: string
{
    case LIEFERSCHEIN = 'LIEFERSCHEIN';
    case ABWEICHENDE_GRUNDLAGE = 'ABWEICHENDE_GRUNDLAGE';
}
