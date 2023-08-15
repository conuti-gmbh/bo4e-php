## Untitled object in undefined Type

`object` ([Details](angebotsvariante.md))

# Untitled object in undefined Properties

| Property                          | Type     | Required | Nullable       | Defined by                                                                                                                                                                                    |
| :-------------------------------- | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [angebotsstatus](#angebotsstatus) | `string` | Optional | cannot be null | [Untitled schema](angebotsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Angebotsstatus.schema.json#/properties/angebotsstatus")                          |
| [beschreibung](#beschreibung)     | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/beschreibung") |
| [erstelldatum](#erstelldatum)     | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-erstelldatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/erstelldatum") |
| [bindefrist](#bindefrist)         | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-bindefrist.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/bindefrist")     |
| [gesamtmenge](#gesamtmenge)       | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/gesamtmenge")                                                |
| [gesamtkosten](#gesamtkosten)     | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtkosten")                                             |
| [teile](#teile)                   | `array`  | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-teile.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/teile")               |

## angebotsstatus



`angebotsstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Angebotsstatus.schema.json#/properties/angebotsstatus")

### angebotsstatus Type

`string`

### angebotsstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value             | Explanation |
| :---------------- | :---------- |
| `"KONZEPTION"`    |             |
| `"UNVERBINDLICH"` |             |
| `"VERBINDLICH"`   |             |
| `"BEAUFTRAGT"`    |             |
| `"UNGUELTIG"`     |             |
| `"ABGELEHNT"`     |             |
| `"NACHGEFASST"`   |             |
| `"AUSSTEHEND"`    |             |
| `"ERLEDIGT"`      |             |

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/beschreibung")

### beschreibung Type

`string`

## erstelldatum



`erstelldatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-erstelldatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/erstelldatum")

### erstelldatum Type

`string`

### erstelldatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## bindefrist



`bindefrist`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-bindefrist.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/bindefrist")

### bindefrist Type

`string`

### bindefrist Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## gesamtmenge



`gesamtmenge`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/gesamtmenge")

### gesamtmenge Type

`object` ([Details](menge.md))

## gesamtkosten



`gesamtkosten`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtkosten")

### gesamtkosten Type

`object` ([Details](betrag.md))

## teile



`teile`

*   is optional

*   Type: `object[]` ([Details](angebotsteil.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-teile.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsvariante.schema.json#/properties/teile")

### teile Type

`object[]` ([Details](angebotsteil.md))
