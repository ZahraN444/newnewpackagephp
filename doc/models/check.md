
# Check

## Structure

`Check`

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
| `from` | [`?AddressUs`](../../doc/models/address-us.md) | Optional | - | getFrom(): ?AddressUs | setFrom(?AddressUs from): void |
| `id` | `string` | Required | Unique identifier prefixed with `chk_`.<br>**Constraints**: *Pattern*: `^chk_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `amount` | `float` | Required | The payment amount to be sent in US dollars.<br>**Constraints**: `<= 999999.99`, *Multiple Of*: `0.01` | getAmount(): float | setAmount(float amount): void |
| `bankAccount` | [`BankAccount`](../../doc/models/bank-account.md) | Required | - | getBankAccount(): BankAccount | setBankAccount(BankAccount bankAccount): void |
| `checkBottomTemplateId` | `?string` | Optional | **Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getCheckBottomTemplateId(): ?string | setCheckBottomTemplateId(?string checkBottomTemplateId): void |
| `attachmentTemplateId` | `?string` | Optional | **Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getAttachmentTemplateId(): ?string | setAttachmentTemplateId(?string attachmentTemplateId): void |
| `checkBottomTemplateVersionId` | `?string` | Optional | **Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getCheckBottomTemplateVersionId(): ?string | setCheckBottomTemplateVersionId(?string checkBottomTemplateVersionId): void |
| `attachmentTemplateVersionId` | `?string` | Optional | **Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getAttachmentTemplateVersionId(): ?string | setAttachmentTemplateVersionId(?string attachmentTemplateVersionId): void |
| `url` | `string` | Required | A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.<br>**Constraints**: *Pattern*: `^https://lob-assets\.com/(letters\|postcards\|bank-accounts\|checks\|self-mailers\|cards)/[a-z]{3,4}_[a-z0-9]{15,16}(\.pdf\|_thumb_[a-z]+_[0-9]+\.png)\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$` | getUrl(): string | setUrl(string url): void |
| `to` | [`ToAddressUsChk`](../../doc/models/to-address-us-chk.md) | Required | - | getTo(): ToAddressUsChk | setTo(ToAddressUsChk to): void |
| `carrier` | `string` | Required, Constant | **Default**: `'USPS'` | getCarrier(): string | setCarrier(string carrier): void |
| `thumbnails` | [`?(Thumbnail[])`](../../doc/models/thumbnail.md) | Optional | - | getThumbnails(): ?array | setThumbnails(?array thumbnails): void |
| `expectedDeliveryDate` | `?DateTime` | Optional | A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`. | getExpectedDeliveryDate(): ?\DateTime | setExpectedDeliveryDate(?\DateTime expectedDeliveryDate): void |
| `trackingEvents` | [`?(TrackingEventNormal[])`](../../doc/models/tracking-event-normal.md) | Optional | An array of tracking_event objects ordered by ascending `time`. Will not be populated for checks created in test mode. | getTrackingEvents(): ?array | setTrackingEvents(?array trackingEvents): void |
| `status` | [`?string(ThestatusofthebuckslipEnum)`](../../doc/models/thestatusofthebuckslip-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `failureReason` | `?string` | Optional | A string describing the reason for failure if the check failed to render. | getFailureReason(): ?string | setFailureReason(?string failureReason): void |
| `object` | [`?string(Object5Enum)`](../../doc/models/object-5-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example (as JSON)

```json
{
  "use_type": {
    "key1": "val1",
    "key2": "val2"
  },
  "id": "id2",
  "amount": 158.04,
  "bank_account": {
    "id": "bank_a",
    "signature_url": "https://lob-assets.com/bank-accounts/asd_asdfghjkqwertyui.pdf?expires=1234567890&signature=aksdf",
    "bank_name": "JPMORGAN CHASE BANK",
    "verified": true,
    "object": "bank_account",
    "description": "Test Bank Account",
    "routing_number": "322271627",
    "account_number": "123456789",
    "signatory": "Jane Doe",
    "account_type": "individual",
    "metadat": {
      "spiffy": "true"
    },
    "date_created": "2019-08-08T19:34:47.571Z",
    "date_modified": "2019-08-08T19:34:47.571Z",
    "check_template": "common",
    "fractional_routing_number": "fractional_routing_number6",
    "city": "city4",
    "state": "state0"
  },
  "url": "url6",
  "to": {
    "date_created": "2016-03-13T12:52:32.123Z",
    "date_modified": "2016-03-13T12:52:32.123Z",
    "object": "address",
    "id": "id6",
    "name": "name6",
    "company": "company6",
    "address_line1": "address_line10",
    "address_city": "address_city6",
    "address_state": "address_state8",
    "address_zip": "address_zip8",
    "deleted": false,
    "description": "description6",
    "phone": "phone4",
    "email": "email0",
    "address_line2": "address_line28"
  },
  "carrier": "USPS",
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "description": "description2",
  "metadata": {
    "key0": "metadata9",
    "key1": "metadata8",
    "key2": "metadata7"
  },
  "merge_variables": {
    "key1": "val1",
    "key2": "val2"
  },
  "send_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "mail_type": "usps_first_class"
}
```

