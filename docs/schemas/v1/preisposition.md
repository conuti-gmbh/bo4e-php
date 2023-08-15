## Untitled object in undefined Type

`object` ([Details](preisposition.md))

# Untitled object in undefined Properties

| Property                                        | Type      | Required | Nullable       | Defined by                                                                                                                                                                                              |
| :---------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [berechnungsmethode](#berechnungsmethode)       | `string`  | Optional | cannot be null | [Untitled schema](kalkulationsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Kalkulationsmethode.schema.json#/properties/berechnungsmethode")                      |
| [leistungstyp](#leistungstyp)                   | `string`  | Optional | cannot be null | [Untitled schema](leistungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Leistungstyp.schema.json#/properties/leistungstyp")                                          |
| [leistungsbezeichnung](#leistungsbezeichnung)   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-leistungsbezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/leistungsbezeichnung") |
| [preiseinheit](#preiseinheit)                   | `string`  | Optional | cannot be null | [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/preiseinheit")                                  |
| [bezugsgroesse](#bezugsgroesse)                 | `string`  | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugsgroesse")                                       |
| [zeitbasis](#zeitbasis)                         | `string`  | Optional | cannot be null | [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeitbasis")                                               |
| [tarifzeit](#tarifzeit)                         | `string`  | Optional | cannot be null | [Untitled schema](tarifzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifzeit.schema.json#/properties/tarifzeit")                                                   |
| [bdewArtikelnummer](#bdewartikelnummer)         | `string`  | Optional | cannot be null | [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/bdewArtikelnummer")                           |
| [zonungsgroesse](#zonungsgroesse)               | `string`  | Optional | cannot be null | [Untitled schema](bemessungsgroesse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bemessungsgroesse.schema.json#/properties/zonungsgroesse")                              |
| [preisschluesselstamm](#preisschluesselstamm)   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisschluesselstamm") |
| [positionsnummer](#positionsnummer)             | `integer` | Optional | cannot be null | [Untitled schema](preisposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/positionsnummer")           |
| [messebene](#messebene)                         | `string`  | Optional | cannot be null | [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/messebene")                                                   |
| [beschreibung](#beschreibung)                   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/beschreibung")                 |
| [verarbeitungszeitraum](#verarbeitungszeitraum) | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/verarbeitungszeitraum")                                          |
| [artikelId](#artikelid)                         | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-artikelid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/artikelId")                       |
| [zu\_abschlaege](#zu_abschlaege)                | `array`   | Optional | cannot be null | [Untitled schema](preisposition-properties-zu_abschlaege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/zu_abschlaege")               |
| [preisstaffeln](#preisstaffeln)                 | `array`   | Optional | cannot be null | [Untitled schema](preisposition-properties-preisstaffeln.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisstaffeln")               |

## berechnungsmethode



`berechnungsmethode`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](kalkulationsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Kalkulationsmethode.schema.json#/properties/berechnungsmethode")

### berechnungsmethode Type

`string`

### berechnungsmethode Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                                      | Explanation |
| :------------------------------------------------------------------------- | :---------- |
| `"KEINE"`                                                                  |             |
| `"STAFFELN"`                                                               |             |
| `"ZONEN"`                                                                  |             |
| `"VORZONEN_GP"`                                                            |             |
| `"SIGMOID"`                                                                |             |
| `"BLINDARBEIT_GT_50_PROZENT"`                                              |             |
| `"BLINDARBEIT_GT_40_PROZENT"`                                              |             |
| `"AP_GP_ZONEN"`                                                            |             |
| `"LP_INSTALL_LEISTUNG"`                                                    |             |
| `"AP_TRANSPORT_ODER_VERTEILNETZ"`                                          |             |
| `"AP_TRANSPORT_ODER_VERTEILNETZ_ORTSVERTEILNETZ_SIGMOID"`                  |             |
| `"LP_JAHRESVERBRAUCH"`                                                     |             |
| `"LP_TRANSPORT_ODER_VERTEILNETZ"`                                          |             |
| `"LP_TRANSPORT_ODER_VERTEILNETZ_ORTSVERTEILNETZ_SIGMOID"`                  |             |
| `"FUNKTIONEN"`                                                             |             |
| `"VERBRAUCH_UEBER_SLP_GRENZE_FUNKTIONSBEZOGEN_WEITERE_BERECHNUNG_ALS_LGK"` |             |

## leistungstyp



`leistungstyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](leistungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Leistungstyp.schema.json#/properties/leistungstyp")

### leistungstyp Type

`string`

### leistungstyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                               | Explanation |
| :---------------------------------- | :---------- |
| `"ARBEITSPREIS_WIRKARBEIT"`         |             |
| `"LEISTUNGSPREIS_WIRKLEISTUNG"`     |             |
| `"ARBEITSPREIS_BLINDARBEIT_IND"`    |             |
| `"ARBEITSPREIS_BLINDARBEIT_KAP"`    |             |
| `"GRUNDPREIS"`                      |             |
| `"MEHRMINDERMENGE"`                 |             |
| `"MESSSTELLENBETRIEB"`              |             |
| `"MESSDIENSTLEISTUNG"`              |             |
| `"MESSDIENSTLEISTUNG_INKL_MESSUNG"` |             |
| `"ABRECHNUNG"`                      |             |
| `"KONZESSIONS_ABGABE"`              |             |
| `"KWK_UMLAGE"`                      |             |
| `"OFFSHORE_UMLAGE"`                 |             |
| `"ABLAV_UMLAGE"`                    |             |
| `"REGELENERGIE_UMLAGE"`             |             |
| `"BILANZIERUNG_UMLAGE"`             |             |
| `"AUSLESUNG_ZUSAETZLICH"`           |             |
| `"ABLESUNG_ZUSAETZLICH"`            |             |
| `"ABRECHNUNG_ZUSAETZLICH"`          |             |
| `"SPERRUNG"`                        |             |
| `"ENTSPERRUNG"`                     |             |
| `"MAHNKOSTEN"`                      |             |
| `"INKASSOKOSTEN"`                   |             |

## leistungsbezeichnung



`leistungsbezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-leistungsbezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/leistungsbezeichnung")

### leistungsbezeichnung Type

`string`

## preiseinheit



`preiseinheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/preiseinheit")

### preiseinheit Type

`string`

### preiseinheit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value   | Explanation |
| :------ | :---------- |
| `"EUR"` |             |
| `"CT"`  |             |

## bezugsgroesse



`bezugsgroesse`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugsgroesse")

### bezugsgroesse Type

`string`

### bezugsgroesse Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"W"`          |             |
| `"WH"`         |             |
| `"KW"`         |             |
| `"KWH"`        |             |
| `"KVARH"`      |             |
| `"MW"`         |             |
| `"MWH"`        |             |
| `"STUECK"`     |             |
| `"KUBIKMETER"` |             |
| `"STUNDE"`     |             |
| `"TAG"`        |             |
| `"MONAT"`      |             |
| `"JAHR"`       |             |
| `"PROZENT"`    |             |
| `"ANZAHL"`     |             |
| `"VAR"`        |             |
| `"KVAR"`       |             |
| `"VARH"`       |             |
| `"KWHK"`       |             |

## zeitbasis



`zeitbasis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeitbasis")

### zeitbasis Type

`string`

### zeitbasis Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"SEKUNDE"`        |             |
| `"MINUTE"`         |             |
| `"STUNDE"`         |             |
| `"VIERTEL_STUNDE"` |             |
| `"TAG"`            |             |
| `"WOCHE"`          |             |
| `"MONAT"`          |             |
| `"QUARTAL"`        |             |
| `"HALBJAHR"`       |             |
| `"JAHR"`           |             |

## tarifzeit



`tarifzeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](tarifzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifzeit.schema.json#/properties/tarifzeit")

### tarifzeit Type

`string`

### tarifzeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value           | Explanation |
| :-------------- | :---------- |
| `"TZ_STANDARD"` |             |
| `"TZ_HT"`       |             |
| `"TZ_NT"`       |             |

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

## zonungsgroesse



`zonungsgroesse`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bemessungsgroesse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bemessungsgroesse.schema.json#/properties/zonungsgroesse")

### zonungsgroesse Type

`string`

### zonungsgroesse Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                 | Explanation |
| :-------------------- | :---------- |
| `"WIRKARBEIT_EL"`     |             |
| `"LEISTUNG_EL"`       |             |
| `"BLINDARBEIT_KAP"`   |             |
| `"BLINDARBEIT_IND"`   |             |
| `"BLINDLEISTUNG_KAP"` |             |
| `"BLINDLEISTUNG_IND"` |             |
| `"WIRKARBEIT_TH"`     |             |
| `"LEISTUNG_TH"`       |             |
| `"VOLUMEN"`           |             |
| `"VOLUMENSTROM"`      |             |
| `"BENUTZUNGSDAUER"`   |             |
| `"ANZAHL"`            |             |

## preisschluesselstamm



`preisschluesselstamm`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisschluesselstamm")

### preisschluesselstamm Type

`string`

## positionsnummer



`positionsnummer`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/positionsnummer")

### positionsnummer Type

`integer`

## messebene



`messebene`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/messebene")

### messebene Type

`string`

### messebene Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"NSP"`          |             |
| `"MSP"`          |             |
| `"HSP"`          |             |
| `"HSS"`          |             |
| `"MSP_NSP_UMSP"` |             |
| `"HSP_MSP_UMSP"` |             |
| `"HSS_HSP_UMSP"` |             |
| `"HD"`           |             |
| `"MD"`           |             |
| `"ND"`           |             |

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/beschreibung")

### beschreibung Type

`string`

## verarbeitungszeitraum



`verarbeitungszeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/verarbeitungszeitraum")

### verarbeitungszeitraum Type

`object` ([Details](zeitraum.md))

## artikelId



`artikelId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-artikelid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/artikelId")

### artikelId Type

`string`

## zu\_abschlaege



`zu_abschlaege`

*   is optional

*   Type: `object[]` ([Details](positionsaufabschlag.md))

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-zu_abschlaege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/zu_abschlaege")

### zu\_abschlaege Type

`object[]` ([Details](positionsaufabschlag.md))

## preisstaffeln



`preisstaffeln`

*   is optional

*   Type: `object[]` ([Details](preisstaffel.md))

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-preisstaffeln.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisstaffeln")

### preisstaffeln Type

`object[]` ([Details](preisstaffel.md))
