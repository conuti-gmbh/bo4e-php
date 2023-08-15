## Untitled object in undefined Type

`object` ([Details](preis.md))

# Untitled object in undefined Properties

| Property                  | Type     | Required | Nullable       | Defined by                                                                                                                                                        |
| :------------------------ | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [wert](#wert)             | `number` | Optional | cannot be null | [Untitled schema](preis-properties-wert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/wert")           |
| [einheit](#einheit)       | `string` | Optional | cannot be null | [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/einheit") |
| [bezugswert](#bezugswert) | `string` | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugswert")    |
| [status](#status)         | `string` | Optional | cannot be null | [Untitled schema](preisstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Preisstatus.schema.json#/properties/status")            |

## wert



`wert`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](preis-properties-wert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/wert")

### wert Type

`number`

## einheit



`einheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/einheit")

### einheit Type

`string`

### einheit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value   | Explanation |
| :------ | :---------- |
| `"EUR"` |             |
| `"CT"`  |             |

## bezugswert



`bezugswert`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugswert")

### bezugswert Type

`string`

### bezugswert Constraints

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

## status



`status`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Preisstatus.schema.json#/properties/status")

### status Type

`string`

### status Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"VORLAEUFIG"` |             |
| `"ENDGUELTIG"` |             |
