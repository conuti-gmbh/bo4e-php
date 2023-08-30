<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Sperrauftragsablehngrund
{
    public const DUPLIKAT = 'DUPLIKAT';
    public const FALSCHER_MSB = 'FALSCHER_MSB';
    public const FALSCHE_SPANNUNGSEBENE = 'FALSCHE_SPANNUNGSEBENE';
    public const WEITERE_MALO_BETROFFEN = 'WEITERE_MALO_BETROFFEN';
    public const ANDERER_ABLEHNGRUND = 'ANDERER_ABLEHNGRUND';
    public const FRISTVERLETZUNG_TERMINGEBUNDEN = 'FRISTVERLETZUNG_TERMINGEBUNDEN';
    public const FRISTVERLETZUNG_NICHT_TERMINGEBUNDEN = 'FRISTVERLETZUNG_NICHT_TERMINGEBUNDEN';
    public const ANDERER_FEHLER = 'ANDERER_FEHLER';
    public const LIEGT_BEREITS_VOR = 'LIEGT_BEREITS_VOR';
    public const ANDERER_ZUKUENFTIGER_LIEFERANT = 'ANDERER_ZUKUENFTIGER_LIEFERANT';
    public const BESTAETIGTER_LIEFERBEGINN = 'BESTAETIGTER_LIEFERBEGINN';
}
