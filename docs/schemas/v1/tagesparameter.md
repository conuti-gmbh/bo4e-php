## Untitled object in undefined Type

`object` ([Details](tagesparameter.md))

# Untitled object in undefined Properties

| Property                                      | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                |
| :-------------------------------------------- | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [klimazone](#klimazone)                       | `string` | Optional | cannot be null | [Untitled schema](tagesparameter-properties-klimazone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/klimazone")                       |
| [temperaturmessstelle](#temperaturmessstelle) | `string` | Optional | cannot be null | [Untitled schema](tagesparameter-properties-temperaturmessstelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/temperaturmessstelle") |
| [dienstanbieter](#dienstanbieter)             | `string` | Optional | cannot be null | [Untitled schema](tagesparameter-properties-dienstanbieter.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/dienstanbieter")             |
| [herausgeber](#herausgeber)                   | `string` | Optional | cannot be null | [Untitled schema](herausgeber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Herausgeber.schema.json#/properties/herausgeber")                                               |

## klimazone



`klimazone`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](tagesparameter-properties-klimazone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/klimazone")

### klimazone Type

`string`

## temperaturmessstelle



`temperaturmessstelle`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](tagesparameter-properties-temperaturmessstelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/temperaturmessstelle")

### temperaturmessstelle Type

`string`

## dienstanbieter



`dienstanbieter`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](tagesparameter-properties-dienstanbieter.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/dienstanbieter")

### dienstanbieter Type

`string`

## herausgeber



`herausgeber`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](herausgeber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Herausgeber.schema.json#/properties/herausgeber")

### herausgeber Type

`string`

### herausgeber Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value    | Explanation |
| :------- | :---------- |
| `"NB"`   |             |
| `"BDEW"` |             |
| `"TUM"`  |             |
