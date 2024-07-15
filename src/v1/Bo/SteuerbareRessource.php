<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Steuerkanal;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Com\ZugeordneteDefinition;
use Conuti\BO4E\v1\Enum\Datenqualitaet;

class SteuerbareRessource
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::STEUERBARE_RESSOURCE,
        readonly string $versionStruktur = '1',
        readonly ?string $ressourcenId = null,
        readonly ?Sparte $sparte = null,
        readonly ?Lokationszuordnung $lokationszuordnung = null,
        readonly ?string $konfigurationsprodukt = null,
        readonly ?Steuerkanal $steuerkanal = null,
        readonly ?Marktrolle $produktdatenRelevanteRolle = null,
        readonly ?Marktteilnehmer $auftraggebenderMarktpartner = null,
        readonly ?ZugeordneteDefinition $zugeordneteDefinition = null,
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
        readonly ?Datenqualitaet $datenqualitaet = null,
        readonly ?int $zeitraumId = null,
    ) {
    }
}
