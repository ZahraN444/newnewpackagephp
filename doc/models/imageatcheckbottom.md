
# Imageatcheckbottom

## Structure

`Imageatcheckbottom`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `mergeVariables` | [`?array`](../../doc/models/object-enum.md) | Optional | You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `````, `{`, `\|`, `}`, `~`. More instructions can be found in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account" target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string. | getMergeVariables(): ?array | setMergeVariables(?array mergeVariables): void |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getSendDate(): ?array | setSendDate(?array sendDate): void |
| `mailType` | [`?string(MailType2Enum)`](../../doc/models/mail-type-2-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `memo` | `?string` | Optional | Text to include on the memo line of the check.<br>**Constraints**: *Maximum Length*: `40` | getMemo(): ?string | setMemo(?string memo): void |
| `checkNumber` | `?int` | Optional | An integer that designates the check number.<br>If `check_number` is not provided, checks created from a new `bank_account` will start at `10000` and increment with each check created with the `bank_account`.<br>A provided `check_number` overrides the defaults. Subsequent checks created with the same `bank_account` will increment from the provided check number.<br>**Constraints**: `>= 1`, `<= 500000000` | getCheckNumber(): ?int | setCheckNumber(?int checkNumber): void |
| `message` | `?string` | Optional | Max of 400 characters to be included at the bottom of the check page.<br>**Constraints**: *Maximum Length*: `400` | getMessage(): ?string | setMessage(?string message): void |
| `useType` | [`array`](../../doc/models/object-enum.md) | Required | - | getUseType(): array | setUseType(array useType): void |
| `to` | string\|[Addressobjwithnamedefined](../../doc/models/addressobjwithnamedefined.md)\|[Addressobjwithcompanydefined](../../doc/models/addressobjwithcompanydefined.md) | Required | This is a container for one-of cases. | getTo(): | setTo( to): void |
| `from` | string\|Inline[AddressUs](../../doc/models/address-us.md) | Required | This is a container for one-of cases. | getFrom(): | setFrom( from): void |
| `bankAccount` | `string` | Required | **Constraints**: *Pattern*: `^bank_[a-zA-Z0-9]+$` | getBankAccount(): string | setBankAccount(string bankAccount): void |
| `amount` | `float` | Required | The payment amount to be sent in US dollars. Amounts will be rounded to two decimal places.<br>**Constraints**: `<= 999999.99` | getAmount(): float | setAmount(float amount): void |
| `logo` | string\|null | Optional | This is a container for one-of cases. | getLogo(): ?string | setLogo(?string logo): void |
| `checkBottom` | [`array`](../../doc/models/object-enum.md) | Required | - | getCheckBottom(): array | setCheckBottom(array checkBottom): void |
| `attachment` | string\|null | Optional | This is a container for one-of cases. | getAttachment(): ?string | setAttachment(?string attachment): void |
| `billingGroupId` | `?string` | Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. | getBillingGroupId(): ?string | setBillingGroupId(?string billingGroupId): void |

## Example (as JSON)

```json
{
  "description": "description0",
  "metadata": {
    "key0": "metadata7"
  },
  "merge_variables": {
    "key1": "val1",
    "key2": "val2"
  },
  "send_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "mail_type": "usps_first_class",
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "to": "String5",
  "from": "String3",
  "bank_account": "bank_account4",
  "amount": 232.22,
  "check_bottom": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

