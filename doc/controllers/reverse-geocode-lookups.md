# Reverse Geocode Lookups

```php
$reverseGeocodeLookupsController = $client->getReverseGeocodeLookupsController();
```

## Class Name

`ReverseGeocodeLookupsController`


# Reverse Geocode Lookup

Reverse geocode a valid US location with a live API key.

```php
function reverseGeocodeLookup(
    string $contentType,
    ?float $latitude,
    ?float $longitude,
    ?int $size = 5
): ReverseGeocode
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `latitude` | `?float` | Form, Required | A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be input with `longitude` to pinpoint locations on a map. |
| `longitude` | `?float` | Form, Required | A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be input with `latitude` to pinpoint locations on a map. |
| `size` | `?int` | Query, Optional | Determines the number of locations returned. Possible values are between 1 and 50 and any number higher will be rounded down to 50. Default size is a list of 5 reverse geocoded locations. |

## Response Type

[`ReverseGeocode`](../../doc/models/reverse-geocode.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$latitude = 37.7749;

$longitude = 122.4194;

$size = 5;

$result = $reverseGeocodeLookupsController->reverseGeocodeLookup(
    $contentType,
    $latitude,
    $longitude,
    $size
);
```

## Example Response *(as JSON)*

```json
{
  "id": "us_reverse_geocode_8a013f3e",
  "addresses": [
    {
      "components": {
        "zip_code": "94107",
        "zip_code_plus_4": "1702"
      },
      "location_analysis": {
        "latitude": 37.78271,
        "longitude": -122.416202,
        "distance": 1.32
      }
    },
    {
      "components": {
        "zip_code": "94107",
        "zip_code_plus_4": "1702"
      },
      "location_analysis": {
        "latitude": 37.782917,
        "longitude": -122.416131,
        "distance": 1.33
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

