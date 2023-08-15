<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Auftragsstatus: string
{
    case GESCHEITERT = 'GESCHEITERT';
    case ERFOLGREICH = 'ERFOLGREICH';
    case LIEFERUNG_GEPLANT = 'LIEFERUNG_GEPLANT';
    case GEPLANT = 'GEPLANT';
    case ZUGESTIMMT = 'ZUGESTIMMT';
    case WIDERSPROCHEN = 'WIDERSPROCHEN';
    case STOERUNGSFREI = 'STOERUNGSFREI';
    case GESTOERT = 'GESTOERT';
    case FESTGESTELLTE_STOERUNG = 'FESTGESTELLTE_STOERUNG';
    case VERMUTETE_STOERUNG = 'VERMUTETE_STOERUNG';
    case ABGELEHNT = 'ABGELEHNT';
    case BEENDET = 'BEENDET';
    case ANTWORT_DRITTER = 'ANTWORT_DRITTER';
}
