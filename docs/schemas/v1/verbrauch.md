## Untitled object in undefined Type

`object` ([Details](verbrauch.md))

# Untitled object in undefined Properties

| Property                                                | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                |
| :------------------------------------------------------ | :-------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [startdatum](#startdatum)                               | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/startdatum")                               |
| [enddatum](#enddatum)                                   | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/enddatum")                                   |
| [wertermittlungsverfahren](#wertermittlungsverfahren)   | `string`  | Optional | cannot be null | [Untitled schema](wertermittlungsverfahren.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Wertermittlungsverfahren.schema.json#/properties/wertermittlungsverfahren")        |
| [messwertstatus](#messwertstatus)                       | `string`  | Optional | cannot be null | [Untitled schema](messwertstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Messwertstatus.schema.json#/properties/messwertstatus")                                      |
| [obiskennzahl](#obiskennzahl)                           | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/obiskennzahl")                           |
| [wert](#wert)                                           | `number`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-wert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/wert")                                           |
| [einheit](#einheit)                                     | `string`  | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/einheit")                                               |
| [type](#type)                                           | `string`  | Optional | cannot be null | [Untitled schema](verbrauchsmengetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verbrauchsmengetyp.schema.json#/properties/type")                                        |
| [tarifstufe](#tarifstufe)                               | `string`  | Optional | cannot be null | [Untitled schema](tarifstufe.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifstufe.schema.json#/properties/tarifstufe")                                                  |
| [nutzungszeitpunkt](#nutzungszeitpunkt)                 | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-nutzungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/nutzungszeitpunkt")                 |
| [ausfuehrungszeitpunkt](#ausfuehrungszeitpunkt)         | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-ausfuehrungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/ausfuehrungszeitpunkt")         |
| [position](#position)                                   | `integer` | Optional | cannot be null | [Untitled schema](verbrauch-properties-position.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/position")                                   |
| [ablesedatum](#ablesedatum)                             | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-ablesedatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/ablesedatum")                             |
| [leistungsperiode](#leistungsperiode)                   | `string`  | Optional | cannot be null | [Untitled schema](verbrauch-properties-leistungsperiode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/leistungsperiode")                   |
| [statuszusatzinformationen](#statuszusatzinformationen) | `array`   | Optional | cannot be null | [Untitled schema](verbrauch-properties-statuszusatzinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/statuszusatzinformationen") |

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/startdatum")

### startdatum Type

`string`

## enddatum



`enddatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/enddatum")

### enddatum Type

`string`

## wertermittlungsverfahren



`wertermittlungsverfahren`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wertermittlungsverfahren.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Wertermittlungsverfahren.schema.json#/properties/wertermittlungsverfahren")

### wertermittlungsverfahren Type

`string`

### wertermittlungsverfahren Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value        | Explanation |
| :----------- | :---------- |
| `"PROGNOSE"` |             |
| `"MESSUNG"`  |             |

## messwertstatus



`messwertstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messwertstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Messwertstatus.schema.json#/properties/messwertstatus")

### messwertstatus Type

`string`

### messwertstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                        | Explanation |
| :--------------------------- | :---------- |
| `"ABGELESEN"`                |             |
| `"ERSATZWERT"`               |             |
| `"VORSCHLAGSWERT"`           |             |
| `"NICHT_VERWENDBAR"`         |             |
| `"PROGNOSEWERT"`             |             |
| `"ENERGIEMENGESUMMIERT"`     |             |
| `"VOLAEUFIGERWERT"`          |             |
| `"FEHLT"`                    |             |
| `"ANGABE_FUER_LIEFERSCHEIN"` |             |

## obiskennzahl



`obiskennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/obiskennzahl")

### obiskennzahl Type

`string`

## wert



`wert`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-wert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/wert")

### wert Type

`number`

## einheit



`einheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/einheit")

### einheit Type

`string`

### einheit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"W"`          |             |
| `"WH"`         |             |
| `"KW"`         |             |
| `"KWH"`        |             |
| `"KVARH"`      |             |
| `"MW"`         |             |
| `"MWH"`        |             |
| `"STUECK"`     |             |
| `"KUBIKMETER"` |             |
| `"STUNDE"`     |             |
| `"TAG"`        |             |
| `"MONAT"`      |             |
| `"JAHR"`       |             |
| `"PROZENT"`    |             |
| `"ANZAHL"`     |             |
| `"VAR"`        |             |
| `"KVAR"`       |             |
| `"VARH"`       |             |
| `"KWHK"`       |             |

## type



`type`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauchsmengetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verbrauchsmengetyp.schema.json#/properties/type")

### type Type

`string`

### type Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                   | Explanation |
| :-------------------------------------- | :---------- |
| `"ARBEITLEISTUNGTAGESPARAMETERABHMALO"` |             |
| `"VERANSCHLAGTEJAHRESMENGE"`            |             |
| `"TUMKUNDENWERT"`                       |             |

## tarifstufe



`tarifstufe`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](tarifstufe.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifstufe.schema.json#/properties/tarifstufe")

### tarifstufe Type

`string`

### tarifstufe Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"TARIFSTUFE_0"` |             |
| `"TARIFSTUFE_1"` |             |
| `"TARIFSTUFE_2"` |             |
| `"TARIFSTUFE_3"` |             |
| `"TARIFSTUFE_4"` |             |
| `"TARIFSTUFE_5"` |             |
| `"TARIFSTUFE_6"` |             |
| `"TARIFSTUFE_7"` |             |
| `"TARIFSTUFE_8"` |             |
| `"TARIFSTUFE_9"` |             |

## nutzungszeitpunkt



`nutzungszeitpunkt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-nutzungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/nutzungszeitpunkt")

### nutzungszeitpunkt Type

`string`

## ausfuehrungszeitpunkt



`ausfuehrungszeitpunkt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-ausfuehrungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/ausfuehrungszeitpunkt")

### ausfuehrungszeitpunkt Type

`string`

## position



`position`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-position.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/position")

### position Type

`integer`

## ablesedatum



`ablesedatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-ablesedatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/ablesedatum")

### ablesedatum Type

`string`

## leistungsperiode



`leistungsperiode`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-leistungsperiode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/leistungsperiode")

### leistungsperiode Type

`string`

## statuszusatzinformationen



`statuszusatzinformationen`

*   is optional

*   Type: `object[]` ([Details](statuszusatzinformation.md))

*   cannot be null

*   defined in: [Untitled schema](verbrauch-properties-statuszusatzinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verbrauch.schema.json#/properties/statuszusatzinformationen")

### statuszusatzinformationen Type

`object[]` ([Details](statuszusatzinformation.md))
