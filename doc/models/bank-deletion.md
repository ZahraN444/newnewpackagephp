
# Bank Deletion

Lob uses RESTful HTTP response codes to indicate success or failure of an API request. In general, 2xx indicates success, 4xx indicate an input error, and 5xx indicates an error on Lob's end.

## Structure

`BankDeletion`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | **Constraints**: *Pattern*: `^bank_[a-zA-Z0-9]+$` | getId(): ?string | setId(?string id): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "deleted": false
}
```

