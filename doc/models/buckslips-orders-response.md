
# Buckslips Orders Response

## Structure

`BuckslipsOrdersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `object` | `?string` | Optional | Value is resource type. | getObject(): ?string | setObject(?string object): void |
| `nextUrl` | `?string` | Optional | Url of next page of items in list. | getNextUrl(): ?string | setNextUrl(?string nextUrl): void |
| `previousUrl` | `?string` | Optional | Url of previous page of items in list. | getPreviousUrl(): ?string | setPreviousUrl(?string previousUrl): void |
| `count` | `?int` | Optional | number of resources in a set | getCount(): ?int | setCount(?int count): void |
| `totalCount` | `?int` | Optional | Indicates the total number of records. Provided when the request specifies an "include" query parameter | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `data` | [`?(BuckslipOrder[])`](../../doc/models/buckslip-order.md) | Optional | List of buckslip orders | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "object": "object8",
  "next_url": "next_url4",
  "previous_url": "previous_url8",
  "count": 238,
  "total_count": 182
}
```

