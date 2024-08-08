
# Company Validation

## Structure

`CompanyValidation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier prefixed with `id_validation_`.<br>**Constraints**: *Pattern*: `^id_validation_[a-zA-Z0-9_]+$` | getId(): ?string | setId(?string id): void |
| `company` | `?string` | Optional | The name of the company or firm.<br>**Constraints**: *Maximum Length*: `500` | getCompany(): ?string | setCompany(?string company): void |
| `primaryLine` | `?string` | Optional | The primary delivery line (usually the street address) of the address.<br>Combination of the following applicable `components`:<br><br>* `primary_number`<br>* `street_predirection`<br>* `street_name`<br>* `street_suffix`<br>* `street_postdirection`<br>* `secondary_designator`<br>* `secondary_number`<br>* `pmb_designator`<br>* `pmb_number`<br>**Constraints**: *Maximum Length*: `500` | getPrimaryLine(): ?string | setPrimaryLine(?string primaryLine): void |
| `secondaryLine` | `?string` | Optional | The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.<br>**Constraints**: *Maximum Length*: `500` | getSecondaryLine(): ?string | setSecondaryLine(?string secondaryLine): void |
| `urbanization` | `?string` | Optional | Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development within a city. See <a href="https://pe.usps.com/text/pub28/28api_008.htm#:~:text=I51.,-4%20Urbanizations&text=In%20Puerto%20Rico%2C%20identical%20street,placed%20before%20the%20urbanization%20name." target="_blank">USPS documentation</a> for clarification.<br>**Constraints**: *Maximum Length*: `500` | getUrbanization(): ?string | setUrbanization(?string urbanization): void |
| `lastLine` | `?string` | Optional | Combination of the following applicable `components`:<br><br>* City (`city`)<br>* State (`state`)<br>* ZIP code (`zip_code`)<br>* ZIP+4 (`zip_code_plus_4`) | getLastLine(): ?string | setLastLine(?string lastLine): void |
| `score` | `?float` | Optional | A numerical score between 0 and 100 that represents the likelihood the provided name is associated with a physical address.<br>**Constraints**: `>= 0`, `<= 100` | getScore(): ?float | setScore(?float score): void |
| `confidence` | [`?string(ConfidenceEnum)`](../../doc/models/confidence-enum.md) | Optional | - | getConfidence(): ?string | setConfidence(?string confidence): void |
| `object` | [`?string(Object6Enum)`](../../doc/models/object-6-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "company": "company8",
  "primary_line": "primary_line2",
  "secondary_line": "secondary_line8",
  "urbanization": "urbanization4"
}
```

