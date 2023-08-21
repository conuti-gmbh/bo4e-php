## Untitled object in undefined Type

`object` ([Details](fehler.md))

# Untitled object in undefined Properties

| Property                        | Type    | Required | Nullable       | Defined by                                                                                                                                                                 |
| :------------------------------ | :------ | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [typ](#typ)                     | `array` | Optional | cannot be null | [Untitled schema](fehlertyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/FehlerTyp.schema.json#/properties/typ")                            |
| [fehlerDetails](#fehlerdetails) | `array` | Optional | cannot be null | [Untitled schema](fehler-properties-fehlerdetails.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Fehler.schema.json#/properties/fehlerDetails") |

## typ



`typ`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](fehlertyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/FehlerTyp.schema.json#/properties/typ")

### typ Type

`string[]`

## fehlerDetails



`fehlerDetails`

*   is optional

*   Type: `object[]` ([Details](fehlerdetail.md))

*   cannot be null

*   defined in: [Untitled schema](fehler-properties-fehlerdetails.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Fehler.schema.json#/properties/fehlerDetails")

### fehlerDetails Type

`object[]` ([Details](fehlerdetail.md))
