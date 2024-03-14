<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

class ZugeordneteDefinition
{
    public function __construct(
        readonly ?string $schaltzeitdefinition = null,
        readonly ?string $leistungskurvendefinition = null,
    ) {
    }
}
