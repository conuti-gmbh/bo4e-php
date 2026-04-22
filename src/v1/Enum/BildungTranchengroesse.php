<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum BildungTranchengroesse: string
{
    case PROZENTUAL = 'PROZENTUAL';
    case AUFTEILUNGSFAKTOR = 'AUFTEILUNGSFAKTOR';
    case AUFTEILUNG_TECHNISCHE_RESSOURCEN = 'AUFTEILUNG_TECHNISCHE_RESSOURCEN';
}
