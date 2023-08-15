## Untitled object in undefined Type

`object` ([Details](zeitraum.md))

# Untitled object in undefined Properties

| Property                                    | Type     | Required | Nullable       | Defined by                                                                                                                                                                                  |
| :------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [zeiteinheit](#zeiteinheit)                 | `string` | Optional | cannot be null | [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeiteinheit")                                 |
| [dauer](#dauer)                             | `number` | Optional | cannot be null | [Untitled schema](zeitraum-properties-dauer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/dauer")                             |
| [startdatum](#startdatum)                   | `string` | Optional | cannot be null | [Untitled schema](zeitraum-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/startdatum")                   |
| [enddatum](#enddatum)                       | `string` | Optional | cannot be null | [Untitled schema](zeitraum-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/enddatum")                       |
| [einheit](#einheit)                         | `string` | Optional | cannot be null | [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/einheit")                                     |
| [ableseZeitraum](#ablesezeitraum)           | `string` | Optional | cannot be null | [Untitled schema](zeitraum-properties-ablesezeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/ableseZeitraum")           |
| [abrechnungsZeitraum](#abrechnungszeitraum) | `string` | Optional | cannot be null | [Untitled schema](zeitraum-properties-abrechnungszeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/abrechnungsZeitraum") |
| [zeitraumText](#zeitraumtext)               | `string` | Optional | cannot be null | [Untitled schema](zeitraum-properties-zeitraumtext.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/zeitraumText")               |

## zeiteinheit



`zeiteinheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeiteinheit")

### zeiteinheit Type

`string`

### zeiteinheit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"SEKUNDE"`        |             |
| `"MINUTE"`         |             |
| `"STUNDE"`         |             |
| `"VIERTEL_STUNDE"` |             |
| `"TAG"`            |             |
| `"WOCHE"`          |             |
| `"MONAT"`          |             |
| `"QUARTAL"`        |             |
| `"HALBJAHR"`       |             |
| `"JAHR"`           |             |

## dauer



`dauer`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-dauer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/dauer")

### dauer Type

`number`

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/startdatum")

### startdatum Type

`string`

## enddatum



`enddatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/enddatum")

### enddatum Type

`string`

## einheit



`einheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/einheit")

### einheit Type

`string`

### einheit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"SEKUNDE"`        |             |
| `"MINUTE"`         |             |
| `"STUNDE"`         |             |
| `"VIERTEL_STUNDE"` |             |
| `"TAG"`            |             |
| `"WOCHE"`          |             |
| `"MONAT"`          |             |
| `"QUARTAL"`        |             |
| `"HALBJAHR"`       |             |
| `"JAHR"`           |             |

## ableseZeitraum



`ableseZeitraum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-ablesezeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/ableseZeitraum")

### ableseZeitraum Type

`string`

## abrechnungsZeitraum



`abrechnungsZeitraum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-abrechnungszeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/abrechnungsZeitraum")

### abrechnungsZeitraum Type

`string`

## zeitraumText



`zeitraumText`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitraum-properties-zeitraumtext.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/zeitraumText")

### zeitraumText Type

`string`
