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
        readonly ?string $ressourcenId,
        readonly ?Sparte $sparte,
        readonly ?Lokationszuordnung $lokationszuordnung,
        readonly ?string $konfigurationsprodukt,
        readonly ?Steuerkanal $steuerkanal,
        readonly ?Marktrolle $produktdatenRelevanteRolle,
        readonly ?Marktteilnehmer $auftraggebenderMarktpartner,
        readonly ?ZugeordneteDefinition $zugeordneteDefinition,
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = []
    ) {
    }

    public function getMarktrolle(Marktrolle $rolle): ?Marktteilnehmer
    {
        foreach ($this->marktrollen as $marktrolle) {
            if ($marktrolle->marktrolle === $rolle) {
                return $marktrolle;
            }
        }

        return null;
    }
}
