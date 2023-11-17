<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationszuordnung;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\Sparte;

class Netzlokation
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly ?string $versionStruktur,
        readonly ?string $netzlokationsId,
        readonly ?Sparte $sparte,
        readonly ?string $netzanschlussleistung,
        readonly ?string $grundzustaendigerMSBCodeNr,
        readonly ?bool $steuerkanal,
        readonly ?Lokationszuordnung $lokationszuordnung,
        readonly ?Marktrolle $produktdatenRelevanteRolle,
        readonly ?Marktteilnehmer $auftraggebenderMarktpartner,
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Netznutzungsabrechnungsdaten[] */
        readonly array $abrechnungsdaten = []
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
