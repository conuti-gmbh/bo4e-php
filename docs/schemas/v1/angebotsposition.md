## Untitled object in undefined Type

`object` ([Details](angebotsposition.md))

# Untitled object in undefined Properties

| Property                                      | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                    |
| :-------------------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [positionsbezeichung](#positionsbezeichung)   | `string` | Optional | cannot be null | [Untitled schema](angebotsposition-properties-positionsbezeichung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsposition.schema.json#/properties/positionsbezeichung")   |
| [positionsmenge](#positionsmenge)             | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/positionsmenge")                                                             |
| [positionspreis](#positionspreis)             | `object` | Optional | cannot be null | [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/positionspreis")                                                             |
| [positionsbetrag](#positionsbetrag)           | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/positionsbetrag")                                                          |
| [preisschluesselstamm](#preisschluesselstamm) | `string` | Optional | cannot be null | [Untitled schema](angebotsposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsposition.schema.json#/properties/preisschluesselstamm") |
| [bdewArtikelnummer](#bdewartikelnummer)       | `string` | Optional | cannot be null | [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/bdewArtikelnummer")                                 |

## positionsbezeichung



`positionsbezeichung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsposition-properties-positionsbezeichung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsposition.schema.json#/properties/positionsbezeichung")

### positionsbezeichung Type

`string`

## positionsmenge



`positionsmenge`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Menge.schema.json#/properties/positionsmenge")

### positionsmenge Type

`object` ([Details](menge.md))

## positionspreis



`positionspreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preis.schema.json#/properties/positionspreis")

### positionspreis Type

`object` ([Details](preis.md))

## positionsbetrag



`positionsbetrag`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Betrag.schema.json#/properties/positionsbetrag")

### positionsbetrag Type

`object` ([Details](betrag.md))

## preisschluesselstamm



`preisschluesselstamm`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Angebotsposition.schema.json#/properties/preisschluesselstamm")

### preisschluesselstamm Type

`string`

## bdewArtikelnummer



`bdewArtikelnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/bdewArtikelnummer")

### bdewArtikelnummer Type

`string`

### bdewArtikelnummer Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                          | Explanation |
| :--------------------------------------------- | :---------- |
| `"LEISTUNG"`                                   |             |
| `"LEISTUNG_PAUSCHAL"`                          |             |
| `"GRUNDPREIS"`                                 |             |
| `"REGELENERGIE_ARBEIT"`                        |             |
| `"REGELENERGIE_LEISTUNG"`                      |             |
| `"NOTSTROMLIEFERUNG_ARBEIT"`                   |             |
| `"NOTSTROMLIEFERUNG_LEISTUNG"`                 |             |
| `"RESERVENETZKAPAZITAET"`                      |             |
| `"RESERVELEISTUNG"`                            |             |
| `"ZUSAETZLICHE_ABLESUNG"`                      |             |
| `"PRUEFGEBUEHREN_AUSSERPLANMAESSIG"`           |             |
| `"WIRKARBEIT"`                                 |             |
| `"SINGULAER_GENUTZTE_BETRIEBSMITTEL"`          |             |
| `"ABGABE_KWKG"`                                |             |
| `"ABSCHLAG"`                                   |             |
| `"KONZESSIONSABGABE"`                          |             |
| `"ENTGELT_FERNAUSLESUNG"`                      |             |
| `"UNTERMESSUNG"`                               |             |
| `"BLINDMEHRARBEIT"`                            |             |
| `"ENTGELT_ABRECHNUNG"`                         |             |
| `"SPERRKOSTEN"`                                |             |
| `"ENTSPERRKOSTEN"`                             |             |
| `"MAHNKOSTEN"`                                 |             |
| `"MEHR_MINDERMENGEN"`                          |             |
| `"INKASSOKOSTEN"`                              |             |
| `"BLINDMEHRLEISTUNG"`                          |             |
| `"ENTGELT_MESSUNG_ABLESUNG"`                   |             |
| `"ENTGELT_EINBAU_BETRIEB_WARTUNG_MESSTECHNIK"` |             |
| `"AUSGLEICHSENERGIE"`                          |             |
| `"AUSGLEICHSENERGIE_UNTERDECKUNG"`             |             |
| `"ZAEHLEINRICHTUNG"`                           |             |
| `"WANDLER_MENGENUMWERTER"`                     |             |
| `"KOMMUNIKATIONSEINRICHTUNG"`                  |             |
| `"TECHNISCHE_STEUEREINRICHTUNG"`               |             |
| `"PARAGRAF_19_STROM_NEV_UMLAGE"`               |             |
| `"BEFESTIGUNGSEINRICHTUNG"`                    |             |
| `"OFFSHORE_HAFTUNGSUMLAGE"`                    |             |
| `"FIXE_ARBEITSENTGELTKOMPONENTE"`              |             |
| `"FIXE_LEISTUNGSENTGELTKOMPONENTE"`            |             |
| `"UMLAGE_ABSCHALTBARE_LASTEN"`                 |             |
| `"MEHRMENGE"`                                  |             |
| `"MINDERMENGE"`                                |             |
| `"ENERGIESTEUER"`                              |             |
| `"SMARTMETER_GATEWAY"`                         |             |
| `"STEUERBOX"`                                  |             |
| `"MSB_INKL_MESSUNG"`                           |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_2_1_MSBG"` |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_2_2_MSBG"` |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_2_3_MSBG"` |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_2_4_MSBG"` |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_2_5_MSBG"` |             |
| `"ZUSATZDIENSTLEISTUNG_PARAGRAPH_35_3_MSBG"`   |             |
