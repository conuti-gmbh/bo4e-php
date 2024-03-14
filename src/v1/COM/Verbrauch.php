<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Messwertstatus;
use Conuti\BO4E\v1\Enum\Tarifstufe;
use Conuti\BO4E\v1\Enum\Verbrauchsmengetyp;
use Conuti\BO4E\v1\Enum\Wertermittlungsverfahren;

class Verbrauch
{
    public function __construct(
        readonly ?string $startdatum = null,
        readonly ?string $enddatum = null,
        readonly ?Wertermittlungsverfahren $wertermittlungsverfahren = null,
        readonly ?Messwertstatus $messwertstatus = null,
        readonly ?string $obiskennzahl = null,
        readonly ?float $wert = null,
        readonly ?Mengeneinheit $einheit = null,
        readonly ?Verbrauchsmengetyp $type = null,
        readonly ?Tarifstufe $tarifstufe = null,
        readonly ?string $nutzungszeitpunkt = null,
        readonly ?string $ausfuehrungszeitpunkt = null,
        readonly ?int $position = null,
        readonly ?string $ablesedatum = null,
        readonly ?string $leistungsperiode = null,
        /** @var StatusZusatzInformation[] */
        readonly array $statuszusatzinformationen = [],
    ) {
    }
}
