## Untitled object in undefined Type

`object` ([Details](berechnungsformel.md))

# Untitled object in undefined Properties

| Property                              | Type      | Required | Nullable       | Defined by                                                                                                                                                                                             |
| :------------------------------------ | :-------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                       | `string`  | Required | cannot be null | [Untitled schema](berechnungsformel-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/boTyp")                       |
| [versionStruktur](#versionstruktur)   | `string`  | Required | cannot be null | [Untitled schema](berechnungsformel-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/versionStruktur")   |
| [beginndatum](#beginndatum)           | `string`  | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/beginndatum")           |
| [notwendigkeit](#notwendigkeit)       | `string`  | Optional | cannot be null | [Untitled schema](berechnungsformelnotwendigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BerechnungsformelNotwendigkeit.schema.json#/properties/notwendigkeit")    |
| [lieferrichtung](#lieferrichtung)     | `string`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/lieferrichtung")                                 |
| [rechenschrittId](#rechenschrittid)   | `integer` | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-rechenschrittid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/rechenschrittId")   |
| [rechenschritt](#rechenschritt)       | `object`  | Optional | cannot be null | [Untitled schema](rechenschritt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/rechenschritt")                                       |
| [rechenschritte](#rechenschritte)     | `array`   | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-rechenschritte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/rechenschritte")     |
| [verwendungszweck](#verwendungszweck) | `array`   | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-verwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/verwendungszweck") |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## beginndatum



`beginndatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/beginndatum")

### beginndatum Type

`string`

## notwendigkeit



`notwendigkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformelnotwendigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BerechnungsformelNotwendigkeit.schema.json#/properties/notwendigkeit")

### notwendigkeit Type

`string`

### notwendigkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                       | Explanation |
| :------------------------------------------ | :---------- |
| `"BERECHNUNGSFORMEL_NOTWENDIG"`             |             |
| `"BERECHNUNGSFORMEL_MUSS_ANGEFRAGT_WERDEN"` |             |
| `"BERECHNUNGSFORMEL_TRIVIAL"`               |             |
| `"BERECHNUNGSFORMEL_NICHT_NOTWENDIG"`       |             |

## lieferrichtung



`lieferrichtung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/lieferrichtung")

### lieferrichtung Type

`string`

### lieferrichtung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"AUSSP"` |             |
| `"EINSP"` |             |

## rechenschrittId



`rechenschrittId`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-rechenschrittid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/rechenschrittId")

### rechenschrittId Type

`integer`

## rechenschritt



`rechenschritt`

*   is optional

*   Type: `object` ([Details](rechenschritt.md))

*   cannot be null

*   defined in: [Untitled schema](rechenschritt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Rechenschritt.schema.json#/properties/rechenschritt")

### rechenschritt Type

`object` ([Details](rechenschritt.md))

## rechenschritte



`rechenschritte`

*   is optional

*   Type: `object[]` ([Details](rechenschritt.md))

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-rechenschritte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/rechenschritte")

### rechenschritte Type

`object[]` ([Details](rechenschritt.md))

## verwendungszweck



`verwendungszweck`

*   is optional

*   Type: `object[]` ([Details](verwendungszweck.md))

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-verwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Berechnungsformel.schema.json#/properties/verwendungszweck")

### verwendungszweck Type

`object[]` ([Details](verwendungszweck.md))
