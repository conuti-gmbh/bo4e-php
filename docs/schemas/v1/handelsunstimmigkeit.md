## Untitled object in undefined Type

`object` ([Details](handelsunstimmigkeit.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                 |
| :---------------------------------- | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                     | `string` | Required | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/boTyp")                     |
| [versionStruktur](#versionstruktur) | `string` | Required | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/versionStruktur") |
| [nummer](#nummer)                   | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-nummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/nummer")                   |
| [typ](#typ)                         | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmigkeitstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitstyp.schema.json#/properties/typ")                              |
| [begruendung](#begruendung)         | `object` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/begruendung")      |
| [zuZahlen](#zuzahlen)               | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/zuZahlen")                                                              |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## nummer



`nummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-nummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Handelsunstimmigkeit.schema.json#/properties/nummer")

### nummer Type

`string`

## typ



`typ`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeitstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitstyp.schema.json#/properties/typ")

### typ Type

`string`

### typ Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                     | Explanation |
| :---------------------------------------- | :---------- |
| `"HANDELSRECHNUNG"`                       |             |
| `"LIEFERSCHEIN_HANDELSUNSTIMMIGKEITSTYP"` |             |
| `"LIEFERSCHEIN_GRUND_ARBEITSPREIS"`       |             |
| `"LIEFERSCHEIN_ARBEITS_LEISTUNGSPREIS"`   |             |

## begruendung



`begruendung`

*   is optional

*   Type: `object` ([Details](handelsunstimmungkeitsbegruendung.md))

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/begruendung")

### begruendung Type

`object` ([Details](handelsunstimmungkeitsbegruendung.md))

## zuZahlen



`zuZahlen`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/zuZahlen")

### zuZahlen Type

`object` ([Details](betrag.md))
