<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Versorgungsart: string
{
    case ERSATZVERSORGUNG = 'ERSATZVERSORGUNG';
    case GRUNDVERSORGUNG = 'GRUNDVERSORGUNG';
    case ERSATZBELIEFERUNG = 'ERSATZBELIEFERUNG';
}
