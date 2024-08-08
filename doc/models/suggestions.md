
# Suggestions

## Structure

`Suggestions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `primaryLine` | `string` | Required | The primary delivery line (usually the street address) of the address.<br>Combination of the following applicable `components` (primary number &<br>secondary information may be missing or inaccurate):<br><br>* `primary_number`<br>* `street_predirection`<br>* `street_name`<br>* `street_suffix`<br>* `street_postdirection`<br>* `secondary_designator`<br>* `secondary_number`<br>* `pmb_designator`<br>* `pmb_number` | getPrimaryLine(): string | setPrimaryLine(string primaryLine): void |
| `city` | `string` | Required | **Constraints**: *Maximum Length*: `200` | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | The <a href="https://en.wikipedia.org/wiki/ISO_3166-2" target="_blank">ISO 3166-2</a> two letter code for the state.<br>**Constraints**: *Maximum Length*: `2` | getState(): string | setState(string state): void |
| `zipCode` | `string` | Required | **Constraints**: *Pattern*: `^\d{5}((-)?\d{4})?$` | getZipCode(): string | setZipCode(string zipCode): void |
| `object` | [`?string(Object13Enum)`](../../doc/models/object-13-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "primary_line": "primary_line6",
  "city": "city4",
  "state": "state8",
  "zip_code": "zip_code0",
  "object": "us_autocompletion"
}
```

