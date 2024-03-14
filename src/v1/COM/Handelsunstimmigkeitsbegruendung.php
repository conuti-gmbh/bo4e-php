<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsgrund;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsrichtigkeit;

class Handelsunstimmigkeitsbegruendung
{
    public function __construct(
        readonly ?Handelsunstimmigkeitsrichtigkeit $richtigkeit = null,
        readonly ?string $referenzDar = null,
        readonly ?string $referenznummer = null,
        readonly ?string $bestaetigungDar = null,
        readonly ?Handelsunstimmigkeitsgrund $grund = null,
        readonly ?string $hinweis = null,
        /** @var string[] */
        readonly array $referenzen = [],
    ) {
    }
}
