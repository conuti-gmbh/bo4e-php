<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Waermenutzung: string
{
    case SPEICHERHEIZUNG = 'SPEICHERHEIZUNG';
    case WAERMEPUMPE = 'WAERMEPUMPE';
    case DIREKTHEIZUNG = 'DIREKTHEIZUNG';
}
