
# Template Update

## Structure

`TemplateUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `publishedVersion` | `?string` | Optional | **Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getPublishedVersion(): ?string | setPublishedVersion(?string publishedVersion): void |

## Example (as JSON)

```json
{
  "description": "description2",
  "published_version": "published_version8"
}
```

