<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\Enum\BOTyp;

class Lokationsbuendel
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsbuendelstrukturId,
        readonly ?string $lokationsbuendelNummer,
        readonly ?bool $standardisierteLokationsbuendelstruktur,
        readonly ?string $objectcode,
        readonly ?string $referenzMarktlokation,
        readonly ?string $referenzMesslokation,
        readonly ?string $referenzNetzlokation,
        readonly ?string $referenzTechnischeRessource,
        readonly ?string $vorgelagerteMesslokation,
        readonly ?string $vorgelagerteNetzlokation,
        readonly ?string $referenzMarktlokationTechnischeRessource
    ) {
    }
}
