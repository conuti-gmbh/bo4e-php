## Untitled object in undefined Type

`object` ([Details](vertragskonditionen.md))

# Untitled object in undefined Properties

| Property                                                                                | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                                                    |
| :-------------------------------------------------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [netznutzungszahler](#netznutzungszahler)                                               | `string`  | Optional | cannot be null | [Untitled schema](netznutzungszahler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungszahler.schema.json#/properties/netznutzungszahler")                                                                              |
| [netznutzungsvertrag](#netznutzungsvertrag)                                             | `string`  | Optional | cannot be null | [Untitled schema](netznutzungsvertrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsvertrag.schema.json#/properties/netznutzungsvertrag")                                                                           |
| [netznutzungsabrechnung](#netznutzungsabrechnung)                                       | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/netznutzungsabrechnung")                                                                                               |
| [beinhaltetSingulaerGenutzteBetriebsmittel](#beinhaltetsingulaergenutztebetriebsmittel) | `boolean` | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-beinhaltetsingulaergenutztebetriebsmittel.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/beinhaltetSingulaerGenutzteBetriebsmittel") |
| [netznutzungsabrechnungsgrundlage](#netznutzungsabrechnungsgrundlage)                   | `string`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsgrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsabrechnungsgrundlage.schema.json#/properties/netznutzungsabrechnungsgrundlage")                                    |
| [netznutzungsabrechnungsvariante](#netznutzungsabrechnungsvariante)                     | `string`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsvariante.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsabrechnungsvariante.schema.json#/properties/netznutzungsabrechnungsvariante")                                       |
| [haushaltskunde](#haushaltskunde)                                                       | `boolean` | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-haushaltskunde.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/haushaltskunde")                                                       |
| [abrechnungUeberNna](#abrechnunguebernna)                                               | `boolean` | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-abrechnunguebernna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/abrechnungUeberNna")                                               |
| [gemeinderabatt](#gemeinderabatt)                                                       | `object`  | Optional | cannot be null | [Untitled schema](gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Gemeinderabatt.schema.json#/properties/gemeinderabatt")                                                                                           |
| [startAbrechnungsjahr](#startabrechnungsjahr)                                           | `string`  | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-startabrechnungsjahr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/startAbrechnungsjahr")                                           |
| [naechstenetznutzungsabrechnung](#naechstenetznutzungsabrechnung)                       | `string`  | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-naechstenetznutzungsabrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/naechstenetznutzungsabrechnung")                       |
| [abrechnungsintervall](#abrechnungsintervall)                                           | `integer` | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-abrechnungsintervall.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/abrechnungsintervall")                                           |
| [netznutzungsabrechnungIntervall](#netznutzungsabrechnungintervall)                     | `integer` | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-netznutzungsabrechnungintervall.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/netznutzungsabrechnungIntervall")                     |
| [geplanteTurnusablesung](#geplanteturnusablesung)                                       | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/geplanteTurnusablesung")                                                                                               |
| [beauftragungMsb](#beauftragungmsb)                                                     | `string`  | Optional | cannot be null | [Untitled schema](beauftragungmsb.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BeauftragungMsb.schema.json#/properties/beauftragungMsb")                                                                                       |
| [kuendigungsfrist](#kuendigungsfrist)                                                   | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/kuendigungsfrist")                                                                                                     |
| [kuendigungstermin](#kuendigungstermin)                                                 | `string`  | Optional | cannot be null | [Untitled schema](vertragskonditionen-properties-kuendigungstermin.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/kuendigungstermin")                                                 |

## netznutzungszahler



`netznutzungszahler`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netznutzungszahler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungszahler.schema.json#/properties/netznutzungszahler")

### netznutzungszahler Type

`string`

### netznutzungszahler Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value         | Explanation |
| :------------ | :---------- |
| `"KUNDE"`     |             |
| `"LIEFERANT"` |             |

## netznutzungsvertrag



`netznutzungsvertrag`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsvertrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsvertrag.schema.json#/properties/netznutzungsvertrag")

### netznutzungsvertrag Type

`string`

### netznutzungsvertrag Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"KUNDEN_NB"`      |             |
| `"LIEFERANTEN_NB"` |             |

## netznutzungsabrechnung



`netznutzungsabrechnung`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/netznutzungsabrechnung")

### netznutzungsabrechnung Type

`object` ([Details](zeitraum.md))

## beinhaltetSingulaerGenutzteBetriebsmittel



`beinhaltetSingulaerGenutzteBetriebsmittel`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-beinhaltetsingulaergenutztebetriebsmittel.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/beinhaltetSingulaerGenutzteBetriebsmittel")

### beinhaltetSingulaerGenutzteBetriebsmittel Type

`boolean`

## netznutzungsabrechnungsgrundlage



`netznutzungsabrechnungsgrundlage`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsgrundlage.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsabrechnungsgrundlage.schema.json#/properties/netznutzungsabrechnungsgrundlage")

### netznutzungsabrechnungsgrundlage Type

`string`

### netznutzungsabrechnungsgrundlage Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                     | Explanation |
| :------------------------ | :---------- |
| `"LIEFERSCHEIN"`          |             |
| `"ABWEICHENDE_GRUNDLAGE"` |             |

## netznutzungsabrechnungsvariante



`netznutzungsabrechnungsvariante`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsvariante.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netznutzungsabrechnungsvariante.schema.json#/properties/netznutzungsabrechnungsvariante")

### netznutzungsabrechnungsvariante Type

`string`

### netznutzungsabrechnungsvariante Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                           | Explanation |
| :------------------------------ | :---------- |
| `"ARBEITSPREIS_GRUNDPREIS"`     |             |
| `"ARBEITSPREIS_LEISTUNGSPREIS"` |             |

## haushaltskunde



`haushaltskunde`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-haushaltskunde.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/haushaltskunde")

### haushaltskunde Type

`boolean`

## abrechnungUeberNna



`abrechnungUeberNna`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-abrechnunguebernna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/abrechnungUeberNna")

### abrechnungUeberNna Type

`boolean`

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `object` ([Details](gemeinderabatt.md))

*   cannot be null

*   defined in: [Untitled schema](gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Gemeinderabatt.schema.json#/properties/gemeinderabatt")

### gemeinderabatt Type

`object` ([Details](gemeinderabatt.md))

## startAbrechnungsjahr



`startAbrechnungsjahr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-startabrechnungsjahr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/startAbrechnungsjahr")

### startAbrechnungsjahr Type

`string`

## naechstenetznutzungsabrechnung



`naechstenetznutzungsabrechnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-naechstenetznutzungsabrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/naechstenetznutzungsabrechnung")

### naechstenetznutzungsabrechnung Type

`string`

## abrechnungsintervall



`abrechnungsintervall`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-abrechnungsintervall.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/abrechnungsintervall")

### abrechnungsintervall Type

`integer`

## netznutzungsabrechnungIntervall



`netznutzungsabrechnungIntervall`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-netznutzungsabrechnungintervall.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/netznutzungsabrechnungIntervall")

### netznutzungsabrechnungIntervall Type

`integer`

## geplanteTurnusablesung



`geplanteTurnusablesung`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/geplanteTurnusablesung")

### geplanteTurnusablesung Type

`object` ([Details](zeitraum.md))

## beauftragungMsb



`beauftragungMsb`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](beauftragungmsb.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BeauftragungMsb.schema.json#/properties/beauftragungMsb")

### beauftragungMsb Type

`string`

### beauftragungMsb Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                      | Explanation |
| :------------------------- | :---------- |
| `"VERTRAG_AN_MSB"`         |             |
| `"VERTRAGSBEENDIGUNG_MSB"` |             |

## kuendigungsfrist



`kuendigungsfrist`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/kuendigungsfrist")

### kuendigungsfrist Type

`object` ([Details](zeitraum.md))

## kuendigungstermin



`kuendigungstermin`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen-properties-kuendigungstermin.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/kuendigungstermin")

### kuendigungstermin Type

`string`
