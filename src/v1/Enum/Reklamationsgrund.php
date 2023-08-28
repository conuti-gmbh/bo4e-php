<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Reklamationsgrund: string
{
    case WERTE_ZU_HOCH = 'WERTE_ZU_HOCH';
    case WERTE_ZU_NIEDRIG = 'WERTE_ZU_NIEDRIG';
    case WERTE_FEHLEN = 'WERTE_FEHLEN';
}
