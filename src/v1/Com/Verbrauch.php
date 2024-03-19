<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;
use Conuti\BO4E\v1\Enum\Wertermittlungsverfahren;
use Conuti\BO4E\v1\Enum\Messwertstatus;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Verbrauchsmengetyp;
use Conuti\BO4E\v1\Enum\Tarifstufe;

class Verbrauch
{
    public function __construct(
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
        readonly ?Wertermittlungsverfahren $wertermittlungsverfahren = null,
        readonly ?Messwertstatus $messwertstatus = null,
        readonly ?string $obiskennzahl = null,
        readonly ?float $wert = null,
        readonly ?Mengeneinheit $einheit = null,
        readonly ?Verbrauchsmengetyp $type = null,
        readonly ?Tarifstufe $tarifstufe = null,
        readonly ?DateTime $nutzungszeitpunkt = null,
        readonly ?DateTime $ausfuehrungszeitpunkt = null,
        readonly ?int $position = null,
        readonly ?DateTime $ablesedatum = null,
        readonly ?string $leistungsperiode = null,
        /** @var StatusZusatzInformation[] */
        readonly array $statuszusatzinformationen = [],
    ) {
    }
}
