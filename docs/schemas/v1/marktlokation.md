## Untitled object in undefined Type

`object` ([Details](marktlokation.md))

# Untitled object in undefined Properties

| Property                                                          | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                 |
| :---------------------------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                   | `string`  | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                                  |
| [versionStruktur](#versionstruktur)                               | `string`  | Required | cannot be null | [Untitled schema](marktlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/versionStruktur")                               |
| [marktlokationsId](#marktlokationsid)                             | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktlokationsId")                             |
| [sparte](#sparte)                                                 | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/sparte")                                                 |
| [energierichtung](#energierichtung)                               | `string`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")                                                    |
| [bilanzierungsmethode](#bilanzierungsmethode)                     | `string`  | Optional | cannot be null | [Untitled schema](bilanzierungsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bilanzierungsmethode.schema.json#/properties/bilanzierungsmethode")                                     |
| [verbrauchsart](#verbrauchsart)                                   | `string`  | Optional | cannot be null | [Untitled schema](verbrauchsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Verbrauchsart.schema.json#/properties/verbrauchsart")                                                          |
| [unterbrechbar](#unterbrechbar)                                   | `boolean` | Optional | cannot be null | [Untitled schema](marktlokation-properties-unterbrechbar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/unterbrechbar")                                   |
| [netzebene](#netzebene)                                           | `string`  | Optional | cannot be null | [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/netzebene")                                                                      |
| [umspannung](#umspannung)                                         | `string`  | Optional | cannot be null | [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/umspannung")                                                                     |
| [netzbetreiberCodeNr](#netzbetreibercodenr)                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-netzbetreibercodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netzbetreiberCodeNr")                       |
| [gebietTyp](#gebiettyp)                                           | `string`  | Optional | cannot be null | [Untitled schema](gebiettyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Gebiettyp.schema.json#/properties/gebietTyp")                                                                      |
| [netzgebietNr](#netzgebietnr)                                     | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-netzgebietnr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netzgebietNr")                                     |
| [bilanzierungsgebiet](#bilanzierungsgebiet)                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-bilanzierungsgebiet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/bilanzierungsgebiet")                       |
| [grundversorgerCodeNr](#grundversorgercodenr)                     | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-grundversorgercodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/grundversorgerCodeNr")                     |
| [gasqualitaet](#gasqualitaet)                                     | `string`  | Optional | cannot be null | [Untitled schema](gasqualitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Gasqualitaet.schema.json#/properties/gasqualitaet")                                                             |
| [endkunde](#endkunde)                                             | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/endkunde")                                                         |
| [lokationsadresse](#lokationsadresse)                             | `object`  | Optional | cannot be null | [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/lokationsadresse")                                                                    |
| [katasterinformation](#katasterinformation)                       | `object`  | Optional | cannot be null | [Untitled schema](katasteradresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Katasteradresse.schema.json#/properties/katasterinformation")                                                 |
| [regelzone](#regelzone)                                           | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-regelzone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/regelzone")                                           |
| [marktgebiet](#marktgebiet)                                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktgebiet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktgebiet")                                       |
| [zeitreihentyp](#zeitreihentyp)                                   | `string`  | Optional | cannot be null | [Untitled schema](zeitreihentyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeitreihentyp.schema.json#/properties/zeitreihentyp")                                                          |
| [messtechnischeEinordnung](#messtechnischeeinordnung)             | `string`  | Optional | cannot be null | [Untitled schema](messtechnischeeinordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/MesstechnischeEinordnung.schema.json#/properties/messtechnischeEinordnung")                         |
| [sperrstatus](#sperrstatus)                                       | `string`  | Optional | cannot be null | [Untitled schema](sperrstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sperrstatus.schema.json#/properties/sperrstatus")                                                                |
| [referenzMarktlokationsId](#referenzmarktlokationsid)             | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-referenzmarktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/referenzMarktlokationsId")             |
| [versorgungsart](#versorgungsart)                                 | `string`  | Optional | cannot be null | [Untitled schema](versorgungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Versorgungsart.schema.json#/properties/versorgungsart")                                                       |
| [eigentuemer](#eigentuemer)                                       | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/eigentuemer")                                                      |
| [hausverwalter](#hausverwalter)                                   | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/hausverwalter")                                                    |
| [verguetungEmpfaenger](#verguetungempfaenger)                     | `string`  | Optional | cannot be null | [Untitled schema](verguetungempfaenger.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/VerguetungEmpfaenger.schema.json#/properties/verguetungEmpfaenger")                                     |
| [statusErzeugendeMalo](#statuserzeugendemalo)                     | `string`  | Optional | cannot be null | [Untitled schema](statuserzeugendemarktlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/StatusErzeugendeMarktlokation.schema.json#/properties/statusErzeugendeMalo")                   |
| [fernsteuerbarkeit](#fernsteuerbarkeit)                           | `string`  | Optional | cannot be null | [Untitled schema](fernsteuerbarkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Fernsteuerbarkeit.schema.json#/properties/fernsteuerbarkeit")                                              |
| [foerderungsLand](#foerderungsland)                               | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-foerderungsland.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/foerderungsLand")                               |
| [redispatch](#redispatch)                                         | `boolean` | Optional | cannot be null | [Untitled schema](marktlokation-properties-redispatch.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/redispatch")                                         |
| [marktrollen](#marktrollen)                                       | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktrollen")                                       |
| [zaehlwerke](#zaehlwerke)                                         | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zaehlwerke")                                         |
| [zaehlwerkeBeteiligteMarktrolle](#zaehlwerkebeteiligtemarktrolle) | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zaehlwerkebeteiligtemarktrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zaehlwerkeBeteiligteMarktrolle") |
| [verbrauchsmenge](#verbrauchsmenge)                               | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-verbrauchsmenge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/verbrauchsmenge")                               |
| [zugehoerigeMesslokationen](#zugehoerigemesslokationen)           | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zugehoerigemesslokationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zugehoerigeMesslokationen")           |
| [netznutzungsabrechnungsdaten](#netznutzungsabrechnungsdaten)     | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-netznutzungsabrechnungsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netznutzungsabrechnungsdaten")     |
| [energieherkunft](#energieherkunft)                               | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-energieherkunft.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/energieherkunft")                               |

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

*   defined in: [Untitled schema](marktlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## marktlokationsId



`marktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktlokationsId")

### marktlokationsId Type

`string`

## sparte



`sparte`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/sparte")

### sparte Type

`string`

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

## unterbrechbar



`unterbrechbar`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-unterbrechbar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/unterbrechbar")

### unterbrechbar Type

`boolean`

## netzebene



`netzebene`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/netzebene")

### netzebene Type

`string`

### netzebene Constraints

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

## umspannung



`umspannung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/umspannung")

### umspannung Type

`string`

### umspannung Constraints

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

## netzbetreiberCodeNr



`netzbetreiberCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netzbetreibercodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netzbetreiberCodeNr")

### netzbetreiberCodeNr Type

`string`

## gebietTyp



`gebietTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](gebiettyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Gebiettyp.schema.json#/properties/gebietTyp")

### gebietTyp Type

`string`

### gebietTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                      | Explanation |
| :------------------------- | :---------- |
| `"REGELZONE"`              |             |
| `"MARKTGEBIET"`            |             |
| `"BILANZIERUNGSGEBIET"`    |             |
| `"VERTEILNETZ"`            |             |
| `"TRANSPORTNETZ"`          |             |
| `"REGIONALNETZ"`           |             |
| `"AREALNETZ"`              |             |
| `"GRUNDVERSORGUNGSGEBIET"` |             |
| `"VERSORGUNGSGEBIET"`      |             |

## netzgebietNr



`netzgebietNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netzgebietnr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netzgebietNr")

### netzgebietNr Type

`string`

## bilanzierungsgebiet



`bilanzierungsgebiet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-bilanzierungsgebiet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/bilanzierungsgebiet")

### bilanzierungsgebiet Type

`string`

## grundversorgerCodeNr



`grundversorgerCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-grundversorgercodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/grundversorgerCodeNr")

### grundversorgerCodeNr Type

`string`

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

## endkunde



`endkunde`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/endkunde")

### endkunde Type

`object` ([Details](geschaeftspartner.md))

## lokationsadresse



`lokationsadresse`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Adresse.schema.json#/properties/lokationsadresse")

### lokationsadresse Type

`object` ([Details](adresse.md))

## katasterinformation



`katasterinformation`

*   is optional

*   Type: `object` ([Details](katasteradresse.md))

*   cannot be null

*   defined in: [Untitled schema](katasteradresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Katasteradresse.schema.json#/properties/katasterinformation")

### katasterinformation Type

`object` ([Details](katasteradresse.md))

## regelzone



`regelzone`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-regelzone.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/regelzone")

### regelzone Type

`string`

## marktgebiet



`marktgebiet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktgebiet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktgebiet")

### marktgebiet Type

`string`

## zeitreihentyp



`zeitreihentyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zeitreihentyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeitreihentyp.schema.json#/properties/zeitreihentyp")

### zeitreihentyp Type

`string`

### zeitreihentyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value       | Explanation |
| :---------- | :---------- |
| `"EGS"`     |             |
| `"LGS"`     |             |
| `"NZR"`     |             |
| `"SES"`     |             |
| `"SLS"`     |             |
| `"TES"`     |             |
| `"TLS"`     |             |
| `"SLS_TLS"` |             |
| `"SES_TES"` |             |

## messtechnischeEinordnung



`messtechnischeEinordnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messtechnischeeinordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/MesstechnischeEinordnung.schema.json#/properties/messtechnischeEinordnung")

### messtechnischeEinordnung Type

`string`

### messtechnischeEinordnung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value             | Explanation |
| :---------------- | :---------- |
| `"IMS"`           |             |
| `"KME_MME"`       |             |
| `"KEINE_MESSUNG"` |             |

## sperrstatus



`sperrstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Sperrstatus.schema.json#/properties/sperrstatus")

### sperrstatus Type

`string`

### sperrstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value         | Explanation |
| :------------ | :---------- |
| `"ENTSPERRT"` |             |
| `"GESPERRT"`  |             |

## referenzMarktlokationsId



`referenzMarktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-referenzmarktlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/referenzMarktlokationsId")

### referenzMarktlokationsId Type

`string`

## versorgungsart



`versorgungsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](versorgungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Versorgungsart.schema.json#/properties/versorgungsart")

### versorgungsart Type

`string`

### versorgungsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                 | Explanation |
| :-------------------- | :---------- |
| `"ERSATZVERSORGUNG"`  |             |
| `"GRUNDVERSORGUNG"`   |             |
| `"ERSATZBELIEFERUNG"` |             |

## eigentuemer



`eigentuemer`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/eigentuemer")

### eigentuemer Type

`object` ([Details](geschaeftspartner.md))

## hausverwalter



`hausverwalter`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Geschaeftspartner.schema.json#/properties/hausverwalter")

### hausverwalter Type

`object` ([Details](geschaeftspartner.md))

## verguetungEmpfaenger



`verguetungEmpfaenger`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verguetungempfaenger.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/VerguetungEmpfaenger.schema.json#/properties/verguetungEmpfaenger")

### verguetungEmpfaenger Type

`string`

### verguetungEmpfaenger Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value         | Explanation |
| :------------ | :---------- |
| `"KUNDE"`     |             |
| `"LIEFERANT"` |             |

## statusErzeugendeMalo



`statusErzeugendeMalo`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statuserzeugendemarktlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/StatusErzeugendeMarktlokation.schema.json#/properties/statusErzeugendeMalo")

### statusErzeugendeMalo Type

`string`

### statusErzeugendeMalo Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                  | Explanation |
| :----------------------------------------------------- | :---------- |
| `"EINSPEISEVERGUETUNG_PARAGRAPH_37"`                   |             |
| `"GEFOERDERTE_DIREKTVERMARKTUNG"`                      |             |
| `"SONSTIGE_DIREKTVERMARKTUNG"`                         |             |
| `"VERMARKTUNG_OHNE_GESETZL_VERGUETUNG"`                |             |
| `"KWKG_VERGUETUNG"`                                    |             |
| `"EINSPEISEVERGUETUNG_PARAGRAPH_38_AUSFALLVERGUETUNG"` |             |

## fernsteuerbarkeit



`fernsteuerbarkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](fernsteuerbarkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Fernsteuerbarkeit.schema.json#/properties/fernsteuerbarkeit")

### fernsteuerbarkeit Type

`string`

### fernsteuerbarkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                             | Explanation |
| :-------------------------------- | :---------- |
| `"TECHNISCH_NICHT_FERNSTEUERBAR"` |             |
| `"TECHNISCH_FERNSTEUERBAR"`       |             |
| `"DURCH_LF_FERNSTEUERBAR"`        |             |

## foerderungsLand



`foerderungsLand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-foerderungsland.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/foerderungsLand")

### foerderungsLand Type

`string`

## redispatch



`redispatch`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-redispatch.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/redispatch")

### redispatch Type

`boolean`

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))

## zaehlwerke



`zaehlwerke`

*   is optional

*   Type: `object[]` ([Details](zaehlwerk.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zaehlwerke")

### zaehlwerke Type

`object[]` ([Details](zaehlwerk.md))

## zaehlwerkeBeteiligteMarktrolle



`zaehlwerkeBeteiligteMarktrolle`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zaehlwerkebeteiligtemarktrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zaehlwerkeBeteiligteMarktrolle")

### zaehlwerkeBeteiligteMarktrolle Type

`string[]`

## verbrauchsmenge



`verbrauchsmenge`

*   is optional

*   Type: `object[]` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-verbrauchsmenge.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/verbrauchsmenge")

### verbrauchsmenge Type

`object[]` ([Details](menge.md))

## zugehoerigeMesslokationen



`zugehoerigeMesslokationen`

*   is optional

*   Type: `object[]` ([Details](messlokationszuordnung.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zugehoerigemesslokationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/zugehoerigeMesslokationen")

### zugehoerigeMesslokationen Type

`object[]` ([Details](messlokationszuordnung.md))

## netznutzungsabrechnungsdaten



`netznutzungsabrechnungsdaten`

*   is optional

*   Type: `object[]` ([Details](netznutzungsabrechnungsdaten.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netznutzungsabrechnungsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/netznutzungsabrechnungsdaten")

### netznutzungsabrechnungsdaten Type

`object[]` ([Details](netznutzungsabrechnungsdaten.md))

## energieherkunft



`energieherkunft`

*   is optional

*   Type: `object[]` ([Details](energieherkunft.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-energieherkunft.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Marktlokation.schema.json#/properties/energieherkunft")

### energieherkunft Type

`object[]` ([Details](energieherkunft.md))
