<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Geraet;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Befestigungsart;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Fernschaltung;
use Conuti\BO4E\v1\Enum\Geraetemerkmal;
use Conuti\BO4E\v1\Enum\Mengenumwertertyp;
use Conuti\BO4E\v1\Enum\Messwerterfassung;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Tarifart;
use Conuti\BO4E\v1\Enum\Volumenerfassung;
use Conuti\BO4E\v1\Enum\Zaehlerauspraegung;
use Conuti\BO4E\v1\Enum\Zaehlertyp;
use Conuti\BO4E\v1\Enum\ZaehlertypSpezifikation;

class Zaehler
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly ?string $versionStruktur,
        readonly ?string $zaehlernummer,
        readonly ?Sparte $sparte,
        readonly ?Zaehlerauspraegung $zaehlerauspraegung,
        readonly ?Zaehlertyp $zaehlertyp,
        readonly ?Tarifart $tarifart,
        readonly ?float $zaehlerkonstante,
        readonly ?string $eichungBis,
        readonly ?Geschaeftspartner $zaehlerhersteller,
        readonly ?string $gateway,
        readonly ?Fernschaltung $fernschaltung,
        readonly ?Messwerterfassung $messwerterfassung,
        readonly ?ZaehlertypSpezifikation $zaehlertypspezifikation,
        readonly ?Befestigungsart $befestigungsart,
        readonly ?Geraetemerkmal $zaehlergroesse,
        readonly ?Mengenumwertertyp $mengenumwertertyp,
        readonly ?Volumenerfassung $volumenerfassung,
        readonly ?string $serialnummer,
        readonly ?Geraetemerkmal $geraetemerkmal,
        readonly ?string $herstellungsdatum,
        readonly ?string $baujahr,
        readonly ?string $messlokationsId,
        readonly ?string $marktlokationsId,
        /** @var Geraet[] $geraete */
        readonly array $geraete = [],
        /** @var Zaehlwerk[] $zaehlwerke */
        readonly array $zaehlwerke = [],
    ) {
    }
}
