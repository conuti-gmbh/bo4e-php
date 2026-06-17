<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Com;

use DateTime;
use Conuti\BO4E\v1\Enum\Tarifstufe;

class AnsichtSender
{
    public function __construct(
        readonly ?DateTime $verwendungAb = null,
        readonly ?DateTime $verwendungBis = null,
        readonly ?string $leistungsperiode = null,
        readonly ?Menge $menge = null,
        readonly ?Tarifstufe $tarifstufe = null,
    ) {
    }
}
