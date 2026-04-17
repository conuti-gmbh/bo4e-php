<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Beschreibungsformat: string
{
    case CODE = 'CODE';
    case FREIER_TEXT = 'FREIER_TEXT';
    case TEILSTRUKTURIERT = 'TEILSTRUKTURIERT';
}
