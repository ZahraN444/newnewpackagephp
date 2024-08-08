
# Address Intl

## Structure

`AddressIntl`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'address'` | getObject(): string | setObject(string object): void |
| `id` | `string` | Required | Unique identifier prefixed with `adr_`.<br>**Constraints**: *Pattern*: `^adr_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `name` | `?string` | Required | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address.<br>**Constraints**: *Maximum Length*: `40` | getName(): ?string | setName(?string name): void |
| `company` | `?string` | Required | Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address. This field can be used for any secondary recipient information which is not part of the actual mailing address (Company Name, Department, Attention Line, etc).<br>**Constraints**: *Maximum Length*: `40` | getCompany(): ?string | setCompany(?string company): void |
| `phone` | `?string` | Optional | Must be no longer than 40 characters.<br>**Constraints**: *Maximum Length*: `40` | getPhone(): ?string | setPhone(?string phone): void |
| `email` | `?string` | Optional | Must be no longer than 100 characters.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): ?string | setEmail(?string email): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `addressLine1` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `?string` | Optional | **Constraints**: *Maximum Length*: `200` | getAddressCity(): ?string | setAddressCity(?string addressCity): void |
| `addressState` | `?string` | Optional | Will be returned as a full string<br>**Constraints**: *Maximum Length*: `200` | getAddressState(): ?string | setAddressState(?string addressState): void |
| `addressZip` | `?string` | Optional | Optional postal code.<br>**Constraints**: *Maximum Length*: `40` | getAddressZip(): ?string | setAddressZip(?string addressZip): void |
| `addressCountry` | [`string(AddressCountry1Enum)`](../../doc/models/address-country-1-enum.md) | Required | **Constraints**: *Maximum Length*: `200` | getAddressCountry(): string | setAddressCountry(string addressCountry): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "address",
  "id": "id8",
  "name": "name8",
  "company": "company2",
  "address_line1": "address_line18",
  "address_country": "SENEGAL",
  "deleted": false,
  "description": "description2",
  "phone": "phone2",
  "email": "email8",
  "metadata": {
    "key0": "metadata5",
    "key1": "metadata6",
    "key2": "metadata7"
  }
}
```

