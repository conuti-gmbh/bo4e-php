## Untitled object in undefined Type

`object` ([Details](handelsunstimmungkeitsbegruendung.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                                           |
| :---------------------------------- | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [richtigkeit](#richtigkeit)         | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmigkeitsrichtigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitsrichtigkeit.schema.json#/properties/richtigkeit")                                |
| [referenzDar](#referenzdar)         | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenzdar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenzDar")         |
| [referenznummer](#referenznummer)   | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenznummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenznummer")   |
| [bestaetigungDar](#bestaetigungdar) | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung-properties-bestaetigungdar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/bestaetigungDar") |
| [grund](#grund)                     | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmigkeitsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitsgrund.schema.json#/properties/grund")                                                  |
| [hinweis](#hinweis)                 | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung-properties-hinweis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/hinweis")                 |
| [referenzen](#referenzen)           | `array`  | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenzen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenzen")           |

## richtigkeit



`richtigkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeitsrichtigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitsrichtigkeit.schema.json#/properties/richtigkeit")

### richtigkeit Type

`string`

### richtigkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value      | Explanation |
| :--------- | :---------- |
| `"MSCONS"` |             |
| `"UTILMD"` |             |
| `"INVOIC"` |             |
| `"ORDERS"` |             |
| `"PRICAT"` |             |
| `"IFTSTA"` |             |
| `"ORDCHG"` |             |

## referenzDar



`referenzDar`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenzdar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenzDar")

### referenzDar Type

`string`

## referenznummer



`referenznummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenznummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenznummer")

### referenznummer Type

`string`

## bestaetigungDar



`bestaetigungDar`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung-properties-bestaetigungdar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/bestaetigungDar")

### bestaetigungDar Type

`string`

## grund



`grund`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeitsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Handelsunstimmigkeitsgrund.schema.json#/properties/grund")

### grund Type

`string`

### grund Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                                      | Explanation |
| :------------------------------------------------------------------------- | :---------- |
| `"ANMELDUNG_BESTAETIGT"`                                                   |             |
| `"ABRECHNUNGSBEGINN_GLEICH_BESTAETIGTEM_VERTRAGSBEGINN"`                   |             |
| `"ABRECHNUNGSENDE_GLEICH_BESTAETIGTEM_VERTRAGSENDE"`                       |             |
| `"NN_MSCONS_UEBERSENDET"`                                                  |             |
| `"RICHTIGE_MESSWERTE_ENERGIEMENGEN_UEBERSENDET"`                           |             |
| `"SONSTIGES_SIEHE_BEGRUENDUNG"`                                            |             |
| `"GUELTIGES_PREISBLATT_VERSENDET"`                                         |             |
| `"GUELTIGER_SPERRAUFTRAG_VORHANDEN"`                                       |             |
| `"KORREKTE_ARTIKEL_ID_IN_RECHNUNG"`                                        |             |
| `"KORREKTER_PREIS_ZU_GUELTIGEM_PREISBLATT_IN_RECHNUNG"`                    |             |
| `"RECHNUNG_KORREKT_A05"`                                                   |             |
| `"RECHNUNG_KORREKT_A10"`                                                   |             |
| `"RECHNUNG_KORREKT_A11"`                                                   |             |
| `"GUELTIGES_PREISBLATT_FRISTGERECHT_VERSENDET"`                            |             |
| `"GUELTIGE_RECHNUNG_VORHANDEN"`                                            |             |
| `"ARTIKEL_ID_FUER_VERZUGSKOSTEN_VERWENDET"`                                |             |
| `"KORREKTER_PREIS_IN_RECHNUNG_ABGERECHNET"`                                |             |
| `"GUELTIGES_PREISBLATT_BLINDARBEIT_VERSENDET"`                             |             |
| `"KORREKTE_ARTIKEL_ID_IST_ANGEGEBEN"`                                      |             |
| `"RECHNUNG_BREGRUENDET_KORREKT"`                                           |             |
| `"KORREKTE_ARTIKEL_ID_FUER_ABRECHNUNG_STORNIERTER_SPERRAUFTRAG_ANGEGEBEN"` |             |
| `"SONSTIGES"`                                                              |             |

## hinweis



`hinweis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung-properties-hinweis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/hinweis")

### hinweis Type

`string`

## referenzen



`referenzen`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung-properties-referenzen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Handelsunstimmigkeitsbegruendung.schema.json#/properties/referenzen")

### referenzen Type

`string[]`
