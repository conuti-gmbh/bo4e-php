<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\ZuordnungObjectcode;
use Conuti\BO4E\v1\Enum\BOTyp;

class Lokationsbuendel
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly string $versionStruktur,
        readonly ?string $lokationsbuendelstrukturId,
        readonly ?int $lokationsbuendelNummer,
        readonly ?bool $standardisierteLokationsbuendelstruktur,
        /** @var ZuordnungObjectcode[] */
        readonly array $zuordnungObjectcode = []
    ) {
    }
}
