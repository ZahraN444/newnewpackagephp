
# Writable

Properties that the postcards in your Creative should have. Check within in order to add a QR code to your creative.

## Structure

`Writable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `size` | [`?string(PostcardSizeEnum)`](../../doc/models/postcard-size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `qrCode` | [`?QrCode1`](../../doc/models/qr-code-1.md) | Optional | - | getQrCode(): ?QrCode1 | setQrCode(?QrCode1 qrCode): void |

## Example (as JSON)

```json
{
  "mail_type": "usps_first_class",
  "size": "6x9",
  "qr_code": {
    "position": "position2",
    "top": "top8",
    "right": "right2",
    "left": "left2",
    "bottom": "bottom4",
    "redirect_url": "String9",
    "width": "width0"
  }
}
```

