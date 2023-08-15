## Untitled object in undefined Type

`object` ([Details](bankverbindung.md))

# Untitled object in undefined Properties

| Property                              | Type     | Required | Nullable       | Defined by                                                                                                                                                                                             |
| :------------------------------------ | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [verwendungszweck](#verwendungszweck) | `string` | Optional | cannot be null | [Untitled schema](bankverbindungverwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BankverbindungVerwendungszweck.schema.json#/properties/verwendungszweck") |
| [iban](#iban)                         | `string` | Optional | cannot be null | [Untitled schema](bankverbindung-properties-iban.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/iban")                              |
| [kontoinhaber](#kontoinhaber)         | `string` | Optional | cannot be null | [Untitled schema](bankverbindung-properties-kontoinhaber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/kontoinhaber")              |
| [bic](#bic)                           | `string` | Optional | cannot be null | [Untitled schema](bankverbindung-properties-bic.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/bic")                                |
| [kreditinstitut](#kreditinstitut)     | `string` | Optional | cannot be null | [Untitled schema](bankverbindung-properties-kreditinstitut.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/kreditinstitut")          |

## verwendungszweck



`verwendungszweck`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bankverbindungverwendungszweck.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BankverbindungVerwendungszweck.schema.json#/properties/verwendungszweck")

### verwendungszweck Type

`string`

### verwendungszweck Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                 | Explanation |
| :------------------------------------ | :---------- |
| `"BV_ZAHLUNG_NNA"`                    |             |
| `"BV_ZAHLUNG_MMMA"`                   |             |
| `"BV_ZAHLUNG_MSB_ABRECHNNUNG"`        |             |
| `"BV_ZAHLUNG_ENT_SPERREN_ABRECHNUNG"` |             |
| `"BV_SONSTIGE"`                       |             |

## iban



`iban`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bankverbindung-properties-iban.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/iban")

### iban Type

`string`

## kontoinhaber



`kontoinhaber`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bankverbindung-properties-kontoinhaber.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/kontoinhaber")

### kontoinhaber Type

`string`

## bic



`bic`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bankverbindung-properties-bic.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/bic")

### bic Type

`string`

## kreditinstitut



`kreditinstitut`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bankverbindung-properties-kreditinstitut.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Bankverbindung.schema.json#/properties/kreditinstitut")

### kreditinstitut Type

`string`
