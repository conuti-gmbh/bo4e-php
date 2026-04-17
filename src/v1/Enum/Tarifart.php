<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Tarifart: string
{
    case EINTARIF = 'EINTARIF';
    case ZWEITARIF = 'ZWEITARIF';
    case MEHRTARIF = 'MEHRTARIF';
    case SMART_METER = 'SMART_METER';
    case LEISTUNGSGEMESSEN = 'LEISTUNGSGEMESSEN';
}
