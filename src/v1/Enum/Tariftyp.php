<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Tariftyp: string
{
    case ERSATZVERSORGUNG = 'ERSATZVERSORGUNG';
    case GRUNDVERSORGUNG = 'GRUNDVERSORGUNG';
    case GRUND_ERSATZVERSORGUNG = 'GRUND_ERSATZVERSORGUNG';
    case SONDERTARIF = 'SONDERTARIF';
}
