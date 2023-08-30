<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Interface;

interface Auftragsstatus
{
    public const GESCHEITERT = 'GESCHEITERT';
    public const ERFOLGREICH = 'ERFOLGREICH';
    public const LIEFERUNG_GEPLANT = 'LIEFERUNG_GEPLANT';
    public const GEPLANT = 'GEPLANT';
    public const ZUGESTIMMT = 'ZUGESTIMMT';
    public const WIDERSPROCHEN = 'WIDERSPROCHEN';
    public const STOERUNGSFREI = 'STOERUNGSFREI';
    public const GESTOERT = 'GESTOERT';
    public const FESTGESTELLTE_STOERUNG = 'FESTGESTELLTE_STOERUNG';
    public const VERMUTETE_STOERUNG = 'VERMUTETE_STOERUNG';
    public const ABGELEHNT = 'ABGELEHNT';
    public const BEENDET = 'BEENDET';
    public const ANTWORT_DRITTER = 'ANTWORT_DRITTER';
}
