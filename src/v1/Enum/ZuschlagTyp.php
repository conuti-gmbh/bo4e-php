<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ZuschlagTyp: string
{
    case UMSPANNUNGSZUSCHLAG = 'UMSPANNUNGSZUSCHLAG';
    case BETRIEBSMITTEL_P19_STROM_NEV = 'BETRIEBSMITTEL_P19_STROM_NEV';
    case ANPASSUNG_P19_STROM_NEV = 'ANPASSUNG_P19_STROM_NEV';
}
