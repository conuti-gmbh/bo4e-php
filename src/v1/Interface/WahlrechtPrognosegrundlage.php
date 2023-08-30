<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface WahlrechtPrognosegrundlage
{
    public const DURCH_LF = 'DURCH_LF';
    public const DURCH_LF_NICHT_GEGEBEN = 'DURCH_LF_NICHT_GEGEBEN';
    public const NICHT_WEGEN_GROSSEN_VERBRAUCHS = 'NICHT_WEGEN_GROSSEN_VERBRAUCHS';
    public const NICHT_WEGEN_EIGENVERBRAUCH = 'NICHT_WEGEN_EIGENVERBRAUCH';
    public const NICHT_WEGEN_TAGES_VERBRAUCH = 'NICHT_WEGEN_TAGES_VERBRAUCH';
    public const NICHT_WEGEN_ENWG = 'NICHT_WEGEN_ENWG';
}
