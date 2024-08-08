
# Returned 1

Properties that the postcards in your Creative should have. Check within in order to add a QR code to your creative.

## Structure

`Returned1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `size` | [`?string(PostcardSizeEnum)`](../../doc/models/postcard-size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `frontOriginalUrl` | `?string` | Optional | The original URL of the `front` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getFrontOriginalUrl(): ?string | setFrontOriginalUrl(?string frontOriginalUrl): void |
| `backOriginalUrl` | `?string` | Optional | The original URL of the `back` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getBackOriginalUrl(): ?string | setBackOriginalUrl(?string backOriginalUrl): void |
| `addressPlacement` | [`?string(AddressPlacementEnum)`](../../doc/models/address-placement-enum.md) | Optional | - | getAddressPlacement(): ?string | setAddressPlacement(?string addressPlacement): void |
| `buckslips` | `?(string[])` | Optional | A single-element array containing an existing buckslip id in a string format. See [buckslips](#tag/Buckslips) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^bck_[a-zA-Z0-9]+$` | getBuckslips(): ?array | setBuckslips(?array buckslips): void |
| `cards` | `?(string[])` | Optional | A single-element array containing an existing card id in a string format. See [cards](#tag/Cards) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^card_[a-zA-Z0-9]+$` | getCards(): ?array | setCards(?array cards): void |
| `customEnvelope` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getCustomEnvelope(): ?array | setCustomEnvelope(?array customEnvelope): void |
| `color` | `?bool` | Optional | Set this key to `true` if you would like to print in color. Set to `false` if you would like to print in black and white. | getColor(): ?bool | setColor(?bool color): void |
| `doubleSided` | `?bool` | Optional | Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.<br>**Default**: `true` | getDoubleSided(): ?bool | setDoubleSided(?bool doubleSided): void |
| `extraService` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getExtraService(): ?array | setExtraService(?array extraService): void |
| `fileOriginalUrl` | `?string` | Optional | The original URL of the `file` template. | getFileOriginalUrl(): ?string | setFileOriginalUrl(?string fileOriginalUrl): void |
| `insideOriginalUrl` | `?string` | Optional | The original URL of the `inside` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getInsideOriginalUrl(): ?string | setInsideOriginalUrl(?string insideOriginalUrl): void |
| `outsideOriginalUrl` | `?string` | Optional | The original URL of the `outside` template.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2083` | getOutsideOriginalUrl(): ?string | setOutsideOriginalUrl(?string outsideOriginalUrl): void |

## Example (as JSON)

```json
{
  "double_sided": true,
  "mail_type": "usps_first_class",
  "size": "6x11",
  "front_original_url": "front_original_url8",
  "back_original_url": "back_original_url4",
  "address_placement": "bottom_first_page_center"
}
```

