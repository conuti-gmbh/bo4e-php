## Untitled object in undefined Type

`object` ([Details](geraeteeigenschaften.md))

# Untitled object in undefined Properties

| Property                          | Type     | Required | Nullable       | Defined by                                                                                                                                                                                |
| :-------------------------------- | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [geraetetyp](#geraetetyp)         | `string` | Optional | cannot be null | [Untitled schema](geraetetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Geraetetyp.schema.json#/properties/geraetetyp")                                  |
| [geraetemerkmal](#geraetemerkmal) | `string` | Optional | cannot be null | [Untitled schema](geraetemerkmal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Geraetemerkmal.schema.json#/properties/geraetemerkmal")                      |
| [faktor](#faktor)                 | `number` | Optional | cannot be null | [Untitled schema](geraeteeigenschaften-properties-faktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Geraeteeigenschaften.schema.json#/properties/faktor") |

## geraetetyp



`geraetetyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](geraetetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Geraetetyp.schema.json#/properties/geraetetyp")

### geraetetyp Type

`string`

### geraetetyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                               | Explanation |
| :---------------------------------- | :---------- |
| `"WECHSELSTROMZAEHLER"`             |             |
| `"DREHSTROMZAEHLER"`                |             |
| `"ZWEIRICHTUNGSZAEHLER"`            |             |
| `"RLM_ZAEHLER"`                     |             |
| `"IMS_ZAEHLER"`                     |             |
| `"BALGENGASZAEHLER"`                |             |
| `"MAXIMUMZAEHLER"`                  |             |
| `"MULTIPLEXANLAGE"`                 |             |
| `"PAUSCHALANLAGE"`                  |             |
| `"VERSTAERKERANLAGE"`               |             |
| `"SUMMATIONSGERAET"`                |             |
| `"IMPULSGEBER"`                     |             |
| `"EDL_21_ZAEHLERAUFSATZ"`           |             |
| `"VIER_QUADRANTEN_LASTGANGZAEHLER"` |             |
| `"MENGENUMWERTER"`                  |             |
| `"STROMWANDLER"`                    |             |
| `"SPANNUNGSWANDLER"`                |             |
| `"DATENLOGGER"`                     |             |
| `"KOMMUNIKATIONSANSCHLUSS"`         |             |
| `"MODEM"`                           |             |
| `"TELEKOMMUNIKATIONSEINRICHTUNG"`   |             |
| `"KOMMUNIKATIONSEINRICHTUNG"`       |             |
| `"DREHKOLBENGASZAEHLER"`            |             |
| `"TURBINENRADGASZAEHLER"`           |             |
| `"ULTRASCHALLZAEHLER"`              |             |
| `"WIRBELGASZAEHLER"`                |             |
| `"MODERNE_MESSEINRICHTUNG"`         |             |
| `"ELEKTRONISCHER_HAUSHALTSZAEHLER"` |             |
| `"STEUEREINRICHTUNG"`               |             |
| `"TECHNISCHESTEUEREINRICHTUNG"`     |             |
| `"TARIFSCHALTGERAET"`               |             |
| `"RUNDSTEUEREMPFAENGER"`            |             |
| `"OPTIONALE_ZUS_ZAEHLEINRICHTUNG"`  |             |
| `"MESSWANDLERSATZ_IMS_MME"`         |             |
| `"KOMBIMESSWANDLER_IMS_MME"`        |             |
| `"TARIFSCHALTGERAET_IMS_MME"`       |             |
| `"RUNDSTEUEREMPFAENGER_IMS_MME"`    |             |
| `"TEMPERATUR_KOMPENSATION"`         |             |
| `"HOECHSTBELASTUNGS_ANZEIGER"`      |             |
| `"SONSTIGES_GERAET"`                |             |
| `"SMARTMETERGATEWAY"`               |             |
| `"STEUERBOX"`                       |             |
| `"BLOCKSTROMWANDLER"`               |             |
| `"KOMBIMESSWANDLER"`                |             |
| `"MODEM_GSM"`                       |             |
| `"ETHERNET_KOM"`                    |             |
| `"PLC_COM"`                         |             |
| `"MODEM_FESTNETZ"`                  |             |
| `"DSL_KOM"`                         |             |
| `"LTE_KOM"`                         |             |
| `"DICHTEMENGENUMWERTER"`            |             |
| `"TEMPERATURMENGENUMWERTER"`        |             |
| `"ZUSTANDSMENGENUMWERTER"`          |             |
| `"MESSDATENREGISTRIERGERAET"`       |             |
| `"WANDLER"`                         |             |

## geraetemerkmal



`geraetemerkmal`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](geraetemerkmal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Geraetemerkmal.schema.json#/properties/geraetemerkmal")

### geraetemerkmal Type

`string`

### geraetemerkmal Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                        | Explanation |
| :--------------------------- | :---------- |
| `"EINTARIF"`                 |             |
| `"ZWEITARIF"`                |             |
| `"MEHRTARIF"`                |             |
| `"GAS_G2P5"`                 |             |
| `"GAS_G4"`                   |             |
| `"GAS_G6"`                   |             |
| `"GAS_G10"`                  |             |
| `"GAS_G16"`                  |             |
| `"GAS_G25"`                  |             |
| `"GAS_G40"`                  |             |
| `"GAS_G65"`                  |             |
| `"GAS_G100"`                 |             |
| `"GAS_G160"`                 |             |
| `"GAS_G250"`                 |             |
| `"GAS_G350"`                 |             |
| `"GAS_G400"`                 |             |
| `"GAS_G4000"`                |             |
| `"GAS_G650"`                 |             |
| `"GAS_G6500"`                |             |
| `"GAS_G1000"`                |             |
| `"GAS_G10000"`               |             |
| `"GAS_G12500"`               |             |
| `"GAS_G1600"`                |             |
| `"GAS_G16000"`               |             |
| `"GAS_G2500"`                |             |
| `"IMPULSGEBER_G4_G100"`      |             |
| `"IMPULSGEBER_G100"`         |             |
| `"MODEM_GSM"`                |             |
| `"MODEM_GPRS"`               |             |
| `"MODEM_FUNK"`               |             |
| `"MODEM_GSM_O_LG"`           |             |
| `"MODEM_GSM_M_LG"`           |             |
| `"MODEM_FESTNETZ"`           |             |
| `"MODEM_GPRS_M_LG"`          |             |
| `"PLC_COM"`                  |             |
| `"ETHERNET_KOM"`             |             |
| `"DSL_KOM"`                  |             |
| `"LTE_KOM"`                  |             |
| `"RUNDSTEUEREMPFAENGER"`     |             |
| `"TARIFSCHALTGERAET"`        |             |
| `"ZUSTANDS_MU"`              |             |
| `"TEMPERATUR_MU"`            |             |
| `"KOMPAKT_MU"`               |             |
| `"SYSTEM_MU"`                |             |
| `"UNBESTIMMT"`               |             |
| `"WASSER_MWZW"`              |             |
| `"WASSER_WZWW"`              |             |
| `"WASSER_WZ01"`              |             |
| `"WASSER_WZ02"`              |             |
| `"WASSER_WZ03"`              |             |
| `"WASSER_WZ04"`              |             |
| `"WASSER_WZ05"`              |             |
| `"WASSER_WZ06"`              |             |
| `"WASSER_WZ07"`              |             |
| `"WASSER_WZ08"`              |             |
| `"WASSER_WZ09"`              |             |
| `"WASSER_WZ10"`              |             |
| `"WASSER_VWZ04"`             |             |
| `"WASSER_VWZ05"`             |             |
| `"WASSER_VWZ06"`             |             |
| `"WASSER_VWZ07"`             |             |
| `"WASSER_VWZ10"`             |             |
| `"DICHTEMENGENUMWERTER"`     |             |
| `"TEMPERATURMENGENUMWERTER"` |             |
| `"ZUSTANDSMENGENUMWERTER"`   |             |
| `"BLOCKSTROMWANDLER"`        |             |
| `"MESSWANDLERSATZ_IMS_MME"`  |             |
| `"KOMBIMESSWANDLER"`         |             |
| `"SPANNUNGSWANDLER"`         |             |

## faktor



`faktor`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](geraeteeigenschaften-properties-faktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Geraeteeigenschaften.schema.json#/properties/faktor")

### faktor Type

`number`

### faktor Constraints

**unknown format**: the value of this string must follow the format: `float`
