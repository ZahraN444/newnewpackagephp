
# Location

## Structure

`Location`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `?float` | Required | A positive or negative decimal indicating the geographic latitude of the address, specifying the north-to-south position of a location. This should be input with `longitude` to pinpoint locations on a map.<br>**Constraints**: `>= -90`, `<= 90` | getLatitude(): ?float | setLatitude(?float latitude): void |
| `longitude` | `?float` | Required | A positive or negative decimal indicating the geographic longitude of the address, specifying the north-to-south position of a location. This should be input with `latitude` to pinpoint locations on a map.<br>**Constraints**: `>= -180`, `<= 180` | getLongitude(): ?float | setLongitude(?float longitude): void |

## Example (as JSON)

```json
{
  "latitude": 194.62,
  "longitude": 59.18
}
```

