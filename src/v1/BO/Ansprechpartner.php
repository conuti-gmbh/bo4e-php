<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Rufnummer;

class Ansprechpartner
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $nachname = null,
        readonly ?string $eMailAdresse = null,
        /** @var Rufnummer[] */
        readonly array $rufnummern = [],
    ) {
    }
}
