<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Mengeneinheit;
use Conuti\BO4E\v1\Enum\Schwachlastfaehig;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\Unterbrechbarkeit;
use Conuti\BO4E\v1\Enum\Waermenutzung;
use Conuti\BO4E\v1\Enum\Wertegranularitaet;
use Conuti\BO4E\v1\Enum\NotwendigkeitZweiteMessung;
use Conuti\BO4E\v1\Enum\WerteuebermittlungVerwendungszweck;
use Conuti\BO4E\v1\Enum\ArtEmobilitaet;

class Zaehlwerk
{
    public function __construct(
        readonly ?string $zaehlwerkId = null,
        readonly ?string $bezeichnung = null,
        readonly ?Energierichtung $richtung = null,
        readonly ?string $obisKennzahl = null,
        readonly ?float $wandlerfaktor = null,
        readonly ?Mengeneinheit $einheit = null,
        readonly ?Schwachlastfaehig $schwachlastfaehig = null,
        readonly ?Verbrauchsart $verbrauchsart = null,
        readonly ?Unterbrechbarkeit $unterbrechbarkeit = null,
        readonly ?Waermenutzung $waermenutzung = null,
        readonly ?Konzessionsabgabe $konzessionsabgabe = null,
        readonly ?bool $steuerbefreit = null,
        readonly ?int $vorkommastelle = null,
        readonly ?int $nachkommastelle = null,
        readonly ?bool $abrechnungsrelevant = null,
        readonly ?int $anzahlAblesungen = null,
        readonly ?Zaehlzeitregister $zaehlzeiten = null,
        readonly ?string $konfiguration = null,
        readonly ?string $messprodukt = null,
        readonly ?Wertegranularitaet $wertegranularitaet = null,
        readonly ?NotwendigkeitZweiteMessung $notwendigkeitZweiteMessung = null,
        readonly ?WerteuebermittlungVerwendungszweck $werteuebermittlungVerwendungszweck = null,
        readonly ?ArtEmobilitaet $artEMobilitaet = null,
        readonly ?string $konfigurationsprodukt = null,
        readonly ?bool $keinKonfigurationsprodukt = null,
        readonly ?string $leistungskurvendefinition = null,
        /** @var ?Verwendungszweck[] */
        readonly ?array $verwendungszwecke = null,
    ) {
    }
}
