<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Rufnummernart: string
{
    case RUF_ZENTRALE = 'RUF_ZENTRALE';
    case FAX_ZENTRALE = 'FAX_ZENTRALE';
    case SAMMELRUF = 'SAMMELRUF';
    case SAMMELFAX = 'SAMMELFAX';
    case ABTEILUNGRUF = 'ABTEILUNGRUF';
    case ABTEILUNGFAX = 'ABTEILUNGFAX';
    case RUF_DURCHWAHL = 'RUF_DURCHWAHL';
    case FAX_DURCHWAHL = 'FAX_DURCHWAHL';
    case MOBIL_NUMMER = 'MOBIL_NUMMER';
}
