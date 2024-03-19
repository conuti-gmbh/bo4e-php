<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Zaehlerauspraegung;
use Conuti\BO4E\v1\Enum\Zaehlertyp;
use Conuti\BO4E\v1\Enum\Tarifart;
use DateTime;
use Conuti\BO4E\v1\Enum\Fernschaltung;
use Conuti\BO4E\v1\Enum\Messwerterfassung;
use Conuti\BO4E\v1\Enum\ZaehlertypSpezifikation;
use Conuti\BO4E\v1\Enum\Befestigungsart;
use Conuti\BO4E\v1\Enum\Geraetemerkmal;
use Conuti\BO4E\v1\Enum\Mengenumwertertyp;
use Conuti\BO4E\v1\Enum\Volumenerfassung;
use Conuti\BO4E\v1\Com\Geraet;
use Conuti\BO4E\v1\Com\Zaehlwerk;

class Zaehler
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::ZAEHLER,
        readonly string $versionStruktur = '1',
        readonly ?string $zaehlernummer = null,
        readonly ?Sparte $sparte = null,
        readonly ?Zaehlerauspraegung $zaehlerauspraegung = null,
        readonly ?Zaehlertyp $zaehlertyp = null,
        readonly ?Tarifart $tarifart = null,
        readonly ?float $zaehlerkonstante = null,
        readonly ?DateTime $eichungBis = null,
        readonly ?Geschaeftspartner $zaehlerhersteller = null,
        readonly ?string $gateway = null,
        readonly ?Fernschaltung $fernschaltung = null,
        readonly ?Messwerterfassung $messwerterfassung = null,
        readonly ?ZaehlertypSpezifikation $zaehlertypspezifikation = null,
        readonly ?Befestigungsart $befestigungsart = null,
        readonly ?Geraetemerkmal $zaehlergroesse = null,
        readonly ?Mengenumwertertyp $mengenumwertertyp = null,
        readonly ?Volumenerfassung $volumenerfassung = null,
        readonly ?string $serialnummer = null,
        readonly ?Geraetemerkmal $geraetemerkmal = null,
        readonly ?DateTime $herstellungsdatum = null,
        readonly ?string $baujahr = null,
        readonly ?string $messlokationsId = null,
        readonly ?string $marktlokationsId = null,
        /** @var Geraet[] */
        readonly array $geraete = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
    ) {
    }
}
