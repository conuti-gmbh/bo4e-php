## Untitled object in undefined Type

`object` ([Details](messlokation.md))

# Untitled object in undefined Properties

| Property                                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                 |
| :------------------------------------------------------------------ | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                     | `string`  | Required | cannot be null | [Untitled schema](messlokation-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/boTyp")                                                     |
| [versionStruktur](#versionstruktur)                                 | `string`  | Required | cannot be null | [Untitled schema](messlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/versionStruktur")                                 |
| [messlokationsId](#messlokationsid)                                 | `string`  | Optional | cannot be null | [Untitled schema](messlokation-properties-messlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messlokationsId")                                 |
| [sparte](#sparte)                                                   | `string`  | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                                               |
| [energierichtung](#energierichtung)                                 | `string`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")                                                    |
| [netzebenemessung](#netzebenemessung)                               | `string`  | Optional | cannot be null | [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/netzebenemessung")                                                               |
| [messgebietNr](#messgebietnr)                                       | `string`  | Optional | cannot be null | [Untitled schema](messlokation-properties-messgebietnr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messgebietNr")                                       |
| [grundzustaendigerMSBCodeNr](#grundzustaendigermsbcodenr)           | `string`  | Optional | cannot be null | [Untitled schema](messlokation-properties-grundzustaendigermsbcodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/grundzustaendigerMSBCodeNr")           |
| [messadresse](#messadresse)                                         | `object`  | Optional | cannot be null | [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/messadresse")                                                                         |
| [bilanzierungsmethode](#bilanzierungsmethode)                       | `string`  | Optional | cannot be null | [Untitled schema](bilanzierungsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bilanzierungsmethode.schema.json#/properties/bilanzierungsmethode")                                     |
| [abrechnungmessstellenbetriebnna](#abrechnungmessstellenbetriebnna) | `boolean` | Optional | cannot be null | [Untitled schema](messlokation-properties-abrechnungmessstellenbetriebnna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/abrechnungmessstellenbetriebnna") |
| [gasqualitaet](#gasqualitaet)                                       | `string`  | Optional | cannot be null | [Untitled schema](gasqualitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Gasqualitaet.schema.json#/properties/gasqualitaet")                                                             |
| [verlustfaktor](#verlustfaktor)                                     | `number`  | Optional | cannot be null | [Untitled schema](messlokation-properties-verlustfaktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/verlustfaktor")                                     |
| [betriebszustand](#betriebszustand)                                 | `string`  | Optional | cannot be null | [Untitled schema](betriebszustand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Betriebszustand.schema.json#/properties/betriebszustand")                                                    |
| [ablesekartenempfaenger](#ablesekartenempfaenger)                   | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/ablesekartenempfaenger")                                           |
| [referenzMarktlokationsId](#referenzmarktlokationsid)               | `string`  | Optional | cannot be null | [Untitled schema](messlokation-properties-referenzmarktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/referenzMarktlokationsId")               |
| [verwendungsumfang](#verwendungsumfang)                             | `string`  | Optional | cannot be null | [Untitled schema](verwendungsumfang.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verwendungsumfang.schema.json#/properties/verwendungsumfang")                                              |
| [geraete](#geraete)                                                 | `array`   | Optional | cannot be null | [Untitled schema](messlokation-properties-geraete.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/geraete")                                                 |
| [messdienstleistung](#messdienstleistung)                           | `array`   | Optional | cannot be null | [Untitled schema](messlokation-properties-messdienstleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messdienstleistung")                           |
| [messlokationszaehler](#messlokationszaehler)                       | `array`   | Optional | cannot be null | [Untitled schema](messlokation-properties-messlokationszaehler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messlokationszaehler")                       |
| [zaehlwerke](#zaehlwerke)                                           | `array`   | Optional | cannot be null | [Untitled schema](messlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/zaehlwerke")                                           |
| [marktrollen](#marktrollen)                                         | `array`   | Optional | cannot be null | [Untitled schema](messlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/marktrollen")                                         |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## messlokationsId



`messlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messlokationsId")

### messlokationsId Type

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

## netzebenemessung



`netzebenemessung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/netzebenemessung")

### netzebenemessung Type

`string`

### netzebenemessung Constraints

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

## messgebietNr



`messgebietNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messgebietnr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messgebietNr")

### messgebietNr Type

`string`

## grundzustaendigerMSBCodeNr



`grundzustaendigerMSBCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-grundzustaendigermsbcodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/grundzustaendigerMSBCodeNr")

### grundzustaendigerMSBCodeNr Type

`string`

## messadresse



`messadresse`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/messadresse")

### messadresse Type

`object` ([Details](adresse.md))

## bilanzierungsmethode



`bilanzierungsmethode`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierungsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bilanzierungsmethode.schema.json#/properties/bilanzierungsmethode")

### bilanzierungsmethode Type

`string`

### bilanzierungsmethode Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value             | Explanation |
| :---------------- | :---------- |
| `"RLM"`           |             |
| `"SLP"`           |             |
| `"TLP_GEMEINSAM"` |             |
| `"TLP_GETRENNT"`  |             |
| `"PAUSCHAL"`      |             |
| `"IMS"`           |             |

## abrechnungmessstellenbetriebnna



`abrechnungmessstellenbetriebnna`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-abrechnungmessstellenbetriebnna.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/abrechnungmessstellenbetriebnna")

### abrechnungmessstellenbetriebnna Type

`boolean`

## gasqualitaet



`gasqualitaet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](gasqualitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Gasqualitaet.schema.json#/properties/gasqualitaet")

### gasqualitaet Type

`string`

### gasqualitaet Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"H_GAS"` |             |
| `"L_GAS"` |             |

## verlustfaktor



`verlustfaktor`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-verlustfaktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/verlustfaktor")

### verlustfaktor Type

`number`

### verlustfaktor Constraints

**unknown format**: the value of this string must follow the format: `float`

## betriebszustand



`betriebszustand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](betriebszustand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Betriebszustand.schema.json#/properties/betriebszustand")

### betriebszustand Type

`string`

### betriebszustand Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                         | Explanation |
| :---------------------------- | :---------- |
| `"GESPERRT_NICHT_ENTSPERREN"` |             |
| `"GESPERRT"`                  |             |
| `"REGELBETRIEB"`              |             |

## ablesekartenempfaenger



`ablesekartenempfaenger`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/ablesekartenempfaenger")

### ablesekartenempfaenger Type

`object` ([Details](geschaeftspartner.md))

## referenzMarktlokationsId



`referenzMarktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-referenzmarktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/referenzMarktlokationsId")

### referenzMarktlokationsId Type

`string`

## verwendungsumfang



`verwendungsumfang`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verwendungsumfang.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verwendungsumfang.schema.json#/properties/verwendungsumfang")

### verwendungsumfang Type

`string`

### verwendungsumfang Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                 | Explanation |
| :------------------------------------ | :---------- |
| `"MESSLOKATION_PROZESSUAL_BEHANDELT"` |             |
| `"MESSLOKATION_LOKATIONSBUENDEL"`     |             |

## geraete



`geraete`

*   is optional

*   Type: `object[]` ([Details](geraet.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-geraete.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/geraete")

### geraete Type

`object[]` ([Details](geraet.md))

## messdienstleistung



`messdienstleistung`

*   is optional

*   Type: `object[]` ([Details](dienstleistung.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messdienstleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messdienstleistung")

### messdienstleistung Type

`object[]` ([Details](dienstleistung.md))

## messlokationszaehler



`messlokationszaehler`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messlokationszaehler.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/messlokationszaehler")

### messlokationszaehler Type

`string[]`

## zaehlwerke



`zaehlwerke`

*   is optional

*   Type: `object[]` ([Details](zaehlwerk.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/zaehlwerke")

### zaehlwerke Type

`object[]` ([Details](zaehlwerk.md))

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Messlokation.schema.json#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))
