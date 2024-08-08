# Checks

Checks allow you to send payments via physical checks. The API provides endpoints
for creating checks, retrieving individual checks, canceling checks, and retrieving a list of checks.

<div class="back-to-top" ><a href="#" onclick="toTopLink()">back to top</a></div>


```php
$checksController = $client->getChecksController();
```

## Class Name

`ChecksController`

## Methods

* [Checks List](../../doc/controllers/checks.md#checks-list)
* [Check Create](../../doc/controllers/checks.md#check-create)
* [Check Retrieve](../../doc/controllers/checks.md#check-retrieve)
* [Check Cancel](../../doc/controllers/checks.md#check-cancel)


# Checks List

Returns a list of your checks. The checks are returned sorted by creation date, with the most recently created checks appearing first.

```php
function checksList(
    ?int $limit = 10,
    ?Beforeafter $beforeAfter = null,
    ?array $mInclude = null,
    ?array $dateCreated = null,
    ?array $metadata = null,
    ?bool $scheduled = null,
    ?array $sendDate = null,
    ?string $mailType = null,
    ?SortBy1 $sortBy = null
): AllChecks
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `beforeAfter` | [`?Beforeafter`](../../doc/models/beforeafter.md) | Query, Optional | `before` and `after` are both optional but only one of them can be in the query at a time. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `dateCreated` | `?array<string,string>` | Query, Optional | Filter by date created. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `metadata` | `?array<string,string>` | Query, Optional | Filter by metadata key-value pair`. |
| `scheduled` | `?bool` | Query, Optional | * `true` - only return orders (past or future) where `send_date` is<br>  greater than `date_created`<br>* `false` - only return orders where `send_date` is equal to `date_created` |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Query, Optional | Filter by ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Query, Optional | A string designating the mail postage type: * `usps_first_class` - (default) * `usps_standard` - a <a href="https://lob.com/pricing/print-mail#compare" target="_blank">cheaper option</a> which is less predictable and takes longer to deliver. `usps_standard` cannot be used with `4x6` postcards or for any postcards sent outside of the United States. |
| `sortBy` | [`?SortBy1`](../../doc/models/sort-by-1.md) | Query, Optional | Sorts items by ascending or descending dates. Use either `date_created` or `send_date`, not both. |

## Response Type

[`AllChecks`](../../doc/models/all-checks.md)

## Example Usage

```php
$limit = 10;

$result = $checksController->checksList($limit);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Check Create

Creates a new check with the provided properties.

```php
function checkCreate(array $body, ?string $idempotencyKey = null, ?string $idempotencyKey2 = null): Check
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`array`](../../doc/models/object-enum.md) | Body, Required | - |
| `idempotencyKey` | `?string` | Header, Optional | A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/managing-mail-settings#idempotent-requests-12" target="_blank">implementation guide</a>. |
| `idempotencyKey2` | `?string` | Query, Optional | A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/managing-mail-settings#idempotent-requests-12" target="_blank">implementation guide</a>. |

## Response Type

[`Check`](../../doc/models/check.md)

## Example Usage

```php
$body = ApiHelper::deserialize('{"key1":"val1","key2":"val2"}');

$idempotencyKey = '026e7634-24d7-486c-a0bb-4a17fd0eebc5';

$idempotencyKey2 = '026e7634-24d7-486c-a0bb-4a17fd0eebc5';

$result = $checksController->checkCreate(
    $body,
    $idempotencyKey,
    $idempotencyKey2
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Check Retrieve

Retrieves the details of an existing check. You need only supply the unique check identifier that was returned upon check creation.

```php
function checkRetrieve(string $chkId): Check
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chkId` | `string` | Template, Required | id of the check |

## Response Type

[`Check`](../../doc/models/check.md)

## Example Usage

```php
$chkId = 'chk_id8';

$result = $checksController->checkRetrieve($chkId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Check Cancel

Completely removes a check from production. This can only be done if the check has a `send_date` and the `send_date` has not yet passed. If the check is successfully canceled, you will not be charged for it. Read more on [cancellation windows](#section/Cancellation-Windows) and [scheduling](#section/Scheduled-Mailings). Scheduling and cancellation is a premium feature. Upgrade to the appropriate <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a> to gain access.

```php
function checkCancel(string $chkId): ChecksResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `chkId` | `string` | Template, Required | id of the check |

## Response Type

[`ChecksResponse`](../../doc/models/checks-response.md)

## Example Usage

```php
$chkId = 'chk_id8';

$result = $checksController->checkCancel($chkId);
```

## Example Response *(as JSON)*

```json
{
  "id": "chk_123456789",
  "deleted": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

