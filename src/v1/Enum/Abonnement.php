<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Abonnement: string
{
    case START_ABO = 'START_ABO';
    case ENDE_ABO = 'ENDE_ABO';
    case OHNE_ABO = 'OHNE_ABO';
}
