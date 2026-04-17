<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Inbetriebsetzung: string
{
    case INBETRIEBSETZUNG_NACH_2023 = 'INBETRIEBSETZUNG_NACH_2023';
    case INBETRIEBSETZUNG_VOR_2024 = 'INBETRIEBSETZUNG_VOR_2024';
}
