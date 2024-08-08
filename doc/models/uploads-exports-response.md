
# Uploads Exports Response

## Structure

`UploadsExportsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique identifier prefixed with `ex_`.<br>**Constraints**: *Pattern*: `^ex_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the export was created | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the export was last modified | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `bool` | Required | Returns as `true` if the resource has been successfully deleted. | getDeleted(): bool | setDeleted(bool deleted): void |
| `s3Url` | `string` | Required | The URL for the generated export file. | getS3Url(): string | setS3Url(string s3Url): void |
| `state` | [`string(StateEnum)`](../../doc/models/state-enum.md) | Required | - | getState(): string | setState(string state): void |
| `type` | [`string(Type1Enum)`](../../doc/models/type-1-enum.md) | Required | - | getType(): string | setType(string type): void |
| `uploadId` | `string` | Required | Unique identifier prefixed with `upl_`.<br>**Constraints**: *Pattern*: `^upl_[a-zA-Z0-9]+$` | getUploadId(): string | setUploadId(string uploadId): void |

## Example (as JSON)

```json
{
  "id": "id8",
  "dateCreated": "2016-03-13T12:52:32.123Z",
  "dateModified": "2016-03-13T12:52:32.123Z",
  "deleted": false,
  "s3Url": "s3Url8",
  "state": "succeeded",
  "type": "failures",
  "uploadId": "uploadId8"
}
```

