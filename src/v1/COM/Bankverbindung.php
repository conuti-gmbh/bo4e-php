<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\BankverbindungVerwendungszweck;

class Bankverbindung
{
    public function __construct(
        public ?BankverbindungVerwendungszweck $verwendungszweck,
        public ?string $iban,
        public ?string $kontoinhaber,
        public ?string $bic,
        public ?string $kreditinstitut
    ) {
    }
}
