
# Details 5

## Structure

`Details5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `size` | [`?string(PostcardSizeEnum)`](../../doc/models/postcard-size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `frontOriginalUrl` | `?string` | Optional | The original URL of the `front` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getFrontOriginalUrl(): ?string | setFrontOriginalUrl(?string frontOriginalUrl): void |
| `backOriginalUrl` | `?string` | Optional | The original URL of the `back` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getBackOriginalUrl(): ?string | setBackOriginalUrl(?string backOriginalUrl): void |

## Example (as JSON)

```json
{
  "mail_type": "usps_first_class",
  "size": "4x6",
  "front_original_url": "front_original_url2",
  "back_original_url": "back_original_url0"
}
```

