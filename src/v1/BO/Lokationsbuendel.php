<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\ZuordnungObjectcode;
use Conuti\BO4E\v1\Enum\BOTyp;

class Lokationsbuendel
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::LOKATIONSBUENDEL,
        readonly string $versionStruktur = "1",
        readonly ?string $lokationsbuendelstrukturId = null,
        readonly ?int $lokationsbuendelNummer = null,
        readonly ?bool $standardisierteLokationsbuendelstruktur = null,
        /** @var ZuordnungObjectcode[] */
        readonly array $zuordnungObjectcode = [],
    ) {
    }
}
