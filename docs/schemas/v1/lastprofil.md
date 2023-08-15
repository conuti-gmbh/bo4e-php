## Untitled object in undefined Type

`object` ([Details](lastprofil.md))

# Untitled object in undefined Properties

| Property                          | Type      | Required | Nullable       | Defined by                                                                                                                                                                      |
| :-------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [bezeichnung](#bezeichnung)       | `string`  | Optional | cannot be null | [Untitled schema](lastprofil-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/bezeichnung") |
| [verfahren](#verfahren)           | `string`  | Optional | cannot be null | [Untitled schema](profilverfahren.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Profilverfahren.schema.json#/properties/verfahren")               |
| [profilart](#profilart)           | `string`  | Optional | cannot be null | [Untitled schema](profilart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Profilart.schema.json#/properties/profilart")                           |
| [profilschar](#profilschar)       | `string`  | Optional | cannot be null | [Untitled schema](lastprofil-properties-profilschar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/profilschar") |
| [einspeisung](#einspeisung)       | `boolean` | Optional | cannot be null | [Untitled schema](lastprofil-properties-einspeisung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/einspeisung") |
| [herausgeber](#herausgeber)       | `string`  | Optional | cannot be null | [Untitled schema](lastprofil-properties-herausgeber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/herausgeber") |
| [tagesparameter](#tagesparameter) | `object`  | Optional | cannot be null | [Untitled schema](tagesparameter.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/tagesparameter")             |

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lastprofil-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/bezeichnung")

### bezeichnung Type

`string`

## verfahren



`verfahren`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](profilverfahren.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Profilverfahren.schema.json#/properties/verfahren")

### verfahren Type

`string`

### verfahren Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value           | Explanation |
| :-------------- | :---------- |
| `"SYNTHETISCH"` |             |
| `"ANALYTISCH"`  |             |

## profilart



`profilart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](profilart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Profilart.schema.json#/properties/profilart")

### profilart Type

`string`

### profilart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                        | Explanation |
| :------------------------------------------- | :---------- |
| `"ART_STANDARDLASTPROFIL"`                   |             |
| `"ART_TAGESPARAMETERABHAENGIGES_LASTPROFIL"` |             |
| `"ART_LASTPROFIL"`                           |             |

## profilschar



`profilschar`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lastprofil-properties-profilschar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/profilschar")

### profilschar Type

`string`

## einspeisung



`einspeisung`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](lastprofil-properties-einspeisung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/einspeisung")

### einspeisung Type

`boolean`

## herausgeber



`herausgeber`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lastprofil-properties-herausgeber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Lastprofil.schema.json#/properties/herausgeber")

### herausgeber Type

`string`

## tagesparameter



`tagesparameter`

*   is optional

*   Type: `object` ([Details](tagesparameter.md))

*   cannot be null

*   defined in: [Untitled schema](tagesparameter.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Tagesparameter.schema.json#/properties/tagesparameter")

### tagesparameter Type

`object` ([Details](tagesparameter.md))
