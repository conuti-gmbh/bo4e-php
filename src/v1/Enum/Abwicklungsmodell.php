<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Abwicklungsmodell: string
{
    case MODELL_1_BILANZIERUNG_AN_MARKTLOKATION = 'MODELL_1_BILANZIERUNG_AN_MARKTLOKATION';
    case MODELL_2_BILANZIERUNG_IM_BILANZIERUNGSGEBIET = 'MODELL_2_BILANZIERUNG_IM_BILANZIERUNGSGEBIET';
}
