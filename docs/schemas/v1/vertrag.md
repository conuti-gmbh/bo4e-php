## Untitled object in undefined Type

`object` ([Details](vertrag.md))

# Untitled object in undefined Properties

| Property                                      | Type      | Required | Nullable       | Defined by                                                                                                                                                                             |
| :-------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                               | `string`  | Required | cannot be null | [Untitled schema](vertrag-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/boTyp")                           |
| [versionStruktur](#versionstruktur)           | `string`  | Required | cannot be null | [Untitled schema](vertrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/versionStruktur")       |
| [sparte](#sparte)                             | `string`  | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                           |
| [vertragsart](#vertragsart)                   | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsart")               |
| [vertragsnummer](#vertragsnummer)             | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsnummer")         |
| [beschreibung](#beschreibung)                 | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/beschreibung")             |
| [lokationsId](#lokationsid)                   | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/lokationsId")               |
| [lokationsTyp](#lokationstyp)                 | `string`  | Optional | cannot be null | [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Lokationstyp.schema.json#/properties/lokationsTyp")                         |
| [vertragsstatus](#vertragsstatus)             | `string`  | Optional | cannot be null | [Untitled schema](vertragstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Vertragstatus.schema.json#/properties/vertragsstatus")                     |
| [vertragsende](#vertragsende)                 | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragsende.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsende")             |
| [vertragsbeginn](#vertragsbeginn)             | `string`  | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragsbeginn.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsbeginn")         |
| [gemeinderabatt](#gemeinderabatt)             | `integer` | Optional | cannot be null | [Untitled schema](vertrag-properties-gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/gemeinderabatt")         |
| [vertragskonditionen](#vertragskonditionen)   | `object`  | Optional | cannot be null | [Untitled schema](vertragskonditionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/vertragskonditionen")     |
| [korrespondenzpartner](#korrespondenzpartner) | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/korrespondenzpartner")         |
| [abrechnungUeberNna](#abrechnunguebernna)     | `boolean` | Optional | cannot be null | [Untitled schema](vertrag-properties-abrechnunguebernna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/abrechnungUeberNna") |
| [vertragspartner1](#vertragspartner1)         | `array`   | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragspartner1.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragspartner1")     |
| [vertragspartner2](#vertragspartner2)         | `array`   | Optional | cannot be null | [Untitled schema](vertrag-properties-vertragspartner2.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragspartner2")     |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

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

## vertragsart



`vertragsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsart")

### vertragsart Type

`string`

## vertragsnummer



`vertragsnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsnummer")

### vertragsnummer Type

`string`

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/beschreibung")

### beschreibung Type

`string`

## lokationsId



`lokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/lokationsId")

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

## vertragsstatus



`vertragsstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertragstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Vertragstatus.schema.json#/properties/vertragsstatus")

### vertragsstatus Type

`string`

### vertragsstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"IN_ARBEIT"`    |             |
| `"UEBERMITTELT"` |             |
| `"ANGENOMMEN"`   |             |
| `"AKTIV"`        |             |
| `"ABGELEHNT"`    |             |
| `"WIDERRUFEN"`   |             |
| `"STORNIERT"`    |             |
| `"GEKUENDIGT"`   |             |
| `"BEENDET"`      |             |

## vertragsende



`vertragsende`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragsende.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsende")

### vertragsende Type

`string`

## vertragsbeginn



`vertragsbeginn`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragsbeginn.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragsbeginn")

### vertragsbeginn Type

`string`

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-gemeinderabatt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/gemeinderabatt")

### gemeinderabatt Type

`integer`

## vertragskonditionen



`vertragskonditionen`

*   is optional

*   Type: `object` ([Details](vertragskonditionen.md))

*   cannot be null

*   defined in: [Untitled schema](vertragskonditionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Vertragskonditionen.schema.json#/properties/vertragskonditionen")

### vertragskonditionen Type

`object` ([Details](vertragskonditionen.md))

## korrespondenzpartner



`korrespondenzpartner`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/korrespondenzpartner")

### korrespondenzpartner Type

`object` ([Details](geschaeftspartner.md))

## abrechnungUeberNna



`abrechnungUeberNna`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-abrechnunguebernna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/abrechnungUeberNna")

### abrechnungUeberNna Type

`boolean`

## vertragspartner1



`vertragspartner1`

*   is optional

*   Type: `object[]` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragspartner1.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragspartner1")

### vertragspartner1 Type

`object[]` ([Details](geschaeftspartner.md))

## vertragspartner2



`vertragspartner2`

*   is optional

*   Type: `object[]` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](vertrag-properties-vertragspartner2.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Vertrag.schema.json#/properties/vertragspartner2")

### vertragspartner2 Type

`object[]` ([Details](geschaeftspartner.md))
