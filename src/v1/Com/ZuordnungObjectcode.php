<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use Conuti\BO4E\v1\Enum\Lokationstyp;

class ZuordnungObjectcode
{
    public function __construct(
        readonly ?Lokationstyp $referenzLokationsTyp = null,
        readonly ?string $referenzLokationsId = null,
        readonly ?Lokationstyp $vorgelagerteLokationTyp = null,
        readonly ?string $vorgelagerteLokationId = null,
        /** @var ?Objectcode[] */
        readonly ?array $objectcode = null,
        /** @var ?string[] */
        readonly ?array $referenzMarktlokationTechnischeRessource = null,
    ) {
    }
}
