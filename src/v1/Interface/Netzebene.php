<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Netzebene
{
    /** Niederspannung */
    public const NSP = 'NSP';

    /** Mittelspannung */
    public const MSP = 'MSP';

    /** Hochspannung */
    public const HSP = 'HSP';

    /** Hoechstspannung */
    public const HSS = 'HSS';

    /** MS/NS Umspannung */
    public const MSP_NSP_UMSP = 'MSP_NSP_UMSP';

    /** HS/MS Umspannung */
    public const HSP_MSP_UMSP = 'HSP_MSP_UMSP';

    /** HOES/HS Umspannung */
    public const HSS_HSP_UMSP = 'HSS_HSP_UMSP';

    /** Hochdruck */
    public const HD = 'HD';

    /** Mitteldruck */
    public const MD = 'MD';

    /** Niederdruck */
    public const ND = 'ND';
}
