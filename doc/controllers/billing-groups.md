# Billing Groups

```php
$billingGroupsController = $client->getBillingGroupsController();
```

## Class Name

`BillingGroupsController`

## Methods

* [Billing Group Retrieve](../../doc/controllers/billing-groups.md#billing-group-retrieve)
* [Billing Group Update](../../doc/controllers/billing-groups.md#billing-group-update)
* [Billing Groups List](../../doc/controllers/billing-groups.md#billing-groups-list)
* [Billing Group Create](../../doc/controllers/billing-groups.md#billing-group-create)


# Billing Group Retrieve

Retrieves the details of an existing billing_group. You need only supply the unique billing_group identifier that was returned upon billing_group creation.

```php
function billingGroupRetrieve(string $bgId): BillingGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `bgId` | `string` | Template, Required | id of the billing_group |

## Response Type

[`BillingGroup`](../../doc/models/billing-group.md)

## Example Usage

```php
$bgId = 'bg_id8';

$result = $billingGroupsController->billingGroupRetrieve($bgId);
```

## Example Response *(as JSON)*

```json
{
  "id": "bg_c94e83ca2cd5121",
  "name": "Marketing Dept",
  "description": "Usage group used for the Marketing Dept resource sends",
  "date_created": "2017-11-07T22:56:10.962Z",
  "date_modified": "2017-11-07T22:56:10.962Z",
  "object": "billing_group"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Billing Group Update

Updates all editable attributes of the billing_group with the given id.

```php
function billingGroupUpdate(
    string $bgId,
    string $contentType,
    ?string $description = null,
    ?string $name = null
): BillingGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `bgId` | `string` | Template, Required | id of the billing_group |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `description` | `?string` | Form, Optional | Description of the billing group. |
| `name` | `?string` | Form, Optional | Name of the billing group. |

## Response Type

[`BillingGroup`](../../doc/models/billing-group.md)

## Example Usage

```php
$bgId = 'bg_id8';

$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$description = 'Usage group used for the Marketing Dept resource sends';

$name = 'Marketing Dept';

$result = $billingGroupsController->billingGroupUpdate(
    $bgId,
    $contentType,
    $description,
    $name
);
```

## Example Response *(as JSON)*

```json
{
  "id": "bg_c94e83ca2cd5121",
  "name": "Marketing Dept",
  "description": "Usage group used for the Marketing Dept resource sends",
  "date_created": "2017-11-07T22:56:10.962Z",
  "date_modified": "2017-11-07T22:56:10.962Z",
  "object": "billing_group"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Billing Groups List

Returns a list of your billing_groups. The billing_groups are returned sorted by creation date, with the most recently created billing_groups appearing first.

```php
function billingGroupsList(
    ?int $limit = 10,
    ?int $offset = 0,
    ?array $mInclude = null,
    ?array $dateCreated = null,
    ?array $dateModified = null,
    ?SortBy $sortBy = null
): BillingGroupsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `offset` | `?int` | Query, Optional | An integer that designates the offset at which to begin returning results. Defaults to 0. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `dateCreated` | `?array<string,string>` | Query, Optional | Filter by date created. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `dateModified` | `?array<string,string>` | Query, Optional | Filter by date modified. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `sortBy` | [`?SortBy`](../../doc/models/sort-by.md) | Query, Optional | Sorts items by ascending or descending dates. Use either `date_created` or `date_modified`, not both. |

## Response Type

[`BillingGroupsResponse`](../../doc/models/billing-groups-response.md)

## Example Usage

```php
$limit = 10;

$offset = 0;

$result = $billingGroupsController->billingGroupsList(
    $limit,
    $offset
);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "id": "bg_d5a5a89da9106f8",
      "description": "Test billing_group",
      "metadata": {},
      "date_created": "2019-07-27T23:49:01.511Z",
      "date_modified": "2019-07-27T23:49:01.511Z",
      "object": "billing_group"
    },
    {
      "id": "bg_59b2150ae120887",
      "description": "Test billing_group",
      "metadata": {},
      "date_created": "2019-03-29T10:22:34.642Z",
      "date_modified": "2019-03-29T10:22:34.642Z",
      "object": "billing_group"
    }
  ],
  "object": "list",
  "next_url": null,
  "prev_url": null,
  "count": 2
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Billing Group Create

Creates a new billing_group with the provided properties.

```php
function billingGroupCreate(BillingGroupEditable $body): BillingGroup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`BillingGroupEditable`](../../doc/models/billing-group-editable.md) | Body, Required | - |

## Response Type

[`BillingGroup`](../../doc/models/billing-group.md)

## Example Usage

```php
$body = BillingGroupEditableBuilder::init(
    'Marketing Dept'
)
    ->description('Usage group used for the Marketing Dept resource sends')
    ->build();

$result = $billingGroupsController->billingGroupCreate($body);
```

## Example Response *(as JSON)*

```json
{
  "id": "bg_c94e83ca2cd5121",
  "name": "Marketing Dept",
  "description": "Usage group used for the Marketing Dept resource sends",
  "date_created": "2017-11-07T22:56:10.962Z",
  "date_modified": "2017-11-07T22:56:10.962Z",
  "object": "billing_group"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

