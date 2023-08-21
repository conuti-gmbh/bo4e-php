## Untitled object in undefined Type

`object` ([Details](statusbericht.md))

# Untitled object in undefined Properties

| Property                            | Type          | Required | Nullable       | Defined by                                                                                                                                                                                   |
| :---------------------------------- | :------------ | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                     | `string`      | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                    |
| [versionStruktur](#versionstruktur) | `string`      | Required | cannot be null | [Untitled schema](statusbericht-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/versionStruktur") |
| [status](#status)                   | `array`       | Optional | cannot be null | [Untitled schema](berichtstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Fehler.schema.json#/properties/status")                                            |
| [pruefgegenstand](#pruefgegenstand) | `string`      | Optional | cannot be null | [Untitled schema](statusbericht-properties-pruefgegenstand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/pruefgegenstand") |
| [datumPruefung](#datumpruefung)     | `string`      | Optional | cannot be null | [Untitled schema](statusbericht-properties-datumpruefung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/datumPruefung")     |
| [fehler](#fehler)                   | Not specified | Optional | cannot be null | [Untitled schema](statusbericht-properties-fehler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/fehler")                   |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")

### boTyp Type

`string`

### boTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                           | Explanation |
| :------------------------------ | :---------- |
| `"ANSPRECHPARTNER"`             |             |
| `"AVIS"`                        |             |
| `"ENERGIEMENGE"`                |             |
| `"GESCHAEFTSOBJEKT"`            |             |
| `"GESCHAEFTSPARTNER"`           |             |
| `"MARKTLOKATION"`               |             |
| `"MARKTTEILNEHMER"`             |             |
| `"MESSLOKATION"`                |             |
| `"ZAEHLER"`                     |             |
| `"KOSTEN"`                      |             |
| `"TARIF"`                       |             |
| `"PREISBLATT"`                  |             |
| `"PREISBLATTNETZNUTZUNG"`       |             |
| `"PREISBLATTMESSUNG"`           |             |
| `"PREISBLATTUMLAGEN"`           |             |
| `"PREISBLATTDIENSTLEISTUNG"`    |             |
| `"PREISBLATTKONZESSIONSABGABE"` |             |
| `"ZEITREIHE"`                   |             |
| `"LASTGANG"`                    |             |
| `"HANDELSUNSTIMMIGKEIT"`        |             |
| `"ANFRAGE"`                     |             |
| `"AUFTRAG"`                     |             |
| `"STATUSMITTEILUNG"`            |             |
| `"BERECHNUNGSFORMEL"`           |             |
| `"RECHNUNG"`                    |             |
| `"BILANZIERUNG"`                |             |
| `"NETZNUTZUNGSVERTRAG"`         |             |
| `"MESSSTELLENBETRIEBSVERTRAG"`  |             |
| `"ENERGIELIEFERVERTRAG"`        |             |
| `"SPERRAUFTRAG"`                |             |
| `"ANGEBOT"`                     |             |
| `"TRANCHE"`                     |             |

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusbericht-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## status



`status`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](berichtstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Fehler.schema.json#/properties/status")

### status Type

`string[]`

## pruefgegenstand



`pruefgegenstand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusbericht-properties-pruefgegenstand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/pruefgegenstand")

### pruefgegenstand Type

`string`

## datumPruefung



`datumPruefung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusbericht-properties-datumpruefung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/datumPruefung")

### datumPruefung Type

`string`

### datumPruefung Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## fehler



`fehler`

*   is optional

*   Type: unknown

*   cannot be null

*   defined in: [Untitled schema](statusbericht-properties-fehler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusbericht.schema.json#/properties/fehler")

### fehler Type

unknown
