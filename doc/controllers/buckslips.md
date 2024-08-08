# Buckslips

The Buckslips endpoint allows you to easily create buckslips that can later be used as add-ons for Letters Campaigns. Note that a Letter Campaign with Buckslip add-on requires a minimum send quantity of 5,000 letters.
The API provides endpoints for creating buckslips, retrieving individual buckslips, creating buckslip orders, and retrieving a list of buckslips.

<div class="back-to-top" ><a href="#" onclick="toTopLink()">back to top</a></div>


```php
$buckslipsController = $client->getBuckslipsController();
```

## Class Name

`BuckslipsController`

## Methods

* [Buckslips List](../../doc/controllers/buckslips.md#buckslips-list)
* [Buckslip Create](../../doc/controllers/buckslips.md#buckslip-create)
* [Buckslip Retrieve](../../doc/controllers/buckslips.md#buckslip-retrieve)
* [Buckslip Update](../../doc/controllers/buckslips.md#buckslip-update)
* [Buckslip Delete](../../doc/controllers/buckslips.md#buckslip-delete)


# Buckslips List

Returns a list of your buckslips. The buckslips are returned sorted by creation date, with the most recently created buckslips appearing first.

```php
function buckslipsList(
    ?int $limit = 10,
    ?Beforeafter $beforeAfter = null,
    ?array $mInclude = null
): BuckslipsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `beforeAfter` | [`?Beforeafter`](../../doc/models/beforeafter.md) | Query, Optional | `before` and `after` are both optional but only one of them can be in the query at a time. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |

## Response Type

[`BuckslipsResponse`](../../doc/models/buckslips-response.md)

## Example Usage

```php
$limit = 10;

$result = $buckslipsController->buckslipsList($limit);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Buckslip Create

Creates a new buckslip given information

```php
function buckslipCreate(BuckslipEditable $body): Buckslip
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`BuckslipEditable`](../../doc/models/buckslip-editable.md) | Body, Required | - |

## Response Type

[`Buckslip`](../../doc/models/buckslip.md)

## Example Usage

```php
$body = BuckslipEditableBuilder::init(
    'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/buckslip.pdf'
)
    ->description('Test buckslip')
    ->back(
        'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/buckslip.pdf'
    )
    ->build();

$result = $buckslipsController->buckslipCreate($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Buckslip Retrieve

Retrieves the details of an existing buckslip. You need only supply the unique customer identifier that was returned upon buckslip creation.

```php
function buckslipRetrieve(string $buckslipId): Buckslip
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `buckslipId` | `string` | Template, Required | id of the buckslip |

## Response Type

[`Buckslip`](../../doc/models/buckslip.md)

## Example Usage

```php
$buckslipId = 'buckslip_id6';

$result = $buckslipsController->buckslipRetrieve($buckslipId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Buckslip Update

Update the details of an existing buckslip. You need only supply the unique identifier that was returned upon buckslip creation.

```php
function buckslipUpdate(
    string $buckslipId,
    string $contentType,
    ?string $description = null,
    ?bool $autoReorder = null,
    ?float $reorderQuantity = null
): Buckslip
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `buckslipId` | `string` | Template, Required | id of the buckslip |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `description` | `?string` | Form, Optional | Description of the buckslip. |
| `autoReorder` | `?bool` | Form, Optional | Allows for auto reordering |
| `reorderQuantity` | `?float` | Form, Optional | The quantity of items to be reordered (only required when auto_reorder is true). |

## Response Type

[`Buckslip`](../../doc/models/buckslip.md)

## Example Usage

```php
$buckslipId = 'buckslip_id6';

$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$description = 'Test buckslip';

$autoReorder = true;

$result = $buckslipsController->buckslipUpdate(
    $buckslipId,
    $contentType,
    $description,
    $autoReorder
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Buckslip Delete

Delete an existing buckslip. You need only supply the unique identifier that was returned upon buckslip creation.

```php
function buckslipDelete(string $buckslipId): BuckslipsResponse1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `buckslipId` | `string` | Template, Required | id of the buckslip |

## Response Type

[`BuckslipsResponse1`](../../doc/models/buckslips-response-1.md)

## Example Usage

```php
$buckslipId = 'buckslip_id6';

$result = $buckslipsController->buckslipDelete($buckslipId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

