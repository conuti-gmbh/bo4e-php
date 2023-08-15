<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsgrund;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsrichtigkeit;

class Handelsunstimmigkeitsbegruendung
{
    public function __construct(
        readonly ?Handelsunstimmigkeitsrichtigkeit $richtigkeit,
        readonly ?string $referenzDar,
        readonly ?string $referenznummer,
        readonly ?string $bestaetigungDar,
        readonly ?Handelsunstimmigkeitsgrund $grund,
        readonly ?string $hinweis,
        /** @var string[] */
        readonly array $referenzen = []
    ) {
    }
}
