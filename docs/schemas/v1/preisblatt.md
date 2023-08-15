## Untitled object in undefined Type

`object` ([Details](preisblatt.md))

# Untitled object in undefined Properties

| Property                                  | Type     | Required | Nullable       | Defined by                                                                                                                                                                                   |
| :---------------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                           | `string` | Required | cannot be null | [Untitled schema](preisblatt-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/boTyp")                           |
| [versionStruktur](#versionstruktur)       | `string` | Required | cannot be null | [Untitled schema](preisblatt-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/versionStruktur")       |
| [bezeichnung](#bezeichnung)               | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/bezeichnung")               |
| [gueltigkeit](#gueltigkeit)               | `object` | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/gueltigkeit")                                         |
| [preisstatus](#preisstatus)               | `string` | Optional | cannot be null | [Untitled schema](preisstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Preisstatus.schema.json#/properties/preisstatus")                                  |
| [sparte](#sparte)                         | `string` | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                 |
| [bilanzierungsdatum](#bilanzierungsdatum) | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-bilanzierungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/bilanzierungsdatum") |
| [regelzone](#regelzone)                   | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-regelzone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/regelzone")                   |
| [preispositionen](#preispositionen)       | `array`  | Optional | cannot be null | [Untitled schema](preisblatt-properties-preispositionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/preispositionen")       |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/bezeichnung")

### bezeichnung Type

`string`

## gueltigkeit



`gueltigkeit`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/gueltigkeit")

### gueltigkeit Type

`object` ([Details](zeitraum.md))

## preisstatus



`preisstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Preisstatus.schema.json#/properties/preisstatus")

### preisstatus Type

`string`

### preisstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"VORLAEUFIG"` |             |
| `"ENDGUELTIG"` |             |

## sparte



`sparte`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sparte.schema.json#/properties/sparte")

### sparte Type

`string`

### sparte Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"STROM"`      |             |
| `"GAS"`        |             |
| `"FERNWAERME"` |             |
| `"NAHWAERME"`  |             |
| `"WASSER"`     |             |
| `"ABWASSER"`   |             |

## bilanzierungsdatum



`bilanzierungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-bilanzierungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/bilanzierungsdatum")

### bilanzierungsdatum Type

`string`

## regelzone



`regelzone`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-regelzone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/regelzone")

### regelzone Type

`string`

## preispositionen



`preispositionen`

*   is optional

*   Type: `object[]` ([Details](preisposition.md))

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-preispositionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Preisblatt.schema.json#/properties/preispositionen")

### preispositionen Type

`object[]` ([Details](preisposition.md))
