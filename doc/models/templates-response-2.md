
# Templates Response 2

## Structure

`TemplatesResponse2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier prefixed with `tmpl_`. ID of a saved [HTML template](#section/HTML-Templates).<br>**Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "deleted": false
}
```

