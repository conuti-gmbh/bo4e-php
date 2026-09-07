<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\Menge;
use Conuti\BO4E\v1\Enum\Bezeichnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Zeitreihentyp;
use Conuti\BO4E\v1\Enum\Bezugszeitraum;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\DatenstatusZeitreihe;
use Conuti\BO4E\v1\Enum\Zuordnungsregel;
use Conuti\BO4E\v1\Com\Zeitreihenprodukt;

class Summenzeitreihe
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::SUMMENZEITREIHE,
        readonly string $versionStruktur = '1',
        readonly ?string $zaehlpunktId = null,
        readonly ?string $versionZeitreihe = null,
        readonly ?string $bilanzkreis = null,
        readonly ?string $bilanzkreisAn = null,
        readonly ?string $bilanzkreisVon = null,
        readonly ?Menge $bilanzierteEnergiemenge = null,
        readonly ?Menge $bilanzierteAusfallmenge = null,
        /** @var ?string[] */
        readonly ?array $bilanzierungsgebiet = null,
        readonly ?Bezeichnung $bezeichnung = null,
        readonly ?Marktrolle $verantwortlicheMarktrolle = null,
        readonly ?string $regelzone = null,
        readonly ?Zeitreihentyp $zeitreihentyp = null,
        readonly ?Bezugszeitraum $bezugszeitraum = null,
        readonly ?Netzebene $netzebene = null,
        readonly ?Netzebene $umspannung = null,
        readonly ?DatenstatusZeitreihe $datenstatusZeitreihe = null,
        readonly ?Zuordnungsregel $zuordnungsregel = null,
        /** @var ?Zeitreihenprodukt[] */
        readonly ?array $zeitreihenprodukt = null,
    ) {
    }
}
