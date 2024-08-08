
# Inline Address Us Chk

## Structure

`InlineAddressUsChk`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `name` | `?string` | Optional | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address.<br>**Constraints**: *Maximum Length*: `40` | getName(): ?string | setName(?string name): void |
| `company` | `?string` | Optional | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address. This field can be used for any secondary recipient information which is not part of the actual mailing address (Company Name, Department, Attention Line, etc).<br>**Constraints**: *Maximum Length*: `40` | getCompany(): ?string | setCompany(?string company): void |
| `addressLine1` | `string` | Required | The primary number, street name, and directional information.<br>**Constraints**: *Maximum Length*: `50` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | An optional field for address unit information. Total string sum of this plus `address_line1` may not exceed 50 characters.<br>**Constraints**: *Maximum Length*: `50` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressCity(): string | setAddressCity(string addressCity): void |
| `addressState` | `string` | Required | 2 letter state short-name code<br>**Constraints**: *Pattern*: `^[a-zA-Z]{2}$` | getAddressState(): string | setAddressState(string addressState): void |
| `addressZip` | `string` | Required | Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.<br>**Constraints**: *Pattern*: `^\d{5}(-\d{4})?$` | getAddressZip(): string | setAddressZip(string addressZip): void |
| `phone` | `?string` | Optional | Must be no longer than 40 characters.<br>**Constraints**: *Maximum Length*: `40` | getPhone(): ?string | setPhone(?string phone): void |
| `email` | `?string` | Optional | Must be no longer than 100 characters.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): ?string | setEmail(?string email): void |
| `addressCountry` | [`?string(AddressCountry2Enum)`](../../doc/models/address-country-2-enum.md) | Optional | - | getAddressCountry(): ?string | setAddressCountry(?string addressCountry): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "description": "description2",
  "name": "name2",
  "company": "company2",
  "address_line1": "address_line16",
  "address_line2": "address_line24",
  "address_city": "address_city2",
  "address_state": "address_state4",
  "address_zip": "address_zip4",
  "phone": "phone8"
}
```

