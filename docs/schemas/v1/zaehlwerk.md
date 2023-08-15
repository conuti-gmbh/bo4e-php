## Untitled object in undefined Type

`object` ([Details](zaehlwerk.md))

# Untitled object in undefined Properties

| Property                                                                  | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                       |
| :------------------------------------------------------------------------ | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [zaehlwerkId](#zaehlwerkid)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-zaehlwerkid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/zaehlwerkId")                                                    |
| [bezeichnung](#bezeichnung)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/bezeichnung")                                                    |
| [richtung](#richtung)                                                     | `string`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/richtung")                                                                 |
| [obisKennzahl](#obiskennzahl)                                             | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/obisKennzahl")                                                  |
| [wandlerfaktor](#wandlerfaktor)                                           | `number`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-wandlerfaktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/wandlerfaktor")                                                |
| [einheit](#einheit)                                                       | `string`  | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/einheit")                                                                      |
| [schwachlastfaehig](#schwachlastfaehig)                                   | `string`  | Optional | cannot be null | [Untitled schema](schwachlastfaehig.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Schwachlastfaehig.schema.json#/properties/schwachlastfaehig")                                                    |
| [verbrauchsart](#verbrauchsart)                                           | `string`  | Optional | cannot be null | [Untitled schema](verbrauchsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verbrauchsart.schema.json#/properties/verbrauchsart")                                                                |
| [unterbrechbarkeit](#unterbrechbarkeit)                                   | `string`  | Optional | cannot be null | [Untitled schema](unterbrechbarkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Unterbrechbarkeit.schema.json#/properties/unterbrechbarkeit")                                                    |
| [waermenutzung](#waermenutzung)                                           | `string`  | Optional | cannot be null | [Untitled schema](waermenutzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waermenutzung.schema.json#/properties/waermenutzung")                                                                |
| [konzessionsabgabe](#konzessionsabgabe)                                   | `object`  | Optional | cannot be null | [Untitled schema](konzessionsabgabe.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/konzessionsabgabe")                                                     |
| [steuerbefreit](#steuerbefreit)                                           | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-steuerbefreit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/steuerbefreit")                                                |
| [vorkommastelle](#vorkommastelle)                                         | `integer` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-vorkommastelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/vorkommastelle")                                              |
| [nachkommastelle](#nachkommastelle)                                       | `integer` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-nachkommastelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/nachkommastelle")                                            |
| [abrechnungsrelevant](#abrechnungsrelevant)                               | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-abrechnungsrelevant.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/abrechnungsrelevant")                                    |
| [anzahlAblesungen](#anzahlablesungen)                                     | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-anzahlablesungen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/anzahlAblesungen")                                          |
| [zaehlzeiten](#zaehlzeiten)                                               | `object`  | Optional | cannot be null | [Untitled schema](zaehlzeitregister.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/zaehlzeiten")                                                           |
| [konfiguration](#konfiguration)                                           | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/konfiguration")                                                |
| [messprodukt](#messprodukt)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-messprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/messprodukt")                                                    |
| [wertegranularitaet](#wertegranularitaet)                                 | `string`  | Optional | cannot be null | [Untitled schema](wertegranularitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Wertegranularitaet.schema.json#/properties/wertegranularitaet")                                                 |
| [notwendigkeitZweiteMessung](#notwendigkeitzweitemessung)                 | `string`  | Optional | cannot be null | [Untitled schema](notwendigkeitzweitemessung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/NotwendigkeitZweiteMessung.schema.json#/properties/notwendigkeitZweiteMessung")                         |
| [werteuebermittlungVerwendungszweck](#werteuebermittlungverwendungszweck) | `string`  | Optional | cannot be null | [Untitled schema](werteuebermitllungverwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WerteuebermittlungVerwendungszweck.schema.json#/properties/werteuebermittlungVerwendungszweck") |
| [artEMobilitaet](#artemobilitaet)                                         | `string`  | Optional | cannot be null | [Untitled schema](artemobilitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ArtEmobilitaet.schema.json#/properties/artEMobilitaet")                                                             |
| [verwendungszwecke](#verwendungszwecke)                                   | `array`   | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-verwendungszwecke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/verwendungszwecke")                                        |

## zaehlwerkId



`zaehlwerkId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-zaehlwerkid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/zaehlwerkId")

### zaehlwerkId Type

`string`

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-bezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/bezeichnung")

### bezeichnung Type

`string`

## richtung



`richtung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/richtung")

### richtung Type

`string`

### richtung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"AUSSP"` |             |
| `"EINSP"` |             |

## obisKennzahl



`obisKennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/obisKennzahl")

### obisKennzahl Type

`string`

## wandlerfaktor



`wandlerfaktor`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-wandlerfaktor.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/wandlerfaktor")

### wandlerfaktor Type

`number`

## einheit



`einheit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/einheit")

### einheit Type

`string`

### einheit Constraints

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

## schwachlastfaehig



`schwachlastfaehig`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schwachlastfaehig.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Schwachlastfaehig.schema.json#/properties/schwachlastfaehig")

### schwachlastfaehig Type

`string`

### schwachlastfaehig Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                       | Explanation |
| :-------------------------- | :---------- |
| `"SCHWACHLASTFAEHIG"`       |             |
| `"NICHT_SCHWACHLASTFAEHIG"` |             |

## verbrauchsart



`verbrauchsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauchsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verbrauchsart.schema.json#/properties/verbrauchsart")

### verbrauchsart Type

`string`

### verbrauchsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value    | Explanation |
| :------- | :---------- |
| `"KL"`   |             |
| `"W"`    |             |
| `"EMOB"` |             |
| `"SB"`   |             |
| `"SW"`   |             |

## unterbrechbarkeit



`unterbrechbarkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](unterbrechbarkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Unterbrechbarkeit.schema.json#/properties/unterbrechbarkeit")

### unterbrechbarkeit Type

`string`

### unterbrechbarkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value   | Explanation |
| :------ | :---------- |
| `"UV"`  |             |
| `"NUV"` |             |

## waermenutzung



`waermenutzung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](waermenutzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waermenutzung.schema.json#/properties/waermenutzung")

### waermenutzung Type

`string`

### waermenutzung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"SPEICHERHEIZUNG"` |             |
| `"WAERMEPUMPE"`     |             |
| `"DIREKTHEIZUNG"`   |             |

## konzessionsabgabe



`konzessionsabgabe`

*   is optional

*   Type: `object` ([Details](konzessionsabgabe.md))

*   cannot be null

*   defined in: [Untitled schema](konzessionsabgabe.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Konzessionsabgabe.schema.json#/properties/konzessionsabgabe")

### konzessionsabgabe Type

`object` ([Details](konzessionsabgabe.md))

## steuerbefreit



`steuerbefreit`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-steuerbefreit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/steuerbefreit")

### steuerbefreit Type

`boolean`

## vorkommastelle



`vorkommastelle`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-vorkommastelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/vorkommastelle")

### vorkommastelle Type

`integer`

## nachkommastelle



`nachkommastelle`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-nachkommastelle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/nachkommastelle")

### nachkommastelle Type

`integer`

## abrechnungsrelevant



`abrechnungsrelevant`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-abrechnungsrelevant.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/abrechnungsrelevant")

### abrechnungsrelevant Type

`boolean`

## anzahlAblesungen



`anzahlAblesungen`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-anzahlablesungen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/anzahlAblesungen")

### anzahlAblesungen Type

`boolean`

## zaehlzeiten



`zaehlzeiten`

*   is optional

*   Type: `object` ([Details](zaehlzeitregister.md))

*   cannot be null

*   defined in: [Untitled schema](zaehlzeitregister.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlzeitregister.schema.json#/properties/zaehlzeiten")

### zaehlzeiten Type

`object` ([Details](zaehlzeitregister.md))

## konfiguration



`konfiguration`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/konfiguration")

### konfiguration Type

`string`

## messprodukt



`messprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-messprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/messprodukt")

### messprodukt Type

`string`

## wertegranularitaet



`wertegranularitaet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wertegranularitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Wertegranularitaet.schema.json#/properties/wertegranularitaet")

### wertegranularitaet Type

`string`

### wertegranularitaet Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value             | Explanation |
| :---------------- | :---------- |
| `"JAEHRLICH"`     |             |
| `"HALBJAEHRLICH"` |             |
| `"QUARTALSWEISE"` |             |
| `"MONATLICH"`     |             |

## notwendigkeitZweiteMessung



`notwendigkeitZweiteMessung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](notwendigkeitzweitemessung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/NotwendigkeitZweiteMessung.schema.json#/properties/notwendigkeitZweiteMessung")

### notwendigkeitZweiteMessung Type

`string`

### notwendigkeitZweiteMessung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"VORHANDEN"`       |             |
| `"NICHT_VORHANDEN"` |             |

## werteuebermittlungVerwendungszweck



`werteuebermittlungVerwendungszweck`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](werteuebermitllungverwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/WerteuebermittlungVerwendungszweck.schema.json#/properties/werteuebermittlungVerwendungszweck")

### werteuebermittlungVerwendungszweck Type

`string`

### werteuebermittlungVerwendungszweck Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"VORHANDEN"`       |             |
| `"NICHT_VORHANDEN"` |             |

## artEMobilitaet



`artEMobilitaet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](artemobilitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ArtEmobilitaet.schema.json#/properties/artEMobilitaet")

### artEMobilitaet Type

`string`

### artEMobilitaet Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value  | Explanation |
| :----- | :---------- |
| `"WB"` |             |
| `"LS"` |             |
| `"LP"` |             |

## verwendungszwecke



`verwendungszwecke`

*   is optional

*   Type: `object[]` ([Details](verwendungszweck.md))

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-verwendungszwecke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zaehlwerk.schema.json#/properties/verwendungszwecke")

### verwendungszwecke Type

`object[]` ([Details](verwendungszweck.md))
