## Untitled object in undefined Type

`object` ([Details](statuszusatzinformation.md))

# Untitled object in undefined Properties

| Property          | Type     | Required | Nullable       | Defined by                                                                                                                                      |
| :---------------- | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------- |
| [art](#art)       | `string` | Optional | cannot be null | [Untitled schema](statusart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/StatusArt.schema.json#/properties/art") |
| [status](#status) | `string` | Optional | cannot be null | [Untitled schema](status.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Status.schema.json#/properties/status")    |

## art



`art`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/StatusArt.schema.json#/properties/art")

### art Type

`string`

### art Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                 | Explanation |
| :------------------------------------ | :---------- |
| `"PLAUSIBILISIERUNGSHINWEIS"`         |             |
| `"ERSATZWERTBILDUNGSVERFAHREN"`       |             |
| `"KORREKTURGRUND"`                    |             |
| `"GRUND_ERSATZWERTBILDUNGSVERFAHREN"` |             |
| `"GASQUALITAET"`                      |             |
| `"MESSKLASSIFIZIERUNG"`               |             |

## status



`status`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](status.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Status.schema.json#/properties/status")

### status Type

`string`

### status Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                                                        | Explanation |
| :------------------------------------------------------------------------------------------- | :---------- |
| `"KUNDENSELBSTABLESUNG"`                                                                     |             |
| `"LEERSTAND"`                                                                                |             |
| `"REALER_ZAEHLERUEBERLAUF_GEPRUEFT"`                                                         |             |
| `"PLAUSIBEL_WG_KONTROLLABLESUNG"`                                                            |             |
| `"PLAUSIBEL_WG_KUNDENHINWEIS"`                                                               |             |
| `"AUSTAUSCH_DES_ERSATZWERTES"`                                                               |             |
| `"RECHENWERT"`                                                                               |             |
| `"BASIS_MME"`                                                                                |             |
| `"VERGLEICHSMESSUNG_GEEICHT"`                                                                |             |
| `"VERGLEICHSMESSUNG_NICHT_GEEICHT"`                                                          |             |
| `"MESSWERTNACHBILDUNG_AUS_GEEICHTEN_WERTEN"`                                                 |             |
| `"MESSWERTNACHBILDUNG_AUS_NICHT_GEEICHTEN_WERTEN"`                                           |             |
| `"INTERPOLATION"`                                                                            |             |
| `"HALTEWERT"`                                                                                |             |
| `"BILANZIERUNG_NETZABSCHNITT"`                                                               |             |
| `"HISTORISCHE_MESSWERTE"`                                                                    |             |
| `"STATISTISCHE_METHODE"`                                                                     |             |
| `"AUFTEILUNG"`                                                                               |             |
| `"VERWENDUNG_VON_WERTEN_DES_STOERMENGENZAEHLWERKS"`                                          |             |
| `"UMGANGS_UND_KORREKTURMENGEN"`                                                              |             |
| `"ANGABEN_MESSLOKATION"`                                                                     |             |
| `"KEIN_ZUGANG"`                                                                              |             |
| `"KOMMUNIKATIONSSTOERUNG"`                                                                   |             |
| `"NETZAUSFALL"`                                                                              |             |
| `"SPANNUNGSAUSFALL"`                                                                         |             |
| `"STATUS_GERAETEWECHSEL"`                                                                    |             |
| `"KALIBRIERUNG"`                                                                             |             |
| `"GERAET_ARBEITET_AUSSERHALB_DER_BETRIEBSBEDINGUNGEN"`                                       |             |
| `"MESSEINRICHTUNG_GESTOERT_DEFEKT"`                                                          |             |
| `"UNSICHERHEIT_MESSUNG"`                                                                     |             |
| `"BERUECKSICHTIGUNG_STOERMENGENZAEHLWERK"`                                                   |             |
| `"MENGENUMWERTUNG_VOLLSTAENDIG"`                                                             |             |
| `"UHRZEIT_GESTELLT_SYNCHRONISATION"`                                                         |             |
| `"MESSWERT_UNPLAUSIBEL"`                                                                     |             |
| `"FALSCHER_WANDLERFAKTOR"`                                                                   |             |
| `"FEHLERHAFTE_ABLESUNG"`                                                                     |             |
| `"AENDERUNG_DER_BERECHNUNG"`                                                                 |             |
| `"UMBAU_DER_MESSLOKATION"`                                                                   |             |
| `"DATENBEARBEITUNGSFEHLER"`                                                                  |             |
| `"BRENNWERTKORREKTUR"`                                                                       |             |
| `"Z_ZAHL_KORREKTUR"`                                                                         |             |
| `"STOERUNG_DEFEKT_MESSEINRICHTUNG"`                                                          |             |
| `"AENDERUNG_TARIFSCHALTZEITEN"`                                                              |             |
| `"TARIFSCHALTGERAET_DEFEKT"`                                                                 |             |
| `"IMPULSWERTIGKEIT_NICHT_AUSREICHEND"`                                                       |             |
| `"ENERGIEMENGE_IN_UNGEMESSENEM_ZEITINTERVALL"`                                               |             |
| `"ENERGIEMENGE_AUS_DEM_UNGEPAIRTEN_ZEITINTERVALL"`                                           |             |
| `"WARTUNGSARBEITEN_AN_GEEICHTEM_MESSGERAET"`                                                 |             |
| `"GESTOERTE_WERTE"`                                                                          |             |
| `"WARTUNGSARBEITEN_AN_EICHRECHTSKONFORMEN_MESSGERAETEN"`                                     |             |
| `"KONSISTENZ_UND_SYNCHRONPRUEFUNG"`                                                          |             |
| `"GRUND_ANGABEN_MESSLOKATION"`                                                               |             |
| `"UMSTELLUNG_GASQUALITAET"`                                                                  |             |
| `"ZAEHLERSTAND_ZUM_BEGINN_DER_ANGEGEBENEN_ENERGIEMENGE_VORHANDEN_UND_KOMMUNIZIERT"`          |             |
| `"ZAEHLERSTAND_ZUM_ENDE_DER_ANGEGEBENEN_ENERGIEMENGE_VORHANDEN_UND_KOMMUNIZIERT"`            |             |
| `"ZAEHLERSTAND_ZUM_BEGINN_DER_ANGEGEBENEN_ENERGIEMENGE_NICHT_VORHANDEN_DA_MENGENABGRENZUNG"` |             |
| `"ZAEHLERSTAND_ZUM_ENDE_DER_ANGEGEBENEN_ENERGIEMENGE_NICHT_VORHANDEN_DA_MENGENABGRENZUNG"`   |             |
| `"GESCHEITERT"`                                                                              |             |
| `"AUSGEBAUT"`                                                                                |             |
