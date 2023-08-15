## Untitled object in undefined Type

`object` ([Details](zuschlag.md))

# Untitled object in undefined Properties

| Property            | Type     | Required | Nullable       | Defined by                                                                                                                                                          |
| :------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [typ](#typ)         | `string` | Required | cannot be null | [Untitled schema](zuschlagtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ZuschlagTyp.schema.json#/properties/typ")                 |
| [prozent](#prozent) | `number` | Required | cannot be null | [Untitled schema](zuschlag-properties-prozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zuschlag.schema.json#/properties/prozent") |

## typ



`typ`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zuschlagtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ZuschlagTyp.schema.json#/properties/typ")

### typ Type

`string`

### typ Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                            | Explanation |
| :------------------------------- | :---------- |
| `"UMSPANNUNGSZUSCHLAG"`          |             |
| `"BETRIEBSMITTEL_P19_STROM_NEV"` |             |
| `"ANPASSUNG_P19_STROM_NEV"`      |             |

## prozent



`prozent`

*   is required

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](zuschlag-properties-prozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zuschlag.schema.json#/properties/prozent")

### prozent Type

`number`
