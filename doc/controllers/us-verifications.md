# US Verifications

```php
$uSVerificationsController = $client->getUSVerificationsController();
```

## Class Name

`USVerificationsController`

## Methods

* [Bulk Us Verifications](../../doc/controllers/us-verifications.md#bulk-us-verifications)
* [Us Verification](../../doc/controllers/us-verifications.md#us-verification)


# Bulk Us Verifications

Verify a list of US or US territory addresses _with a live API key_. Requests to this endpoint with a test API key will return a dummy response based on the primary line you input.

```php
function bulkUsVerifications(string $contentType, array $addresses, ?string $mCase = null): UsVerifications
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `addresses` | [`MultipleComponents[]`](../../doc/models/multiple-components.md) | Form, Required | - |
| `mCase` | [`?string(Case2Enum)`](../../doc/models/case-2-enum.md) | Query, Optional | Casing of the verified address. Possible values are `upper` and `proper` for uppercased (e.g. "PO BOX") and proper-cased (e.g. "PO Box"), respectively. Only affects `recipient`, `primary_line`, `secondary_line`, `urbanization`, and `last_line`. Default casing is `upper`. |

## Response Type

[`UsVerifications`](../../doc/models/us-verifications.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$addresses = [
    MultipleComponentsBuilder::init(
        '210 King Street',
        'San Francisco',
        'CA',
        '94107'
    )->build(),
    MultipleComponentsBuilder::init(
        'Ave Wilson Churchill 123',
        'RIO PIEDRAS',
        'PR',
        '00926'
    )
        ->recipient('Walgreens')
        ->secondaryLine('')
        ->urbanization('URB FAIR OAKS')
        ->build()
];

$result = $uSVerificationsController->bulkUsVerifications(
    $contentType,
    $addresses
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Us Verification

Verify a US or US territory address _with a live API key_. The address can be in components (e.g. `primary_line` is "210 King Street", `zip_code` is "94107") or as a single string (e.g. "210 King Street 94107"), but not as both. Requests using a test API key validate required fields but return empty values unless specific `primary_line` values are provided. See the [US Verifications Test Environment](#section/US-Verifications-Test-Env) for details.

```php
function usVerification(array $body, ?string $mCase = null): UsVerification
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`array`](../../doc/models/object-enum.md) | Body, Required | - |
| `mCase` | [`?string(Case2Enum)`](../../doc/models/case-2-enum.md) | Query, Optional | Casing of the verified address. Possible values are `upper` and `proper` for uppercased (e.g. "PO BOX") and proper-cased (e.g. "PO Box"), respectively. Only affects `recipient`, `primary_line`, `secondary_line`, `urbanization`, and `last_line`. Default casing is `upper`. |

## Response Type

[`UsVerification`](../../doc/models/us-verification.md)

## Example Usage

```php
$body = ApiHelper::deserialize('{"primary_line":"210 King Street","city":"San Francisco","state":"CA","zip_code":"94107"}');

$result = $uSVerificationsController->usVerification($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

