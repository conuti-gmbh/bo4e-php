<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Messwertstatus
{
    public const ABGELESEN = 'ABGELESEN';
    public const ERSATZWERT = 'ERSATZWERT';
    public const VORSCHLAGSWERT = 'VORSCHLAGSWERT';
    public const NICHT_VERWENDBAR = 'NICHT_VERWENDBAR';
    public const PROGNOSEWERT = 'PROGNOSEWERT';
    public const ENERGIEMENGESUMMIERT = 'ENERGIEMENGESUMMIERT';
    public const VOLAEUFIGERWERT = 'VOLAEUFIGERWERT';
    public const FEHLT = 'FEHLT';
    public const ANGABE_FUER_LIEFERSCHEIN = 'ANGABE_FUER_LIEFERSCHEIN';
}
