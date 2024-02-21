<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\ArtEmobilitaet;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\NotwendigkeitZweiteMessung;
use Conuti\BO4E\v1\Enum\Schwachlastfaehig;
use Conuti\BO4E\v1\Enum\Unterbrechbarkeit;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Waermenutzung;
use Conuti\BO4E\v1\Enum\Wertegranularitaet;
use Conuti\BO4E\v1\Enum\WerteuebermittlungVerwendungszweck;

class Zaehlwerk
{
    public function __construct(
        readonly ?string $zaehlwerkId,
        readonly ?string $bezeichnung,
        readonly ?Energierichtung $richtung,
        readonly ?string $obisKennzahl,
        readonly ?float $wandlerfaktor,
        readonly ?Mengeneinheit $einheit,
        readonly ?Schwachlastfaehig $schwachlastfaehig,
        readonly ?Verbrauchsart $verbrauchsart,
        readonly ?Unterbrechbarkeit $unterbrechbarkeit,
        readonly ?Waermenutzung $waermenutzung,
        readonly ?Konzessionsabgabe $konzessionsabgabe,
        readonly ?bool $steuerbefreit,
        readonly ?int $vorkommastelle,
        readonly ?int $nachkommastelle,
        readonly ?bool $abrechnungsrelevant,
        readonly ?int $anzahlAblesungen,
        readonly ?Zaehlzeitregister $zaehlzeiten,
        readonly ?string $konfiguration,
        readonly ?string $messprodukt,
        readonly ?Wertegranularitaet $wertegranularitaet,
        readonly ?NotwendigkeitZweiteMessung $notwendigkeitZweiteMessung,
        readonly ?WerteuebermittlungVerwendungszweck $werteuebermittlungVerwendungszweck,
        readonly ?ArtEmobilitaet $artEMobilitaet,
        readonly ?string $konfigurationsprodukt,
        readonly ?bool $keinKonfigurationsprodukt,
        readonly ?string $leistungskurvendefinition,
        /** @var Verwendungszweck[] */
        readonly array $verwendungszwecke = [],
    ) {
    }
}
