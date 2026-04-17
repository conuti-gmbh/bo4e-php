<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Cdoc;

use Conuti\BO4E\v1\Enum\Sparte;
use DateTime;
use Conuti\BO4E\v1\Bo\Marktteilnehmer;
use Conuti\BO4E\v1\Com\Menge;
use Conuti\BO4E\v1\Enum\Tarifstufe;
use Conuti\BO4E\v1\Enum\Bilanzkreiszuordnung;
use Conuti\BO4E\v1\Bo\Ansprechpartner;
use Conuti\BO4E\v1\Bo\Bilanzkreis;
use Conuti\BO4E\v1\Com\Abtretungserklaerung;
use Conuti\BO4E\v1\Com\AntwortStatusZeitraum;

class Transaktionsdaten
{
    public function __construct(
        readonly ?string $datenaustauschreferenz = null,
        readonly ?Sparte $sparte = null,
        readonly ?string $transaktionsgrund = null,
        readonly ?string $transaktionsgrundergaenzung = null,
        readonly ?string $transaktionsgrundergaenzungBefristeteAnmeldung = null,
        readonly ?string $lieferrichtung = null,
        readonly ?DateTime $prozessdatum = null,
        readonly ?string $vorgangsnummer = null,
        readonly ?string $idempodenzschluessel = null,
        readonly ?string $pruefidentifikator = null,
        readonly ?Marktteilnehmer $absender = null,
        readonly ?Marktteilnehmer $empfaenger = null,
        readonly ?string $dokumentennummer = null,
        readonly ?string $dokumentenname = null,
        readonly ?string $kategorie = null,
        readonly ?string $nachrichtenfunktion = null,
        readonly ?DateTime $nachrichtendatum = null,
        readonly ?string $nachrichtenreferenznummer = null,
        readonly ?string $anfragereferenznummer = null,
        readonly ?string $vorgangsreferenznummer = null,
        readonly ?string $sendungsposition = null,
        readonly ?int $positionsnummer = null,
        readonly ?string $mitteilungsnummer = null,
        readonly ?string $netznutzungsabrechnungsintervall = null,
        readonly ?string $typ = null,
        readonly ?string $anfrageReferenz = null,
        readonly ?string $auftragsReferenz = null,
        readonly ?DateTime $vertragsbeginn = null,
        readonly ?DateTime $vertragsende = null,
        readonly ?DateTime $ausfuehrungsdatum = null,
        readonly ?DateTime $lieferdatum = null,
        readonly ?string $meldepunkt = null,
        readonly ?DateTime $startdatum = null,
        readonly ?DateTime $enddatum = null,
        readonly ?DateTime $verwendungAb = null,
        readonly ?DateTime $verwendungBis = null,
        readonly ?string $leistungsperiode = null,
        readonly ?string $abonnement = null,
        readonly ?string $produktbeschreibung = null,
        readonly ?string $bestellungzaehlzeiten = null,
        readonly ?string $angebotsnummer = null,
        readonly ?string $angebotsreferenz = null,
        readonly ?string $naechsteNetznutzungsabrechnung = null,
        readonly ?string $naechsteTurnusAblesungStrom = null,
        readonly ?string $naechsteTurnusAblesungGas = null,
        readonly ?string $identifikationslogik = null,
        readonly ?string $datumsformat = null,
        readonly ?string $antwortstatus = null,
        readonly ?string $antwortstatusCodeliste = null,
        readonly ?string $antwortstatusdritter = null,
        readonly ?string $antwortstatusdritterBetroffeneLokation = null,
        readonly ?string $antwortstatusdritterCodeliste = null,
        readonly ?string $antwortstatusdritterReferenz = null,
        readonly ?Marktteilnehmer $beteiligterMarktpartner = null,
        readonly ?string $beteiligterMarktpartnerReferenz = null,
        readonly ?string $beteiligterMarktpartnerReferenzcode = null,
        readonly ?string $freitext = null,
        readonly ?string $fehlerbeschreibung = null,
        readonly ?string $begruendung = null,
        readonly ?string $infoAbweichung = null,
        readonly ?bool $ergaenzteMarktlokation = null,
        readonly ?bool $zaehlerstandsinfo = null,
        readonly ?string $lokationsId = null,
        readonly ?string $referenzMalo = null,
        readonly ?string $referenzMelo = null,
        readonly ?string $referenzPreisschluesselstamm = null,
        readonly ?DateTime $datumleistungsbeginn = null,
        readonly ?DateTime $endezumtermin = null,
        readonly ?DateTime $naechsteBearbeitung = null,
        readonly ?DateTime $lieferbeginndatuminbearbeitung = null,
        readonly ?string $angebotsart = null,
        readonly ?Menge $menge = null,
        readonly ?Tarifstufe $tarifstufe = null,
        readonly ?Bilanzkreiszuordnung $bilanzkreiszuordnung = null,
        readonly ?string $anwendungsreferenznummer = null,
        readonly ?DateTime $fertigstellungsdatum = null,
        readonly ?DateTime $datumuebergabe = null,
        readonly ?DateTime $gueltigAb = null,
        readonly ?DateTime $ablesedatum = null,
        readonly ?string $verarbeitungsReihenfolge = null,
        readonly ?Ansprechpartner $ansprechpartnerKunde = null,
        readonly ?DateTime $statusVeraenderungsZeitpunkt = null,
        readonly ?string $gueltigkeitsZeitspanne = null,
        readonly ?string $nachrichtenReferenzBestellbestaetigung = null,
        readonly ?string $vorgangsReferenzBestellbestaetigung = null,
        readonly ?DateTime $datumKuendigungKd = null,
        readonly ?DateTime $datumKuendigungLf = null,
        readonly ?string $referenzArtikelID = null,
        /** @var ?Bilanzkreis[] */
        readonly ?array $bilanzkreis = null,
        readonly ?int $geplantesProduktpaket = null,
        readonly ?Abtretungserklaerung $abtretungserklaerung = null,
        /** @var ?AntwortStatusZeitraum[] */
        readonly ?array $antwortStatusZeitraum = null,
        readonly ?string $apiPath = null,
        readonly ?string $apiKennung = null,
        readonly ?DateTime $annahmedatum = null,
        readonly ?string $unbOutboundDatum = null,
        readonly ?DateTime $geraeteausbaudatum = null,
    ) {
    }
}
