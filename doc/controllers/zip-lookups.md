# Zip Lookups

```php
$zipLookupsController = $client->getZipLookupsController();
```

## Class Name

`ZipLookupsController`


# Zip Lookup

Returns information about a ZIP code

```php
function zipLookup(string $contentType, string $zipCode): Zip
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `zipCode` | `string` | Form, Required | A 5-digit ZIP code. |

## Response Type

[`Zip`](../../doc/models/zip.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$zipCode = '94107';

$result = $zipLookupsController->zipLookup(
    $contentType,
    $zipCode
);
```

## Example Response *(as JSON)*

```json
{
  "id": "us_zip_c7cb63d68f8d6",
  "cities": [
    {
      "city": "SAN FRANCISCO",
      "state": "CA",
      "county": "SAN FRANCISCO",
      "county_fips": "06075",
      "preferred": true
    }
  ],
  "zip_code_type": "standard",
  "object": "us_zip_lookup",
  "zip_code": "94107"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

