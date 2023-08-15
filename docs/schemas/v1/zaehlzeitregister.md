## Untitled object in undefined Type

`object` ([Details](zaehlzeitregister.md))

# Untitled object in undefined Properties

| Property                                    | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                    |
| :------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [satz](#satz)                               | `string` | Optional | cannot be null | [Untitled schema](abgabeart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/AbgabeArt.schema.json#/properties/satz")                                                              |
| [register](#register)                       | `string` | Optional | cannot be null | [Untitled schema](zaehlzeitregister-properties-register.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/register")                       |
| [zaehlzeitDefinition](#zaehlzeitdefinition) | `string` | Optional | cannot be null | [Untitled schema](zaehlzeitregister-properties-zaehlzeitdefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/zaehlzeitDefinition") |
| [schwachlastfaehig](#schwachlastfaehig)     | `string` | Optional | cannot be null | [Untitled schema](schwachlastfaehig.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Schwachlastfaehig.schema.json#/properties/schwachlastfaehig")                                 |

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

## register



`register`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeitregister-properties-register.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/register")

### register Type

`string`

## zaehlzeitDefinition



`zaehlzeitDefinition`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeitregister-properties-zaehlzeitdefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/zaehlzeitDefinition")

### zaehlzeitDefinition Type

`string`

## schwachlastfaehig



`schwachlastfaehig`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schwachlastfaehig.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Schwachlastfaehig.schema.json#/properties/schwachlastfaehig")

### schwachlastfaehig Type

`string`

### schwachlastfaehig Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                       | Explanation |
| :-------------------------- | :---------- |
| `"SCHWACHLASTFAEHIG"`       |             |
| `"NICHT_SCHWACHLASTFAEHIG"` |             |
