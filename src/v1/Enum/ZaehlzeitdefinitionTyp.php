<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum ZaehlzeitdefinitionTyp: string
{
    case WAERMEPUMPE = 'WAERMEPUMPE';
    case NACHTSPEICHERHEIZUNG = 'NACHTSPEICHERHEIZUNG';
    case SCHWACHLASTZEITFENSTER = 'SCHWACHLASTZEITFENSTER';
    case SONSTIGE = 'SONSTIGE';
    case HOCHLASTZEITFENSTER = 'HOCHLASTZEITFENSTER';
}
