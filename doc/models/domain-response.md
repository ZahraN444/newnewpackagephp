
# Domain Response

## Structure

`DomainResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier for a domain. | getId(): ?string | setId(?string id): void |
| `domain` | `?string` | Optional | The registered domain/hostname. | getDomain(): ?string | setDomain(?string domain): void |
| `accountId` | `?string` | Optional | Unique identifier associated with the account the domain is registered for. | getAccountId(): ?string | setAccountId(?string accountId): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "domain": "domain8",
  "account_id": "account_id4"
}
```

