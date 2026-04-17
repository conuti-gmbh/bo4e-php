<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Rollencodetyp: string
{
    case BDEW = 'BDEW';
    case GS1 = 'GS1';
    case GLN = 'GLN';
    case DVGW = 'DVGW';
}
