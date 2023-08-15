## Untitled object in undefined Type

`object` ([Details](rufnummer.md))

# Untitled object in undefined Properties

| Property                  | Type     | Required | Nullable       | Defined by                                                                                                                                                                |
| :------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [nummerntyp](#nummerntyp) | `string` | Optional | cannot be null | [Untitled schema](rufnummernart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rufnummernart.schema.json#/properties/nummerntyp")            |
| [rufnummer](#rufnummer)   | `string` | Optional | cannot be null | [Untitled schema](rufnummer-properties-rufnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rufnummer.schema.json#/properties/rufnummer") |

## nummerntyp



`nummerntyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rufnummernart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rufnummernart.schema.json#/properties/nummerntyp")

### nummerntyp Type

`string`

### nummerntyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value             | Explanation |
| :---------------- | :---------- |
| `"RUF_ZENTRALE"`  |             |
| `"FAX_ZENTRALE"`  |             |
| `"SAMMELRUF"`     |             |
| `"SAMMELFAX"`     |             |
| `"ABTEILUNGRUF"`  |             |
| `"ABTEILUNGFAX"`  |             |
| `"RUF_DURCHWAHL"` |             |
| `"FAX_DURCHWAHL"` |             |
| `"MOBIL_NUMMER"`  |             |

## rufnummer



`rufnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rufnummer-properties-rufnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rufnummer.schema.json#/properties/rufnummer")

### rufnummer Type

`string`
