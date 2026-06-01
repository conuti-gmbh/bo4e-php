<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

class EndpunktAdresse
{
    public function __construct(
        readonly ?string $gwaManagement = null,
        readonly ?string $gwaAdminService = null,
        readonly ?string $gwaNTP = null,
    ) {
    }
}
