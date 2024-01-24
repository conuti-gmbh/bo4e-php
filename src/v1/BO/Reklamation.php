<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\ReklamationsgrundBemerkung;
use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Reklamationsgrund;

class Reklamation
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsId,
        readonly ?Lokationstyp $lokationsTyp,
        readonly ?string $obiskennzahl,
        readonly ?Zeitraum $zeitraumMesswertanfrage,
        readonly ?Reklamationsgrund $reklamationsgrund,
        readonly ?ReklamationsgrundBemerkung $reklamationsgrundBemerkung,
    ) {
    }
}
