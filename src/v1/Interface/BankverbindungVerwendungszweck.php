<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface BankverbindungVerwendungszweck
{
    public const BV_ZAHLUNG_NNA = 'BV_ZAHLUNG_NNA';
    public const BV_ZAHLUNG_MMMA = 'BV_ZAHLUNG_MMMA';
    public const BV_ZAHLUNG_MSB_ABRECHNNUNG = 'BV_ZAHLUNG_MSB_ABRECHNNUNG';
    public const BV_ZAHLUNG_ENT_SPERREN_ABRECHNUNG = 'BV_ZAHLUNG_ENT_SPERREN_ABRECHNUNG';
    public const BV_SONSTIGE = 'BV_SONSTIGE';
}
