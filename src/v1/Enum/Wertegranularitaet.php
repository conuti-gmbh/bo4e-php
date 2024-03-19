<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Wertegranularitaet: string
{
    case JAEHRLICH = 'JAEHRLICH';
    case HALBJAEHRLICH = 'HALBJAEHRLICH';
    case QUARTALSWEISE = 'QUARTALSWEISE';
    case MONATLICH = 'MONATLICH';
}
