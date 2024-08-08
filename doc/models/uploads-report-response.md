
# Uploads Report Response

## Structure

`UploadsReportResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`Datum[]`](../../doc/models/datum.md) | Required | - | getData(): array | setData(array data): void |
| `nextUrl` | `?string` | Optional | Url of next page of items in list. | getNextUrl(): ?string | setNextUrl(?string nextUrl): void |
| `prevUrl` | `?string` | Optional | Url of previous page of items in list. | getPrevUrl(): ?string | setPrevUrl(?string prevUrl): void |
| `count` | `int` | Required | number of resources in a set | getCount(): int | setCount(int count): void |
| `totalCount` | `int` | Required | Indicates the total number of records. Provided when the request specifies an "include" query parameter | getTotalCount(): int | setTotalCount(int totalCount): void |

## Example (as JSON)

```json
{
  "data": [
    {
      "rowNumber": 177.76,
      "status": "Processing",
      "errorMessage": "errorMessage8",
      "mailpieceId": "mailpieceId6",
      "originalData": {
        "key1": "val1",
        "key2": "val2"
      }
    }
  ],
  "count": 136,
  "total_count": 28,
  "next_url": "next_url8",
  "prev_url": "prev_url4"
}
```

