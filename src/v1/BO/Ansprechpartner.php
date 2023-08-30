<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rufnummer;

class Ansprechpartner
{
    public function __construct(
        public string $boTyp,
        public string $versionStruktur,
        public ?string $nachname,
        public ?string $eMailAdresse,
        /** @var Rufnummer[] */
        public array $rufnummern = []
    ) {
    }
}
