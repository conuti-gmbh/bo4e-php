<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum FehlerTyp: string
{
    case VERARBEITUNG = "VERARBEITUNG";
    case SYNTAX = "SYNTAX";
}
