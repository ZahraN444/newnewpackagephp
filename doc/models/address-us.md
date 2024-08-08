
# Address Us

## Structure

`AddressUs`

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
| `addressLine1` | `string` | Required | The primary number, street name, and directional information.<br>**Constraints**: *Maximum Length*: `64` | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | An optional field containing any information which can't fit into line 1.<br>**Constraints**: *Maximum Length*: `64` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `addressCity` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getAddressCity(): string | setAddressCity(string addressCity): void |
| `addressState` | `string` | Required | 2 letter state short-name code<br>**Constraints**: *Pattern*: `^[a-zA-Z]{2}$` | getAddressState(): string | setAddressState(string addressState): void |
| `addressZip` | `string` | Required | Must follow the ZIP format of `12345` or ZIP+4 format of `12345-1234`.<br>**Constraints**: *Pattern*: `^\d{5}(-\d{4})?$` | getAddressZip(): string | setAddressZip(string addressZip): void |
| `addressCountry` | [`?string(AddressCountryEnum)`](../../doc/models/address-country-enum.md) | Optional | **Constraints**: *Minimum Length*: `13`, *Maximum Length*: `13` | getAddressCountry(): ?string | setAddressCountry(?string addressCountry): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `recipientMoved` | `?bool` | Optional | Only returned for accounts on certain <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print &amp; Mail Editions</a>. Value is `true` if the address was altered because the recipient filed for a <a href="#tag/National-Change-of-Address">National Change of Address Linkage (NCOALink)</a>, `false` if the NCOALink check was run but no altered address was found, and `null` if the NCOALink check was not run. The NCOALink check does not happen for non-US addresses, for non-deliverable US addresses, or for addresses created before the NCOALink feature was added to your account. | getRecipientMoved(): ?bool | setRecipientMoved(?bool recipientMoved): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "object": "address",
  "id": "id4",
  "name": "name4",
  "company": "company4",
  "address_line1": "address_line18",
  "address_city": "address_city4",
  "address_state": "address_state6",
  "address_zip": "address_zip6",
  "deleted": false,
  "description": "description4",
  "phone": "phone4",
  "email": "email2",
  "address_line2": "address_line26"
}
```

