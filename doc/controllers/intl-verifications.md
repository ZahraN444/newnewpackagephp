# Intl Verifications

```php
$intlVerificationsController = $client->getIntlVerificationsController();
```

## Class Name

`IntlVerificationsController`

## Methods

* [Bulk Intl Verifications](../../doc/controllers/intl-verifications.md#bulk-intl-verifications)
* [Intl Verification](../../doc/controllers/intl-verifications.md#intl-verification)


# Bulk Intl Verifications

Verify a list of international (except US or US territories) address _with a live API key_. Requests to this endpoint with a test API key will return a dummy response based on the primary line you input.

```php
function bulkIntlVerifications(string $contentType, array $addresses): IntlVerifications
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `addresses` | [`MultipleComponentsIntl[]`](../../doc/models/multiple-components-intl.md) | Form, Required | - |

## Response Type

[`IntlVerifications`](../../doc/models/intl-verifications.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$addresses = [
    MultipleComponentsIntlBuilder::init(
        '370 Water St',
        CountryExtendedEnum::CA
    )
        ->recipient('John Doe')
        ->secondaryLine('')
        ->city('Summerside')
        ->state('Prince Edwards Island')
        ->postalCode('C1N 1C4')
        ->build(),
    MultipleComponentsIntlBuilder::init(
        'UL. DOLSKAYA 1',
        CountryExtendedEnum::RU
    )
        ->recipient('Jane Doe')
        ->secondaryLine('')
        ->city('MOSCOW')
        ->state('MOSCOW G')
        ->postalCode('115569')
        ->build()
];

$result = $intlVerificationsController->bulkIntlVerifications(
    $contentType,
    $addresses
);
```

## Example Response *(as JSON)*

```json
{
  "addresses": [
    {
      "id": "intl_ver_c7cb63d68f8d6",
      "recipient": null,
      "primary_line": "370 WATER ST",
      "secondary_line": "",
      "last_line": "SUMMERSIDE PE C1N 1C4",
      "country": "CA",
      "coverage": "SUBBUILDING",
      "deliverability": "deliverable",
      "status": "LV4",
      "components": {
        "primary_number": "370",
        "street_name": "WATER ST",
        "city": "SUMMERSIDE",
        "state": "PE",
        "postal_code": "C1N 1C4"
      },
      "object": "intl_verification"
    }
  ],
  "errors": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Intl Verification

Verify an international (except US or US territories) address _with a live API key_. Requests to this endpoint with a test API key will return a dummy response based on the primary line you input.

```php
function intlVerification(array $body, ?string $xLangOutput = null): IntlVerification
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`array`](../../doc/models/object-enum.md) | Body, Required | - |
| `xLangOutput` | [`?string(XLangOutput1Enum)`](../../doc/models/x-lang-output-1-enum.md) | Header, Optional | * `native` - Translate response to the native language of the country in the request<br>* `match` - match the response to the language in the request<br><br>Default response is in English. |

## Response Type

[`IntlVerification`](../../doc/models/intl-verification.md)

## Example Usage

```php
$body = ApiHelper::deserialize('{"recipient":"Harry Zhang","primary_line":"370 Water St","secondary_line":"","city":"Summerside","state":"Prince Edward Island","postal code":"C1N 1C4","country":"CA"}');

$result = $intlVerificationsController->intlVerification($body);
```

## Example Response *(as JSON)*

```json
{
  "id": "intl_ver_c7cb63d68f8d6",
  "recipient": null,
  "primary_line": "370 WATER ST",
  "secondary_line": "",
  "last_line": "SUMMERSIDE PE C1N 1C4",
  "country": "CA",
  "coverage": "SUBBUILDING",
  "deliverability": "deliverable",
  "status": "LV4",
  "components": {
    "primary_number": "370",
    "street_name": "WATER ST",
    "city": "SUMMERSIDE",
    "state": "PE",
    "postal_code": "C1N 1C4"
  },
  "object": "intl_verification"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

