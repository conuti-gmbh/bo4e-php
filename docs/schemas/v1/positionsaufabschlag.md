## Untitled object in undefined Type

`object` ([Details](positionsaufabschlag.md))

# Untitled object in undefined Properties

| Property                                      | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                    |
| :-------------------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [bezeichnung](#bezeichnung)                   | `string` | Optional | cannot be null | [Untitled schema](positionsaufabschlag-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/bezeichnung")           |
| [beschreibung](#beschreibung)                 | `string` | Optional | cannot be null | [Untitled schema](positionsaufabschlag-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/beschreibung")         |
| [aufAbschlagstyp](#aufabschlagstyp)           | `string` | Optional | cannot be null | [Untitled schema](aufabschlagstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/AufAbschlagstyp.schema.json#/properties/aufAbschlagstyp")                                       |
| [aufAbschlagswert](#aufabschlagswert)         | `number` | Optional | cannot be null | [Untitled schema](positionsaufabschlag-properties-aufabschlagswert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/aufAbschlagswert") |
| [aufAbschlagswaehrung](#aufabschlagswaehrung) | `string` | Optional | cannot be null | [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/aufAbschlagswaehrung")                                |

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](positionsaufabschlag-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/bezeichnung")

### bezeichnung Type

`string`

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](positionsaufabschlag-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/beschreibung")

### beschreibung Type

`string`

## aufAbschlagstyp



`aufAbschlagstyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](aufabschlagstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/AufAbschlagstyp.schema.json#/properties/aufAbschlagstyp")

### aufAbschlagstyp Type

`string`

### aufAbschlagstyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value       | Explanation |
| :---------- | :---------- |
| `"RELATIV"` |             |
| `"ABSOLUT"` |             |

## aufAbschlagswert



`aufAbschlagswert`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](positionsaufabschlag-properties-aufabschlagswert.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/PositionsAufAbschlag.schema.json#/properties/aufAbschlagswert")

### aufAbschlagswert Type

`number`

## aufAbschlagswaehrung



`aufAbschlagswaehrung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/aufAbschlagswaehrung")

### aufAbschlagswaehrung Type

`string`

### aufAbschlagswaehrung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value   | Explanation |
| :------ | :---------- |
| `"EUR"` |             |
| `"CT"`  |             |
