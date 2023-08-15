## Untitled object in undefined Type

`object` ([Details](energieherkunft.md))

# Untitled object in undefined Properties

| Property                        | Type     | Required | Nullable       | Defined by                                                                                                                                                                                    |
| :------------------------------ | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [erzeugungsart](#erzeugungsart) | `string` | Optional | cannot be null | [Untitled schema](erzeugungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Erzeugungsart.schema.json#/properties/erzeugungsart")                             |
| [anteilProzent](#anteilprozent) | `number` | Optional | cannot be null | [Untitled schema](energieherkunft-properties-anteilprozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Energieherkunft.schema.json#/properties/anteilProzent") |

## erzeugungsart



`erzeugungsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](erzeugungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Erzeugungsart.schema.json#/properties/erzeugungsart")

### erzeugungsart Type

`string`

### erzeugungsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"EEG"`          |             |
| `"KWK"`          |             |
| `"EEG_DV"`       |             |
| `"KWK_DV"`       |             |
| `"WIND"`         |             |
| `"SOLAR"`        |             |
| `"KERNKRAFT"`    |             |
| `"WASSER"`       |             |
| `"GEOTHERMIE"`   |             |
| `"BIOMASSE"`     |             |
| `"KOHLE"`        |             |
| `"GAS"`          |             |
| `"SONSTIGE"`     |             |
| `"SONSTIGE_EEG"` |             |

## anteilProzent



`anteilProzent`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](energieherkunft-properties-anteilprozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Energieherkunft.schema.json#/properties/anteilProzent")

### anteilProzent Type

`number`

### anteilProzent Constraints

**unknown format**: the value of this string must follow the format: `float`
