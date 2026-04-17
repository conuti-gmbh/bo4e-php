<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Kontaktart: string
{
    case ANSCHREIBEN = 'ANSCHREIBEN';
    case TELEFONAT = 'TELEFONAT';
    case FAX = 'FAX';
    case E_MAIL = 'E_MAIL';
    case SMS = 'SMS';
}
