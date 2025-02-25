
# Postcard Editable

## Structure

`PostcardEditable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `mergeVariables` | [`?array`](../../doc/models/object-enum.md) | Optional | You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `````, `{`, `\|`, `}`, `~`. More instructions can be found in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account" target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string. | getMergeVariables(): ?array | setMergeVariables(?array mergeVariables): void |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getSendDate(): ?array | setSendDate(?array sendDate): void |
| `size` | [`?string(PostcardSizeEnum)`](../../doc/models/postcard-size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `to` | string\|Inline[AddressUs](../../doc/models/address-us.md)\|Inline[AddressIntl](../../doc/models/address-intl.md) | Required | This is a container for one-of cases. | getTo(): | setTo( to): void |
| `from` | string\|Inline[AddressUs](../../doc/models/address-us.md)\|null | Optional | This is a container for one-of cases. | getFrom(): | setFrom( from): void |
| `front` | [`array`](../../doc/models/object-enum.md) | Required | - | getFront(): array | setFront(array front): void |
| `back` | [`array`](../../doc/models/object-enum.md) | Required | - | getBack(): array | setBack(array back): void |
| `billingGroupId` | `?string` | Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. | getBillingGroupId(): ?string | setBillingGroupId(?string billingGroupId): void |
| `qrCode` | [`?QrCode4`](../../doc/models/qr-code-4.md) | Optional | - | getQrCode(): ?QrCode4 | setQrCode(?QrCode4 qrCode): void |
| `useType` | [`array`](../../doc/models/object-enum.md) | Required | - | getUseType(): array | setUseType(array useType): void |

## Example (as JSON)

```json
{
  "description": "description6",
  "metadata": {
    "key0": "metadata9"
  },
  "mail_type": "usps_first_class",
  "merge_variables": {
    "key1": "val1",
    "key2": "val2"
  },
  "send_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "to": "String3",
  "front": {
    "key1": "val1",
    "key2": "val2"
  },
  "back": {
    "key1": "val1",
    "key2": "val2"
  },
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

