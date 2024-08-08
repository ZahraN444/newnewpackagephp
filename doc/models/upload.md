
# Upload

## Structure

`Upload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignId` | `string` | Required | **Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getCampaignId(): string | setCampaignId(string campaignId): void |
| `requiredAddressColumnMapping` | [`RequiredAddressColumnMapping`](../../doc/models/required-address-column-mapping.md) | Required | - | getRequiredAddressColumnMapping(): RequiredAddressColumnMapping | setRequiredAddressColumnMapping(RequiredAddressColumnMapping requiredAddressColumnMapping): void |
| `optionalAddressColumnMapping` | [`OptionalAddressColumnMapping`](../../doc/models/optional-address-column-mapping.md) | Required | - | getOptionalAddressColumnMapping(): OptionalAddressColumnMapping | setOptionalAddressColumnMapping(OptionalAddressColumnMapping optionalAddressColumnMapping): void |
| `metadata` | [`Metadata1`](../../doc/models/metadata-1.md) | Required | - | getMetadata(): Metadata1 | setMetadata(Metadata1 metadata): void |
| `mergeVariableColumnMapping` | [`?array`](../../doc/models/object-enum.md) | Required | The mapping of column headers in your file to the merge variables present in your creative. See our <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-triggered-sends/campaign-audience-guide#step-3-map-merge-variable-data-if-applicable-7" target="_blank">Campaign Audience Guide</a> for additional details. <br />If a merge variable has the same "name" as a "key" in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping` objects, then they **CANNOT** have a different value in this object. If a different value is provided, then when the campaign is processing it will get overwritten with the mapped value present in the `requiredAddressColumnMapping` or `optionalAddressColumnMapping` objects. If using customized QR code redirect from the Audience file, then a `qr_code_redirect_url` must be mapped to the column header as used in the CSV. | getMergeVariableColumnMapping(): ?array | setMergeVariableColumnMapping(?array mergeVariableColumnMapping): void |
| `id` | `string` | Required | Unique identifier prefixed with `upl_`.<br>**Constraints**: *Pattern*: `^upl_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `accountId` | `string` | Required | Account ID that made the request | getAccountId(): string | setAccountId(string accountId): void |
| `mode` | [`string(ModeEnum)`](../../doc/models/mode-enum.md) | Required | - | getMode(): string | setMode(string mode): void |
| `failuresUrl` | `?string` | Optional | Url where your campaign mailpiece failures can be retrieved | getFailuresUrl(): ?string | setFailuresUrl(?string failuresUrl): void |
| `originalFilename` | `?string` | Optional | Filename of the upload | getOriginalFilename(): ?string | setOriginalFilename(?string originalFilename): void |
| `state` | [`string(UploadStateEnum)`](../../doc/models/upload-state-enum.md) | Required | - | getState(): string | setState(string state): void |
| `totalMailpieces` | `int` | Required | Total number of recipients for the campaign | getTotalMailpieces(): int | setTotalMailpieces(int totalMailpieces): void |
| `failedMailpieces` | `int` | Required | Number of mailpieces that failed to create | getFailedMailpieces(): int | setFailedMailpieces(int failedMailpieces): void |
| `validatedMailpieces` | `int` | Required | Number of mailpieces that were successfully created | getValidatedMailpieces(): int | setValidatedMailpieces(int validatedMailpieces): void |
| `bytesProcessed` | `int` | Required | Number of bytes processed in your CSV | getBytesProcessed(): int | setBytesProcessed(int bytesProcessed): void |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the upload was created | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the upload was last modified | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |

## Example (as JSON)

```json
{
  "campaignId": "campaignId0",
  "requiredAddressColumnMapping": {
    "name": "name0",
    "address_line1": "address_line14",
    "address_city": "address_city0",
    "address_state": "address_state2",
    "address_zip": "address_zip8"
  },
  "optionalAddressColumnMapping": {
    "address_line2": "address_line24",
    "company": "company2",
    "address_country": "address_country6"
  },
  "metadata": {
    "columns": [
      "columns6",
      "columns7",
      "columns8"
    ]
  },
  "mergeVariableColumnMapping": {
    "name": "recipient_name",
    "gift_code": "code"
  },
  "id": "id0",
  "accountId": "fa9ea650fc7b31a89f92",
  "mode": "test",
  "failuresUrl": "https://www.example.com",
  "originalFilename": "my_audience.csv",
  "state": "Validating",
  "totalMailpieces": 100,
  "failedMailpieces": 5,
  "validatedMailpieces": 95,
  "bytesProcessed": 17268,
  "dateCreated": "2016-03-13T12:52:32.123Z",
  "dateModified": "2016-03-13T12:52:32.123Z"
}
```

