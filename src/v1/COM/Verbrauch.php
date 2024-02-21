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
        readonly ?string $startdatum,
        readonly ?string $enddatum,
        readonly ?Wertermittlungsverfahren $wertermittlungsverfahren,
        readonly ?Messwertstatus $messwertstatus,
        readonly ?string $obiskennzahl,
        readonly ?float $wert,
        readonly ?Mengeneinheit $einheit,
        readonly ?Verbrauchsmengetyp $type,
        readonly ?Tarifstufe $tarifstufe,
        readonly ?string $nutzungszeitpunkt,
        readonly ?string $ausfuehrungszeitpunkt,
        readonly ?int $position,
        readonly ?string $ablesedatum,
        readonly ?string $leistungsperiode,
        /** @var StatusZusatzInformation[] */
        readonly array $statuszusatzinformationen = []
    ) {
    }
}
