
# Letter Details Returned

Properties that the letters in your Creative should have. Check within in order to add a QR code to your creative.

## Structure

`LetterDetailsReturned`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressPlacement` | [`?string(AddressPlacementEnum)`](../../doc/models/address-placement-enum.md) | Optional | - | getAddressPlacement(): ?string | setAddressPlacement(?string addressPlacement): void |
| `buckslips` | `?(string[])` | Optional | A single-element array containing an existing buckslip id in a string format. See [buckslips](#tag/Buckslips) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^bck_[a-zA-Z0-9]+$` | getBuckslips(): ?array | setBuckslips(?array buckslips): void |
| `cards` | `?(string[])` | Optional | A single-element array containing an existing card id in a string format. See [cards](#tag/Cards) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^card_[a-zA-Z0-9]+$` | getCards(): ?array | setCards(?array cards): void |
| `customEnvelope` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getCustomEnvelope(): ?array | setCustomEnvelope(?array customEnvelope): void |
| `color` | `?bool` | Optional | Set this key to `true` if you would like to print in color. Set to `false` if you would like to print in black and white. | getColor(): ?bool | setColor(?bool color): void |
| `doubleSided` | `?bool` | Optional | Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.<br>**Default**: `true` | getDoubleSided(): ?bool | setDoubleSided(?bool doubleSided): void |
| `extraService` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getExtraService(): ?array | setExtraService(?array extraService): void |
| `fileOriginalUrl` | `?string` | Optional | The original URL of the `file` template. | getFileOriginalUrl(): ?string | setFileOriginalUrl(?string fileOriginalUrl): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |

## Example (as JSON)

```json
{
  "double_sided": true,
  "address_placement": "bottom_first_page_center",
  "buckslips": [
    "buckslips4",
    "buckslips5",
    "buckslips6"
  ],
  "cards": [
    "cards9",
    "cards0"
  ],
  "custom_envelope": {
    "key1": "val1",
    "key2": "val2"
  },
  "color": false
}
```

