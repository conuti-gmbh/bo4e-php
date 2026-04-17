<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum MarktlokationsTyp: string
{
    case STANDARD_MARKTLOKATION = 'STANDARD_MARKTLOKATION';
    case RUHENDE_MARKTLOKATION = 'RUHENDE_MARKTLOKATION';
    case KUNDENANLAGE = 'KUNDENANLAGE';
}
