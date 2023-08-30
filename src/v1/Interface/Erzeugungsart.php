<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

/**
 * Auflistung der Erzeugungsarten von Energie
 */
interface Erzeugungsart
{
    public const EEG = 'EEG';
    public const KWK = 'KWK';
    public const EEG_DV = 'EEG_DV';
    public const KWK_DV = 'KWK_DV';
    public const WIND = 'WIND';
    public const SOLAR = 'SOLAR';
    public const KERNKRAFT = 'KERNKRAFT';
    public const WASSER = 'WASSER';
    public const GEOTHERMIE = 'GEOTHERMIE';
    public const BIOMASSE = 'BIOMASSE';
    public const KOHLE = 'KOHLE';
    public const GAS = 'GAS';
    public const SONSTIGE = 'SONSTIGE';
    public const SONSTIGE_EEG = 'SONSTIGE_EEG';
}
