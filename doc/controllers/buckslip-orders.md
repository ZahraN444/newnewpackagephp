# Buckslip Orders

```php
$buckslipOrdersController = $client->getBuckslipOrdersController();
```

## Class Name

`BuckslipOrdersController`

## Methods

* [Buckslip Orders Retrieve](../../doc/controllers/buckslip-orders.md#buckslip-orders-retrieve)
* [Buckslip Order Create](../../doc/controllers/buckslip-orders.md#buckslip-order-create)


# Buckslip Orders Retrieve

Retrieves the buckslip orders associated with the given buckslip id.

```php
function buckslipOrdersRetrieve(string $buckslipId, ?int $limit = 10, ?int $offset = 0): BuckslipsOrdersResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `buckslipId` | `string` | Template, Required | The ID of the buckslip to which the buckslip orders belong. |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `offset` | `?int` | Query, Optional | An integer that designates the offset at which to begin returning results. Defaults to 0. |

## Response Type

[`BuckslipsOrdersResponse`](../../doc/models/buckslips-orders-response.md)

## Example Usage

```php
$buckslipId = 'buckslip_id6';

$limit = 10;

$offset = 0;

$result = $buckslipOrdersController->buckslipOrdersRetrieve(
    $buckslipId,
    $limit,
    $offset
);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "id": "bo_e0f8a0562a06bea7f",
      "buckslip_id": "bck_6afffd19045076c",
      "status": "available",
      "quantity_ordered": 5000,
      "unit_price": 0.75,
      "cancelled_reason": "No longer needed",
      "availability_date": "2021-10-12T21:41:48.326Z",
      "expected_availability_date": "2021-11-04T21:03:18.871Z",
      "date_created": "2021-10-07T21:03:18.871Z",
      "date_modified": "2021-10-16T01:00:30.144Z",
      "object": "buckslip_order"
    }
  ],
  "object": "list",
  "next_url": null,
  "previous_url": null,
  "count": 1
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Buckslip Order Create

Creates a new buckslip order given information

```php
function buckslipOrderCreate(string $buckslipId, string $contentType, int $quantity): BuckslipOrder
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `buckslipId` | `string` | Template, Required | The ID of the buckslip to which the buckslip orders belong. |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `quantity` | `int` | Form, Required | The quantity of buckslips in the order (minimum 5,000). |

## Response Type

[`BuckslipOrder`](../../doc/models/buckslip-order.md)

## Example Usage

```php
$buckslipId = 'buckslip_id6';

$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$quantity = 10000;

$result = $buckslipOrdersController->buckslipOrderCreate(
    $buckslipId,
    $contentType,
    $quantity
);
```

## Example Response *(as JSON)*

```json
{
  "id": "bo_e0f8a0562a06bea7f",
  "buckslip_id": "bck_6afffd19045076c",
  "status": "available",
  "quantity_ordered": 10000,
  "unit_price": 0.75,
  "cancelled_reason": "No longer needed",
  "availability_date": "2021-10-12T21:41:48.326Z",
  "expected_availability_date": "2021-11-04T21:03:18.871Z",
  "date_created": "2021-10-07T21:03:18.871Z",
  "date_modified": "2021-10-16T01:00:30.144Z",
  "object": "buckslip_order"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

