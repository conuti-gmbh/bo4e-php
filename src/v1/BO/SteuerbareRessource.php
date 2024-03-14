<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\ZugeordneteDefinition;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Steuerkanal;

class SteuerbareRessource
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
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
    ) {
    }
}
