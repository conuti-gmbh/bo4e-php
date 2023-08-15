## Untitled object in undefined Type

`object` ([Details](konzessionsabgabe.md))

# Untitled object in undefined Properties

| Property                | Type     | Required | Nullable       | Defined by                                                                                                                                                                                |
| :---------------------- | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [satz](#satz)           | `string` | Optional | cannot be null | [Untitled schema](abgabeart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/AbgabeArt.schema.json#/properties/satz")                                          |
| [kosten](#kosten)       | `number` | Optional | cannot be null | [Untitled schema](konzessionsabgabe-properties-kosten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/kosten")       |
| [kategorie](#kategorie) | `string` | Optional | cannot be null | [Untitled schema](konzessionsabgabe-properties-kategorie.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/kategorie") |

## satz



`satz`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](abgabeart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/AbgabeArt.schema.json#/properties/satz")

### satz Type

`string`

### satz Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value   | Explanation |
| :------ | :---------- |
| `"KAS"` |             |
| `"SA"`  |             |
| `"SAS"` |             |
| `"TA"`  |             |
| `"TAS"` |             |
| `"TK"`  |             |
| `"TKS"` |             |
| `"TS"`  |             |
| `"TSS"` |             |

## kosten



`kosten`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](konzessionsabgabe-properties-kosten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/kosten")

### kosten Type

`number`

### kosten Constraints

**unknown format**: the value of this string must follow the format: `float`

## kategorie



`kategorie`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](konzessionsabgabe-properties-kategorie.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/kategorie")

### kategorie Type

`string`
