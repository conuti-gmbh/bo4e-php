<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\ReklamationsgrundBemerkung;
use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Reklamationsgrund;

class Reklamation
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::REKLAMATION,
        readonly string $versionStruktur = "1",
        readonly ?string $lokationsId = null,
        readonly ?Lokationstyp $lokationsTyp = null,
        readonly ?string $obiskennzahl = null,
        readonly ?Zeitraum $zeitraumMesswertanfrage = null,
        readonly ?Reklamationsgrund $reklamationsgrund = null,
        readonly ?ReklamationsgrundBemerkung $reklamationsgrundBemerkung = null,
        readonly ?string $konfiguration = null,
    ) {
    }
}
