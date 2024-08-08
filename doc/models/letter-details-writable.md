
# Letter Details Writable

Properties that the letters in your Creative should have. Check within in order to add a QR code to your creative.

## Structure

`LetterDetailsWritable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressPlacement` | [`?string(AddressPlacementEnum)`](../../doc/models/address-placement-enum.md) | Optional | - | getAddressPlacement(): ?string | setAddressPlacement(?string addressPlacement): void |
| `addOnTypes` | [`?(string(LetterAddOnTypesEnum)[])`](../../doc/models/letter-add-on-types-enum.md) | Optional | An array containing the types of add-ons for the Letter Creative.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `3` | getAddOnTypes(): ?array | setAddOnTypes(?array addOnTypes): void |
| `buckslips` | `?(string[])` | Optional | A single-element array containing an existing buckslip id in a string format. See [buckslips](#tag/Buckslips) for more information. Note that buckslip letter campaigns require a minimum send quantity of 5,000 letters per campaign.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^bck_[a-zA-Z0-9]+$` | getBuckslips(): ?array | setBuckslips(?array buckslips): void |
| `cards` | `?(string[])` | Optional | A single-element array containing an existing card id in a string format. See [cards](#tag/Cards) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^card_[a-zA-Z0-9]+$` | getCards(): ?array | setCards(?array cards): void |
| `color` | `bool` | Required | Set this key to `true` if you would like to print in color. Set to `false` if you would like to print in black and white. | getColor(): bool | setColor(bool color): void |
| `customEnvelope` | `?string` | Optional | Accepts an envelope ID for any customized envelope with available inventory. If no inventory is available for the specified ID, the letter will not be sent, and an error will be returned. If the letter has more than 6 sheets, it will be sent in a blank flat envelope. Custom envelopes may be created and ordered from the dashboard. This feature is exclusive to certain customers. Upgrade to the appropriate <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a> to gain access.<br>**Constraints**: *Pattern*: `^env_[a-zA-Z0-9]+$` | getCustomEnvelope(): ?string | setCustomEnvelope(?string customEnvelope): void |
| `doubleSided` | `?bool` | Optional | Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.<br>**Default**: `true` | getDoubleSided(): ?bool | setDoubleSided(?bool doubleSided): void |
| `extraService` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getExtraService(): ?array | setExtraService(?array extraService): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `qrCode` | [`?QrCode1`](../../doc/models/qr-code-1.md) | Optional | - | getQrCode(): ?QrCode1 | setQrCode(?QrCode1 qrCode): void |

## Example (as JSON)

```json
{
  "color": false,
  "double_sided": true,
  "address_placement": "top_first_page",
  "add_on_types": [
    "custom_envelope"
  ],
  "buckslips": [
    "buckslips6",
    "buckslips7"
  ],
  "cards": [
    "cards1"
  ],
  "custom_envelope": "custom_envelope6"
}
```

