## Untitled object in undefined Type

`object` ([Details](auftrag.md))

# Untitled object in undefined Properties

| Property                                                | Type     | Required | Nullable       | Defined by                                                                                                                                                                                           |
| :------------------------------------------------------ | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                         | `string` | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                            |
| [versionStruktur](#versionstruktur)                     | `string` | Required | cannot be null | [Untitled schema](auftrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/versionStruktur")                     |
| [ausfuehrungsdatum](#ausfuehrungsdatum)                 | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-ausfuehrungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/ausfuehrungsdatum")                 |
| [fertigstellungsdatum](#fertigstellungsdatum)           | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-fertigstellungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/fertigstellungsdatum")           |
| [startdatum](#startdatum)                               | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/startdatum")                               |
| [sparte](#sparte)                                       | `string` | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                         |
| [lieferanschrift](#lieferanschrift)                     | `object` | Optional | cannot be null | [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/lieferanschrift")                                               |
| [marktlokationsId](#marktlokationsid)                   | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-marktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/marktlokationsId")                   |
| [mindestpreis](#mindestpreis)                           | `object` | Optional | cannot be null | [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/mindestpreis")                                                      |
| [hoechstpreis](#hoechstpreis)                           | `object` | Optional | cannot be null | [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/hoechstpreis")                                                      |
| [energierichtung](#energierichtung)                     | `string` | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")                              |
| [berechnungspreis](#berechnungspreis)                   | `number` | Optional | cannot be null | [Untitled schema](auftrag-properties-berechnungspreis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/berechnungspreis")                   |
| [summeGesamt](#summegesamt)                             | `number` | Optional | cannot be null | [Untitled schema](auftrag-properties-summegesamt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/summeGesamt")                             |
| [verschobenerAbmeldetermin](#verschobenerabmeldetermin) | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-verschobenerabmeldetermin.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/verschobenerAbmeldetermin") |
| [lieferadresseAltgeraete](#lieferadressealtgeraete)     | `object` | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/lieferadresseAltgeraete")                    |
| [positionsdaten](#positionsdaten)                       | `array`  | Optional | cannot be null | [Untitled schema](auftrag-properties-positionsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/positionsdaten")                       |
| [bemerkungen](#bemerkungen)                             | `array`  | Optional | cannot be null | [Untitled schema](auftrag-properties-bemerkungen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/bemerkungen")                             |

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

*   defined in: [Untitled schema](auftrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## ausfuehrungsdatum



`ausfuehrungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-ausfuehrungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/ausfuehrungsdatum")

### ausfuehrungsdatum Type

`string`

### ausfuehrungsdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## fertigstellungsdatum



`fertigstellungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-fertigstellungsdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/fertigstellungsdatum")

### fertigstellungsdatum Type

`string`

### fertigstellungsdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/startdatum")

### startdatum Type

`string`

### startdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

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

## lieferanschrift



`lieferanschrift`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/lieferanschrift")

### lieferanschrift Type

`object` ([Details](adresse.md))

## marktlokationsId



`marktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-marktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/marktlokationsId")

### marktlokationsId Type

`string`

## mindestpreis



`mindestpreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/mindestpreis")

### mindestpreis Type

`object` ([Details](preis.md))

## hoechstpreis



`hoechstpreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/hoechstpreis")

### hoechstpreis Type

`object` ([Details](preis.md))

## energierichtung



`energierichtung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")

### energierichtung Type

`string`

### energierichtung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"AUSSP"` |             |
| `"EINSP"` |             |

## berechnungspreis



`berechnungspreis`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-berechnungspreis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/berechnungspreis")

### berechnungspreis Type

`number`

## summeGesamt



`summeGesamt`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-summegesamt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/summeGesamt")

### summeGesamt Type

`number`

## verschobenerAbmeldetermin



`verschobenerAbmeldetermin`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-verschobenerabmeldetermin.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/verschobenerAbmeldetermin")

### verschobenerAbmeldetermin Type

`string`

### verschobenerAbmeldetermin Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## lieferadresseAltgeraete



`lieferadresseAltgeraete`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/lieferadresseAltgeraete")

### lieferadresseAltgeraete Type

`object` ([Details](geschaeftspartner.md))

## positionsdaten



`positionsdaten`

*   is optional

*   Type: `object[]` ([Details](auftragposition.md))

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-positionsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/positionsdaten")

### positionsdaten Type

`object[]` ([Details](auftragposition.md))

## bemerkungen



`bemerkungen`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-bemerkungen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Auftrag.schema.json#/properties/bemerkungen")

### bemerkungen Type

`string[]`
