## Untitled object in undefined Type

`object` ([Details](bilanzierung.md))

# Untitled object in undefined Properties

| Property                                                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                    |
| :------------------------------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                                                     | `string` | Required | cannot be null | [Untitled schema](bilanzierung-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/boTyp")                                        |
| [versionStruktur](#versionstruktur)                                 | `string` | Required | cannot be null | [Untitled schema](bilanzierung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/versionStruktur")                    |
| [aggregationsverantwortung](#aggregationsverantwortung)             | `string` | Optional | cannot be null | [Untitled schema](aggregationsverantwortung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Aggregationsverantwortung.schema.json#/properties/aggregationsverantwortung")         |
| [zeitreihentyp](#zeitreihentyp)                                     | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-zeitreihentyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/zeitreihentyp")                        |
| [prognosegrundlage](#prognosegrundlage)                             | `string` | Optional | cannot be null | [Untitled schema](prognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Prognosegrundlage.schema.json#/properties/prognosegrundlage")                                 |
| [bilanzierungsbeginn](#bilanzierungsbeginn)                         | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzierungsbeginn.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzierungsbeginn")            |
| [bilanzierungsende](#bilanzierungsende)                             | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzierungsende.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzierungsende")                |
| [bilanzkreis](#bilanzkreis)                                         | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzkreis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzkreis")                            |
| [fallgruppenzuordnung](#fallgruppenzuordnung)                       | `string` | Optional | cannot be null | [Untitled schema](fallgruppenzuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Fallgruppenzuordnung.schema.json#/properties/fallgruppenzuordnung")                        |
| [temperaturarbeit](#temperaturarbeit)                               | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/temperaturarbeit")                                                           |
| [jahresverbrauchsprognose](#jahresverbrauchsprognose)               | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/jahresverbrauchsprognose")                                                   |
| [kundenwert](#kundenwert)                                           | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/kundenwert")                                                                 |
| [verbrauchsaufteilung](#verbrauchsaufteilung)                       | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/verbrauchsaufteilung")                                                       |
| [wahlrechtPrognosegrundlage](#wahlrechtprognosegrundlage)           | `string` | Optional | cannot be null | [Untitled schema](wahlrechtprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WahlrechtPrognosegrundlage.schema.json#/properties/wahlrechtPrognosegrundlage")      |
| [grundWahlrechtPrognosegrundlage](#grundwahlrechtprognosegrundlage) | `string` | Optional | cannot be null | [Untitled schema](wahlrechtprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WahlrechtPrognosegrundlage.schema.json#/properties/grundWahlrechtPrognosegrundlage") |
| [lastprofile](#lastprofile)                                         | `array`  | Optional | cannot be null | [Untitled schema](bilanzierung-properties-lastprofile.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/lastprofile")                            |
| [detailsPrognosegrundlage](#detailsprognosegrundlage)               | `array`  | Optional | cannot be null | [Untitled schema](bilanzierung-properties-detailsprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/detailsPrognosegrundlage")  |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## aggregationsverantwortung



`aggregationsverantwortung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](aggregationsverantwortung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Aggregationsverantwortung.schema.json#/properties/aggregationsverantwortung")

### aggregationsverantwortung Type

`string`

### aggregationsverantwortung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value    | Explanation |
| :------- | :---------- |
| `"UENB"` |             |
| `"VNB"`  |             |

## zeitreihentyp



`zeitreihentyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-zeitreihentyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/zeitreihentyp")

### zeitreihentyp Type

`string`

## prognosegrundlage



`prognosegrundlage`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](prognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Prognosegrundlage.schema.json#/properties/prognosegrundlage")

### prognosegrundlage Type

`string`

### prognosegrundlage Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value       | Explanation |
| :---------- | :---------- |
| `"WERTE"`   |             |
| `"PROFILE"` |             |

## bilanzierungsbeginn



`bilanzierungsbeginn`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzierungsbeginn.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzierungsbeginn")

### bilanzierungsbeginn Type

`string`

## bilanzierungsende



`bilanzierungsende`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzierungsende.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzierungsende")

### bilanzierungsende Type

`string`

## bilanzkreis



`bilanzkreis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzkreis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/bilanzkreis")

### bilanzkreis Type

`string`

## fallgruppenzuordnung



`fallgruppenzuordnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](fallgruppenzuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Fallgruppenzuordnung.schema.json#/properties/fallgruppenzuordnung")

### fallgruppenzuordnung Type

`string`

### fallgruppenzuordnung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value           | Explanation |
| :-------------- | :---------- |
| `"GABI_RLMmT"`  |             |
| `"GABI_RLMoT"`  |             |
| `"GABI_RLMNEV"` |             |

## temperaturarbeit



`temperaturarbeit`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/temperaturarbeit")

### temperaturarbeit Type

`object` ([Details](menge.md))

## jahresverbrauchsprognose



`jahresverbrauchsprognose`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/jahresverbrauchsprognose")

### jahresverbrauchsprognose Type

`object` ([Details](menge.md))

## kundenwert



`kundenwert`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/kundenwert")

### kundenwert Type

`object` ([Details](menge.md))

## verbrauchsaufteilung



`verbrauchsaufteilung`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/verbrauchsaufteilung")

### verbrauchsaufteilung Type

`object` ([Details](menge.md))

## wahlrechtPrognosegrundlage



`wahlrechtPrognosegrundlage`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wahlrechtprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WahlrechtPrognosegrundlage.schema.json#/properties/wahlrechtPrognosegrundlage")

### wahlrechtPrognosegrundlage Type

`string`

### wahlrechtPrognosegrundlage Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                              | Explanation |
| :--------------------------------- | :---------- |
| `"DURCH_LF"`                       |             |
| `"DURCH_LF_NICHT_GEGEBEN"`         |             |
| `"NICHT_WEGEN_GROSSEN_VERBRAUCHS"` |             |
| `"NICHT_WEGEN_EIGENVERBRAUCH"`     |             |
| `"NICHT_WEGEN_TAGES_VERBRAUCH"`    |             |
| `"NICHT_WEGEN_ENWG"`               |             |

## grundWahlrechtPrognosegrundlage



`grundWahlrechtPrognosegrundlage`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wahlrechtprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WahlrechtPrognosegrundlage.schema.json#/properties/grundWahlrechtPrognosegrundlage")

### grundWahlrechtPrognosegrundlage Type

`string`

### grundWahlrechtPrognosegrundlage Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                              | Explanation |
| :--------------------------------- | :---------- |
| `"DURCH_LF"`                       |             |
| `"DURCH_LF_NICHT_GEGEBEN"`         |             |
| `"NICHT_WEGEN_GROSSEN_VERBRAUCHS"` |             |
| `"NICHT_WEGEN_EIGENVERBRAUCH"`     |             |
| `"NICHT_WEGEN_TAGES_VERBRAUCH"`    |             |
| `"NICHT_WEGEN_ENWG"`               |             |

## lastprofile



`lastprofile`

*   is optional

*   Type: `object[]` ([Details](lastprofil.md))

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-lastprofile.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/lastprofile")

### lastprofile Type

`object[]` ([Details](lastprofil.md))

## detailsPrognosegrundlage



`detailsPrognosegrundlage`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-detailsprognosegrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Bilanzierung.schema.json#/properties/detailsPrognosegrundlage")

### detailsPrognosegrundlage Type

`string[]`
