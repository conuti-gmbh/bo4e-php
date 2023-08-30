<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Zeitraum;
use Conuti\BO4E\v1\Enum\Lokationstyp;
use Conuti\BO4E\v1\Enum\Reklamationsgrund;

class Reklamation
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $lokationsId,
        public ?Lokationstyp $lokationsTyp,
        public ?string $obiskennzahl,
        public ?Zeitraum $zeitraumMesswertanfrage,
        public ?Reklamationsgrund $reklamationsgrund,
        public ?string $reklamationsgrundBemerkung,
    ) {
    }
}
