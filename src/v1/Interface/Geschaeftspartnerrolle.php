<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Geschaeftspartnerrolle
{
    public const KUNDE = 'KUNDE';
    public const LIEFERANT = 'LIEFERANT';
    public const DIENSTLEISTER = 'DIENSTLEISTER';
    public const INTERESSENT = 'INTERESSENT';
    public const MARKTPARTNER = 'MARKTPARTNER';
    public const EIGENTUEMER = 'EIGENTUEMER';
    public const HAUSVERWALTER = 'HAUSVERWALTER';
    public const KORRESPONDENZEMPFAENGER = 'KORRESPONDENZEMPFAENGER';
    public const ABLESEKARTENEMPFAENGER = 'ABLESEKARTENEMPFAENGER';
}
