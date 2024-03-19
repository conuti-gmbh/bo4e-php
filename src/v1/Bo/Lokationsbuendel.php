<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Bo;

use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Com\ZuordnungObjectcode;

class Lokationsbuendel
{
    public function __construct(
        readonly BOTyp $boTyp = BOTyp::LOKATIONSBUENDEL,
        readonly string $versionStruktur = '1',
        readonly ?string $lokationsbuendelstrukturId = null,
        readonly ?int $lokationsbuendelNummer = null,
        readonly ?bool $standardisierteLokationsbuendelstruktur = null,
        /** @var ZuordnungObjectcode[] */
        readonly array $zuordnungObjectcode = [],
    ) {
    }
}
