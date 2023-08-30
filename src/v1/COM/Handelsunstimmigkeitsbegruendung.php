<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;


class Handelsunstimmigkeitsbegruendung
{
    public function __construct(
        public ?string $richtigkeit,
        public ?string $referenzDar,
        public ?string $referenznummer,
        public ?string $bestaetigungDar,
        public ?string $grund,
        public ?string $hinweis,
        /** @var string[] */
        public array $referenzen = []
    ) {
    }
}
