
# Letter Editable

## Structure

`LetterEditable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `to` | string\|Inline[AddressUs](../../doc/models/address-us.md)\|Inline[AddressIntl](../../doc/models/address-intl.md) | Required | This is a container for one-of cases. | getTo(): | setTo( to): void |
| `from` | string\|Inline[AddressUs](../../doc/models/address-us.md)\|Inline[AddressIntl](../../doc/models/address-intl.md) | Required | This is a container for one-of cases. | getFrom(): | setFrom( from): void |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `mergeVariables` | [`?array`](../../doc/models/object-enum.md) | Optional | You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `````, `{`, `\|`, `}`, `~`. More instructions can be found in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account" target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string. | getMergeVariables(): ?array | setMergeVariables(?array mergeVariables): void |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getSendDate(): ?array | setSendDate(?array sendDate): void |
| `file` | [`array`](../../doc/models/object-enum.md) | Required | - | getFile(): array | setFile(array file): void |
| `extraService` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getExtraService(): ?array | setExtraService(?array extraService): void |
| `cards` | `?(string[])` | Optional | A single-element array containing an existing card id in a string format. See [cards](#tag/Cards) for more information.<br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1`, *Pattern*: `^card_[a-zA-Z0-9]+$` | getCards(): ?array | setCards(?array cards): void |
| `color` | `bool` | Required | - | getColor(): bool | setColor(bool color): void |
| `doubleSided` | `?bool` | Optional | Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.<br>**Default**: `true` | getDoubleSided(): ?bool | setDoubleSided(?bool doubleSided): void |
| `addressPlacement` | [`?string(AddressPlacementEnum)`](../../doc/models/address-placement-enum.md) | Optional | - | getAddressPlacement(): ?string | setAddressPlacement(?string addressPlacement): void |
| `returnEnvelope` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getReturnEnvelope(): ?array | setReturnEnvelope(?array returnEnvelope): void |
| `perforatedPage` | `?int` | Optional | Required if `return_envelope` is `true`. The number of the page that should be perforated for use with the return envelope. Must be greater than or equal to `1`. The blank page added by `address_placement=insert_blank_page` will be ignored when considering the perforated page number. To see how perforation will impact your letter design, view our <a href="https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/letter_perf_template.pdf" target="_blank">perforation guide</a>. | getPerforatedPage(): ?int | setPerforatedPage(?int perforatedPage): void |
| `customEnvelope` | `?string` | Optional | Accepts an envelope ID for any customized envelope with available inventory. If no inventory is available for the specified ID, the letter will not be sent, and an error will be returned. If the letter has more than 6 sheets, it will be sent in a blank flat envelope. Custom envelopes may be created and ordered from the dashboard. This feature is exclusive to certain customers. Upgrade to the appropriate <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a> to gain access.<br>**Constraints**: *Pattern*: `^env_[a-zA-Z0-9]+$` | getCustomEnvelope(): ?string | setCustomEnvelope(?string customEnvelope): void |
| `billingGroupId` | `?string` | Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. | getBillingGroupId(): ?string | setBillingGroupId(?string billingGroupId): void |
| `qrCode` | [`?QrCode4`](../../doc/models/qr-code-4.md) | Optional | - | getQrCode(): ?QrCode4 | setQrCode(?QrCode4 qrCode): void |
| `useType` | [`array`](../../doc/models/object-enum.md) | Required | - | getUseType(): array | setUseType(array useType): void |
| `fsc` | `?bool` | Optional | This is in beta. Contact support@lob.com or your account contact to learn more. Not available for `A4` letter size.<br>**Default**: `false` | getFsc(): ?bool | setFsc(?bool fsc): void |

## Example (as JSON)

```json
{
  "to": "String1",
  "from": "String7",
  "file": {
    "key1": "val1",
    "key2": "val2"
  },
  "color": false,
  "double_sided": true,
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "fsc": false,
  "description": "description6",
  "metadata": {
    "key0": "metadata3",
    "key1": "metadata2",
    "key2": "metadata1"
  },
  "mail_type": "usps_first_class",
  "merge_variables": {
    "key1": "val1",
    "key2": "val2"
  },
  "send_date": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

