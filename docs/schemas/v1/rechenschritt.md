## Untitled object in undefined Type

`object` ([Details](rechenschritt.md))

# Untitled object in undefined Properties

| Property                                                  | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                          |
| :-------------------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [rechenschrittBestandteilId](#rechenschrittbestandteilid) | `integer` | Optional | cannot be null | [Untitled schema](rechenschritt-properties-rechenschrittbestandteilid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/rechenschrittBestandteilId") |
| [referenzRechenschrittId](#referenzrechenschrittid)       | `integer` | Optional | cannot be null | [Untitled schema](rechenschritt-properties-referenzrechenschrittid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/referenzRechenschrittId")       |
| [operation](#operation)                                   | `string`  | Optional | cannot be null | [Untitled schema](arithmetischeoperation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ArithmetischeOperation.schema.json#/properties/operation")                                     |
| [verlustfaktorTrafo](#verlustfaktortrafo)                 | `number`  | Optional | cannot be null | [Untitled schema](rechenschritt-properties-verlustfaktortrafo.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/verlustfaktorTrafo")                 |
| [verlustfaktorLeitung](#verlustfaktorleitung)             | `number`  | Optional | cannot be null | [Untitled schema](rechenschritt-properties-verlustfaktorleitung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/verlustfaktorLeitung")             |
| [messlokationsId](#messlokationsid)                       | `string`  | Optional | cannot be null | [Untitled schema](rechenschritt-properties-messlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/messlokationsId")                       |
| [energieflussrichtung](#energieflussrichtung)             | `string`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energieflussrichtung")                                        |

## rechenschrittBestandteilId



`rechenschrittBestandteilId`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](rechenschritt-properties-rechenschrittbestandteilid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/rechenschrittBestandteilId")

### rechenschrittBestandteilId Type

`integer`

## referenzRechenschrittId



`referenzRechenschrittId`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](rechenschritt-properties-referenzrechenschrittid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/referenzRechenschrittId")

### referenzRechenschrittId Type

`integer`

## operation



`operation`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](arithmetischeoperation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ArithmetischeOperation.schema.json#/properties/operation")

### operation Type

`string`

### operation Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"ADDITION"`       |             |
| `"SUBTRAKTION"`    |             |
| `"DIVISION"`       |             |
| `"DIVIDEND"`       |             |
| `"MULTIPLIKATION"` |             |
| `"POSITIVWERT"`    |             |

## verlustfaktorTrafo



`verlustfaktorTrafo`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](rechenschritt-properties-verlustfaktortrafo.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/verlustfaktorTrafo")

### verlustfaktorTrafo Type

`number`

## verlustfaktorLeitung



`verlustfaktorLeitung`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](rechenschritt-properties-verlustfaktorleitung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/verlustfaktorLeitung")

### verlustfaktorLeitung Type

`number`

## messlokationsId



`messlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechenschritt-properties-messlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/messlokationsId")

### messlokationsId Type

`string`

## energieflussrichtung



`energieflussrichtung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energieflussrichtung")

### energieflussrichtung Type

`string`

### energieflussrichtung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"AUSSP"` |             |
| `"EINSP"` |             |
