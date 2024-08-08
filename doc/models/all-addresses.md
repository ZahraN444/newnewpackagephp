
# All Addresses

## Structure

`AllAddresses`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `object` | `?string` | Optional | Value is resource type. | getObject(): ?string | setObject(?string object): void |
| `nextUrl` | `?string` | Optional | Url of next page of items in list. | getNextUrl(): ?string | setNextUrl(?string nextUrl): void |
| `previousUrl` | `?string` | Optional | Url of previous page of items in list. | getPreviousUrl(): ?string | setPreviousUrl(?string previousUrl): void |
| `count` | `?int` | Optional | number of resources in a set | getCount(): ?int | setCount(?int count): void |
| `totalCount` | `?int` | Optional | Indicates the total number of records. Provided when the request specifies an "include" query parameter | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `data` | array<[AddressUs](../../doc/models/address-us.md)\|[AddressIntl](../../doc/models/address-intl.md)>\|null | Optional | list of addresses | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "object": "object2",
  "next_url": "next_url0",
  "previous_url": "previous_url2",
  "count": 74,
  "total_count": 90
}
```

