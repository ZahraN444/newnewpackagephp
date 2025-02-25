# QR Codes

```php
$qRCodesController = $client->getQRCodesController();
```

## Class Name

`QRCodesController`


# Qr Codes List

Returns a list of your QR codes. The QR codes are returned sorted by scan date, with the most recently scanned QR codes appearing first.

```php
function qrCodesList(
    ?int $limit = 10,
    ?int $offset = 0,
    ?array $mInclude = null,
    ?array $dateCreated = null,
    ?bool $scanned = null,
    ?array $resourceIds = null
): QrCodeAnalyticsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `offset` | `?int` | Query, Optional | An integer that designates the offset at which to begin returning results. Defaults to 0. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `dateCreated` | `?array<string,string>` | Query, Optional | Filter by date created. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `scanned` | `?bool` | Query, Optional | Filter list of responses to only include QR codes with at least one scan event. |
| `resourceIds` | [`?(array[])`](../../doc/models/object-enum.md) | Query, Optional | Filter by the resource ID. |

## Response Type

[`QrCodeAnalyticsResponse`](../../doc/models/qr-code-analytics-response.md)

## Example Usage

```php
$limit = 10;

$offset = 0;

$result = $qRCodesController->qrCodesList(
    $limit,
    $offset
);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "resource_id": "ltr_d5a5a89da9106f8",
      "date_created": "2019-07-27T23:49:01.511Z",
      "number_of_scans": 2,
      "scans": [
        {
          "ip_location": "127.0.0.1",
          "scan_date": "2022-07-27T23:49:01.511Z"
        },
        {
          "ip_location": "127.0.0.1",
          "scan_date": "2022-07-29T23:45:00.436Z"
        }
      ]
    },
    {
      "resource_id": "psc_d5a5a89da9106f8",
      "date_created": "2022-09-27T23:49:01.511Z",
      "number_of_scans": 1,
      "scans": [
        {
          "ip_location": "127.0.0.1",
          "scan_date": "2022-09-27T23:49:01.511Z"
        }
      ]
    }
  ],
  "object": "list",
  "count": 2,
  "scanned_count": 2,
  "total_count": 2
}
```

