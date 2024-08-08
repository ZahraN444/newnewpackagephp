
# Template

## Structure

`Template`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `id` | `string` | Required | Unique identifier prefixed with `tmpl_`. ID of a saved [HTML template](#section/HTML-Templates).<br>**Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `versions` | [`TemplateVersion[]`](../../doc/models/template-version.md) | Required | An array of all non-deleted [version objects](#tag/Template-Versions) associated with the template. | getVersions(): array | setVersions(array versions): void |
| `publishedVersion` | [`TemplateVersion`](../../doc/models/template-version.md) | Required | - | getPublishedVersion(): TemplateVersion | setPublishedVersion(TemplateVersion publishedVersion): void |
| `object` | [`?string(Object12Enum)`](../../doc/models/object-12-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `dateCreated` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): ?\DateTime | setDateCreated(?\DateTime dateCreated): void |
| `dateModified` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): ?\DateTime | setDateModified(?\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "versions": [
    {
      "html": "html0",
      "date_created": "2016-03-13T12:52:32.123Z",
      "date_modified": "2016-03-13T12:52:32.123Z",
      "object": "version",
      "id": "id0",
      "description": "description0",
      "engine": {
        "key1": "val1",
        "key2": "val2"
      },
      "required_vars": [
        "required_vars3"
      ],
      "deleted": false,
      "suggest_json_editor": false
    }
  ],
  "published_version": {
    "html": "html4",
    "date_created": "2016-03-13T12:52:32.123Z",
    "date_modified": "2016-03-13T12:52:32.123Z",
    "object": "version",
    "id": "id4",
    "description": "description4",
    "engine": {
      "key1": "val1",
      "key2": "val2"
    },
    "required_vars": [
      "required_vars7"
    ],
    "deleted": false,
    "suggest_json_editor": false
  },
  "description": "description4",
  "object": "template",
  "metadata": {
    "key0": "metadata7"
  },
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z"
}
```

