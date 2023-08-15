## Untitled object in undefined Type

`object` ([Details](rechnung.md))

# Untitled object in undefined Properties

| Property                                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                                                               |
| :------------------------------------------------------------------ | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                     | `string`  | Required | cannot be null | [Untitled schema](rechnung-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/boTyp")                                           |
| [versionStruktur](#versionstruktur)                                 | `string`  | Required | cannot be null | [Untitled schema](rechnung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/versionStruktur")                       |
| [istSelbstausgestellt](#istselbstausgestellt)                       | `boolean` | Optional | cannot be null | [Untitled schema](rechnung-properties-istselbstausgestellt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/istSelbstausgestellt")             |
| [bearbeitungsdatum](#bearbeitungsdatum)                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-bearbeitungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/bearbeitungsdatum")                   |
| [rechnungsdatum](#rechnungsdatum)                                   | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-rechnungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/rechnungsdatum")                         |
| [rechnungsstatus](#rechnungsstatus)                                 | `string`  | Optional | cannot be null | [Untitled schema](rechnungsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rechnungsstatus.schema.json#/properties/rechnungsstatus")                                  |
| [vorlaeufigerAbrechnungszeitraum](#vorlaeufigerabrechnungszeitraum) | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/vorlaeufigerAbrechnungszeitraum")                                 |
| [rechnungsperiode](#rechnungsperiode)                               | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/rechnungsperiode")                                                |
| [rechnungstyp](#rechnungstyp)                                       | `string`  | Optional | cannot be null | [Untitled schema](rechnungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rechnungstyp.schema.json#/properties/rechnungstyp")                                           |
| [istReverseCharge](#istreversecharge)                               | `boolean` | Optional | cannot be null | [Untitled schema](rechnung-properties-istreversecharge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/istReverseCharge")                     |
| [gesamtbrutto](#gesamtbrutto)                                       | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtbrutto")                                                        |
| [zuZahlen](#zuzahlen)                                               | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/zuZahlen")                                                            |
| [originalRechnungsnummer](#originalrechnungsnummer)                 | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-originalrechnungsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/originalRechnungsnummer")       |
| [referenzNachrichtendatum](#referenznachrichtendatum)               | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenznachrichtendatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzNachrichtendatum")     |
| [referenzDokumentennummer](#referenzdokumentennummer)               | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenzdokumentennummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzDokumentennummer")     |
| [referenzVorgaengerrechnung](#referenzvorgaengerrechnung)           | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenzvorgaengerrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzVorgaengerrechnung") |
| [datumVorgaengerrechnung](#datumvorgaengerrechnung)                 | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-datumvorgaengerrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/datumVorgaengerrechnung")       |
| [netzkonto](#netzkonto)                                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-netzkonto.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/netzkonto")                                   |
| [vorausgezahlt](#vorausgezahlt)                                     | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/vorausgezahlt")                                                       |
| [gemeinderabatt](#gemeinderabatt)                                   | `object`  | Optional | cannot be null | [Untitled schema](gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Gemeinderabatt.schema.json#/properties/gemeinderabatt")                                      |
| [ausfuehrungsdatum](#ausfuehrungsdatum)                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-ausfuehrungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/ausfuehrungsdatum")                   |
| [sonderrechnungsart](#sonderrechnungsart)                           | `string`  | Optional | cannot be null | [Untitled schema](sonderrechnungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/SonderrechnungsArt.schema.json#/properties/sonderrechnungsart")                         |
| [steuerbetraege](#steuerbetraege)                                   | `array`   | Optional | cannot be null | [Untitled schema](rechnung-properties-steuerbetraege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/steuerbetraege")                         |
| [rechnungspositionen](#rechnungspositionen)                         | `array`   | Optional | cannot be null | [Untitled schema](rechnung-properties-rechnungspositionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/rechnungspositionen")               |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## istSelbstausgestellt



`istSelbstausgestellt`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-istselbstausgestellt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/istSelbstausgestellt")

### istSelbstausgestellt Type

`boolean`

## bearbeitungsdatum



`bearbeitungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-bearbeitungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/bearbeitungsdatum")

### bearbeitungsdatum Type

`string`

## rechnungsdatum



`rechnungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-rechnungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/rechnungsdatum")

### rechnungsdatum Type

`string`

## rechnungsstatus



`rechnungsstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnungsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rechnungsstatus.schema.json#/properties/rechnungsstatus")

### rechnungsstatus Type

`string`

### rechnungsstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value        | Explanation |
| :----------- | :---------- |
| `"DUPLIKAT"` |             |
| `"ORIGINAL"` |             |

## vorlaeufigerAbrechnungszeitraum



`vorlaeufigerAbrechnungszeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/vorlaeufigerAbrechnungszeitraum")

### vorlaeufigerAbrechnungszeitraum Type

`object` ([Details](zeitraum.md))

## rechnungsperiode



`rechnungsperiode`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/rechnungsperiode")

### rechnungsperiode Type

`object` ([Details](zeitraum.md))

## rechnungstyp



`rechnungstyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Rechnungstyp.schema.json#/properties/rechnungstyp")

### rechnungstyp Type

`string`

### rechnungstyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                          | Explanation |
| :----------------------------- | :---------- |
| `"ABSCHLUSSRECHNUNG"`          |             |
| `"ABSCHLAGSRECHNUNG"`          |             |
| `"TURNUSRECHNUNG"`             |             |
| `"MONATSRECHNUNG"`             |             |
| `"WIMRECHNUNG"`                |             |
| `"ZWISCHENRECHNUNG"`           |             |
| `"INTEGRIERTE_13TE_RECHNUNG"`  |             |
| `"ZUSAETZLICHE_13TE_RECHNUNG"` |             |
| `"MEHRMINDERMENGENRECHNUNG"`   |             |
| `"MSBRECHNUNG"`                |             |
| `"KAPAZITAETSRECHNUNG"`        |             |
| `"SPERRUNG_INBETRIEBNAHME"`    |             |
| `"VERZUGSKOSTEN"`              |             |
| `"BLINDARBEIT"`                |             |
| `"SONDERRECHNUNG"`             |             |

## istReverseCharge



`istReverseCharge`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-istreversecharge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/istReverseCharge")

### istReverseCharge Type

`boolean`

## gesamtbrutto



`gesamtbrutto`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtbrutto")

### gesamtbrutto Type

`object` ([Details](betrag.md))

## zuZahlen



`zuZahlen`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/zuZahlen")

### zuZahlen Type

`object` ([Details](betrag.md))

## originalRechnungsnummer



`originalRechnungsnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-originalrechnungsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/originalRechnungsnummer")

### originalRechnungsnummer Type

`string`

## referenzNachrichtendatum



`referenzNachrichtendatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenznachrichtendatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzNachrichtendatum")

### referenzNachrichtendatum Type

`string`

## referenzDokumentennummer



`referenzDokumentennummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenzdokumentennummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzDokumentennummer")

### referenzDokumentennummer Type

`string`

## referenzVorgaengerrechnung



`referenzVorgaengerrechnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenzvorgaengerrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/referenzVorgaengerrechnung")

### referenzVorgaengerrechnung Type

`string`

## datumVorgaengerrechnung



`datumVorgaengerrechnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-datumvorgaengerrechnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/datumVorgaengerrechnung")

### datumVorgaengerrechnung Type

`string`

## netzkonto



`netzkonto`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-netzkonto.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/netzkonto")

### netzkonto Type

`string`

## vorausgezahlt



`vorausgezahlt`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/vorausgezahlt")

### vorausgezahlt Type

`object` ([Details](betrag.md))

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `object` ([Details](gemeinderabatt.md))

*   cannot be null

*   defined in: [Untitled schema](gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Gemeinderabatt.schema.json#/properties/gemeinderabatt")

### gemeinderabatt Type

`object` ([Details](gemeinderabatt.md))

## ausfuehrungsdatum



`ausfuehrungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-ausfuehrungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/ausfuehrungsdatum")

### ausfuehrungsdatum Type

`string`

## sonderrechnungsart



`sonderrechnungsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sonderrechnungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/SonderrechnungsArt.schema.json#/properties/sonderrechnungsart")

### sonderrechnungsart Type

`string`

### sonderrechnungsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                             | Explanation |
| :-------------------------------- | :---------- |
| `"KONZESSIONSABGABE_TESTAT"`      |             |
| `"INDIVIDUELL_ATYPISCH"`          |             |
| `"INDIVIDUELL_SINGULAER"`         |             |
| `"KWKG_UMLAGE"`                   |             |
| `"OFFSHORE_UMLAGE"`               |             |
| `"P19_STROM_NEV_UMLAGE"`          |             |
| `"P18_ABLAV"`                     |             |
| `"KONZESSIONSABGABE_WECHSEL_RLM"` |             |

## steuerbetraege



`steuerbetraege`

*   is optional

*   Type: `object[]` ([Details](steuerbetrag.md))

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-steuerbetraege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/steuerbetraege")

### steuerbetraege Type

`object[]` ([Details](steuerbetrag.md))

## rechnungspositionen



`rechnungspositionen`

*   is optional

*   Type: `object[]` ([Details](rechnungsposition.md))

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-rechnungspositionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Rechnung.schema.json#/properties/rechnungspositionen")

### rechnungspositionen Type

`object[]` ([Details](rechnungsposition.md))
