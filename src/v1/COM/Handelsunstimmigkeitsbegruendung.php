<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsgrund;
use Conuti\BO4E\v1\Enum\Handelsunstimmigkeitsrichtigkeit;

class Handelsunstimmigkeitsbegruendung
{
    public function __construct(
        public ?Handelsunstimmigkeitsrichtigkeit $richtigkeit,
        public ?string $referenzDar,
        public ?string $referenznummer,
        public ?string $bestaetigungDar,
        public ?Handelsunstimmigkeitsgrund $grund,
        public ?string $hinweis,
        /** @var string[] */
        public array $referenzen = []
    ) {
    }
}
