<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ZuordnungObjectcode
{
    public function __construct(
        readonly ?string $referenzMarktlokation,
        readonly ?string $referenzMesslokation,
        readonly ?string $referenzNetzlokation,
        readonly ?string $referenzTechnischeRessource,
        readonly ?string $vorgelagerteMesslokation,
        readonly ?string $vorgelagerteNetzlokation,
        /** @var Objectcode[] */
        readonly array $objectcode = [],
        /** @var string[] */
        readonly array $referenzMarktlokationTechnischeRessource = []
    ) {
    }
}
