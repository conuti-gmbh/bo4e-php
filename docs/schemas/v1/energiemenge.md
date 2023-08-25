## Untitled object in undefined Type

`object` ([Details](energiemenge.md))

# Untitled object in undefined Properties

| Property                                                      | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                           |
| :------------------------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                               | `string` | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                            |
| [versionStruktur](#versionstruktur)                           | `string` | Required | cannot be null | [Untitled schema](energiemenge-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/versionStruktur")                           |
| [lokationsId](#lokationsid)                                   | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/lokationsId")                                   |
| [lokationsTyp](#lokationstyp)                                 | `string` | Optional | cannot be null | [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Lokationstyp.schema.json#/properties/lokationsTyp")                                                       |
| [fertigstellungsdatum](#fertigstellungsdatum)                 | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-fertigstellungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/fertigstellungsdatum")                 |
| [startdatum](#startdatum)                                     | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/startdatum")                                     |
| [enddatum](#enddatum)                                         | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/enddatum")                                         |
| [bilanzierungsdatum](#bilanzierungsdatum)                     | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-bilanzierungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/bilanzierungsdatum")                     |
| [beginndatum](#beginndatum)                                   | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/beginndatum")                                   |
| [referenzStammdatenmeldungMsb](#referenzstammdatenmeldungmsb) | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-referenzstammdatenmeldungmsb.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/referenzStammdatenmeldungMsb") |
| [konfiguration](#konfiguration)                               | `string` | Optional | cannot be null | [Untitled schema](energiemenge-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/konfiguration")                               |
| [energieverbrauch](#energieverbrauch)                         | `array`  | Optional | cannot be null | [Untitled schema](energiemenge-properties-energieverbrauch.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/energieverbrauch")                         |

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

*   defined in: [Untitled schema](energiemenge-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## lokationsId



`lokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/lokationsId")

### lokationsId Type

`string`

## lokationsTyp



`lokationsTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Lokationstyp.schema.json#/properties/lokationsTyp")

### lokationsTyp Type

`string`

### lokationsTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value    | Explanation |
| :------- | :---------- |
| `"MALO"` |             |
| `"MELO"` |             |

## fertigstellungsdatum



`fertigstellungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-fertigstellungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/fertigstellungsdatum")

### fertigstellungsdatum Type

`string`

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/startdatum")

### startdatum Type

`string`

## enddatum



`enddatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/enddatum")

### enddatum Type

`string`

## bilanzierungsdatum



`bilanzierungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-bilanzierungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/bilanzierungsdatum")

### bilanzierungsdatum Type

`string`

## beginndatum



`beginndatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/beginndatum")

### beginndatum Type

`string`

## referenzStammdatenmeldungMsb



`referenzStammdatenmeldungMsb`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-referenzstammdatenmeldungmsb.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/referenzStammdatenmeldungMsb")

### referenzStammdatenmeldungMsb Type

`string`

## konfiguration



`konfiguration`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/konfiguration")

### konfiguration Type

`string`

## energieverbrauch



`energieverbrauch`

*   is optional

*   Type: `object[]` ([Details](verbrauch.md))

*   cannot be null

*   defined in: [Untitled schema](energiemenge-properties-energieverbrauch.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Energiemenge.schema.json#/properties/energieverbrauch")

### energieverbrauch Type

`object[]` ([Details](verbrauch.md))
