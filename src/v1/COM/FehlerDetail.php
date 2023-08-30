<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class FehlerDetail
{
    public function __construct(
        public ?string $code,
        public ?FehlerUrsache $ursache,
        public ?Beschreibung $beschreibung,
    ) {
    }
}
