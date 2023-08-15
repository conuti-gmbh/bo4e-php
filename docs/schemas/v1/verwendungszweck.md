## Untitled object in undefined Type

`object` ([Details](verwendungszweck.md))

# Untitled object in undefined Properties

| Property                  | Type     | Required | Nullable       | Defined by                                                                                                                                                                      |
| :------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [marktrolle](#marktrolle) | `string` | Optional | cannot be null | [Untitled schema](martkrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Martkrolle.schema.json#/properties/marktrolle")                        |
| [zweck](#zweck)           | `array`  | Optional | cannot be null | [Untitled schema](verwendungszweck-properties-zweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verwendungszweck.schema.json#/properties/zweck") |

## marktrolle



`marktrolle`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](martkrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Martkrolle.schema.json#/properties/marktrolle")

### marktrolle Type

`string`

### marktrolle Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"NB"`              |             |
| `"LF"`              |             |
| `"MSB"`             |             |
| `"MSBA"`            |             |
| `"GMSB"`            |             |
| `"MDL"`             |             |
| `"DL"`              |             |
| `"BKV"`             |             |
| `"BKO"`             |             |
| `"UENB"`            |             |
| `"KUNDE-SELBST-NN"` |             |
| `"MGV"`             |             |
| `"EIV"`             |             |
| `"RB"`              |             |
| `"KUNDE"`           |             |
| `"INTERESSENT"`     |             |
| `"KN"`              |             |
| `"UBA"`             |             |

## zweck



`zweck`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](verwendungszweck-properties-zweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Verwendungszweck.schema.json#/properties/zweck")

### zweck Type

`string[]`
