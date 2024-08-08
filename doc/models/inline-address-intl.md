
# Inline Address Intl

## Structure

`InlineAddressIntl`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string` | Required | The primary number, street name, and directional information.<br>**Constraints**: *Maximum Length*: `200` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | An optional field containing any information which can't fit into line 1.<br>**Constraints**: *Maximum Length*: `200` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `?string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressCity(): ?string | setAddressCity(?string addressCity): void |
| `addressState` | `?string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressState(): ?string | setAddressState(?string addressState): void |
| `addressZip` | `?string` | Required | Optional postal code.<br>**Constraints**: *Maximum Length*: `40` | getAddressZip(): ?string | setAddressZip(?string addressZip): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `name` | `?string` | Required | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address.<br>**Constraints**: *Maximum Length*: `40` | getName(): ?string | setName(?string name): void |
| `company` | `?string` | Required | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address. This field can be used for any secondary recipient information which is not part of the actual mailing address (Company Name, Department, Attention Line, etc).<br>**Constraints**: *Maximum Length*: `40` | getCompany(): ?string | setCompany(?string company): void |
| `phone` | `?string` | Optional | Must be no longer than 40 characters.<br>**Constraints**: *Maximum Length*: `40` | getPhone(): ?string | setPhone(?string phone): void |
| `email` | `?string` | Optional | Must be no longer than 100 characters.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): ?string | setEmail(?string email): void |
| `addressCountry` | [`string(CountryExtendedEnum)`](../../doc/models/country-extended-enum.md) | Required | - | getAddressCountry(): string | setAddressCountry(string addressCountry): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "address_line1": "address_line12",
  "address_line2": "address_line20",
  "address_city": "address_city8",
  "address_state": "address_state0",
  "address_zip": "address_zip0",
  "description": "description8",
  "name": "name8",
  "company": "company2",
  "phone": "phone2",
  "email": "email8",
  "address_country": "LK",
  "metadata": {
    "key0": "metadata5",
    "key1": "metadata6"
  }
}
```

