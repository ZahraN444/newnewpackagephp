
# Location Analysis 1

## Structure

`LocationAnalysis1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `?float` | Required | A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be used with `longitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`).<br>**Constraints**: `>= -90`, `<= 90` | getLatitude(): ?float | setLatitude(?float latitude): void |
| `longitude` | `?float` | Required | A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be used with `latitude` to pinpoint locations on a map. Will not be returned for undeliverable addresses or military addresses (state is `AA`, `AE`, or `AP`).<br>**Constraints**: `>= -180`, `<= 180` | getLongitude(): ?float | setLongitude(?float longitude): void |
| `distance` | `float` | Required | The distance from the input location to this exact zip code in miles. | getDistance(): float | setDistance(float distance): void |

## Example (as JSON)

```json
{
  "latitude": 51.62,
  "longitude": 202.18,
  "distance": 160.84
}
```

