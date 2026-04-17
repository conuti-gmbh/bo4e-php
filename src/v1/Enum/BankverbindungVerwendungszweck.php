<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum BankverbindungVerwendungszweck: string
{
    case BV_ZAHLUNG_NNA = 'BV_ZAHLUNG_NNA';
    case BV_ZAHLUNG_MMMA = 'BV_ZAHLUNG_MMMA';
    case BV_ZAHLUNG_MSB_ABRECHNNUNG = 'BV_ZAHLUNG_MSB_ABRECHNNUNG';
    case BV_ZAHLUNG_ENT_SPERREN_ABRECHNUNG = 'BV_ZAHLUNG_ENT_SPERREN_ABRECHNUNG';
    case BV_SONSTIGE = 'BV_SONSTIGE';
}
