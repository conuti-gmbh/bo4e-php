## Untitled object in undefined Type

`object` ([Details](angebotsteil.md))

# Untitled object in undefined Properties

| Property                                                | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                      |
| :------------------------------------------------------ | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [anfrageSubreferenz](#anfragesubreferenz)               | `string` | Optional | cannot be null | [Untitled schema](angebotsteil-properties-anfragesubreferenz.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/anfrageSubreferenz")               |
| [gesamtmengeangebotsteil](#gesamtmengeangebotsteil)     | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/gesamtmengeangebotsteil")                                                      |
| [gesamtkostenangebotsteil](#gesamtkostenangebotsteil)   | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtkostenangebotsteil")                                                   |
| [lieferzeitraum](#lieferzeitraum)                       | `object` | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/lieferzeitraum")                                                         |
| [verweisKatalognummer](#verweiskatalognummer)           | `object` | Optional | cannot be null | [Untitled schema](katalogverweis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Katalogverweis.schema.json#/properties/verweisKatalognummer")                                       |
| [lieferstellenangebotsteil](#lieferstellenangebotsteil) | `array`  | Optional | cannot be null | [Untitled schema](angebotsteil-properties-lieferstellenangebotsteil.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/lieferstellenangebotsteil") |
| [positionen](#positionen)                               | `array`  | Optional | cannot be null | [Untitled schema](angebotsteil-properties-positionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/positionen")                               |

## anfrageSubreferenz



`anfrageSubreferenz`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-anfragesubreferenz.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/anfrageSubreferenz")

### anfrageSubreferenz Type

`string`

## gesamtmengeangebotsteil



`gesamtmengeangebotsteil`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/gesamtmengeangebotsteil")

### gesamtmengeangebotsteil Type

`object` ([Details](menge.md))

## gesamtkostenangebotsteil



`gesamtkostenangebotsteil`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/gesamtkostenangebotsteil")

### gesamtkostenangebotsteil Type

`object` ([Details](betrag.md))

## lieferzeitraum



`lieferzeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/lieferzeitraum")

### lieferzeitraum Type

`object` ([Details](zeitraum.md))

## verweisKatalognummer



`verweisKatalognummer`

*   is optional

*   Type: `object` ([Details](katalogverweis.md))

*   cannot be null

*   defined in: [Untitled schema](katalogverweis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Katalogverweis.schema.json#/properties/verweisKatalognummer")

### verweisKatalognummer Type

`object` ([Details](katalogverweis.md))

## lieferstellenangebotsteil



`lieferstellenangebotsteil`

*   is optional

*   Type: `object[]` ([Details](marktlokation.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-lieferstellenangebotsteil.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/lieferstellenangebotsteil")

### lieferstellenangebotsteil Type

`object[]` ([Details](marktlokation.md))

## positionen



`positionen`

*   is optional

*   Type: `object[]` ([Details](angebotsposition.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-positionen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsteil.schema.json#/properties/positionen")

### positionen Type

`object[]` ([Details](angebotsposition.md))
