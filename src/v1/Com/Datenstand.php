<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Aggregationsverantwortung;

class Datenstand
{
    public function __construct(
        readonly ?Menge $jahresverbrauchsprognose = null,
        readonly ?Menge $tatsaechlichBilanzierteEnergiemenge = null,
        readonly ?Menge $zuBilanzierendeEnergiemenge = null,
        readonly ?string $bilanzkreis = null,
        readonly ?string $bilanzierungsgebiet = null,
        /** @var ?Lastprofil[] */
        readonly ?array $lastprofile = null,
        readonly ?Aggregationsverantwortung $aggregationsverantwortung = null,
    ) {
    }
}
