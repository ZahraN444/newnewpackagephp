
# Postcard

## Structure

`Postcard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): ?array | setMetadata(?array metadata): void |
| `mailType` | [`?string(MailTypeEnum)`](../../doc/models/mail-type-enum.md) | Optional | - | getMailType(): ?string | setMailType(?string mailType): void |
| `mergeVariables` | [`?array`](../../doc/models/object-enum.md) | Optional | You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `````, `{`, `\|`, `}`, `~`. More instructions can be found in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account" target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string. | getMergeVariables(): ?array | setMergeVariables(?array mergeVariables): void |
| `sendDate` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getSendDate(): ?array | setSendDate(?array sendDate): void |
| `size` | [`?string(PostcardSizeEnum)`](../../doc/models/postcard-size-enum.md) | Optional | - | getSize(): ?string | setSize(?string size): void |
| `to` | [`array`](../../doc/models/object-enum.md) | Required | - | getTo(): array | setTo(array to): void |
| `carrier` | `string` | Required, Constant | **Default**: `'USPS'` | getCarrier(): string | setCarrier(string carrier): void |
| `thumbnails` | [`?(Thumbnail[])`](../../doc/models/thumbnail.md) | Optional | - | getThumbnails(): ?array | setThumbnails(?array thumbnails): void |
| `expectedDeliveryDate` | `?DateTime` | Optional | A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`. | getExpectedDeliveryDate(): ?\DateTime | setExpectedDeliveryDate(?\DateTime expectedDeliveryDate): void |
| `dateCreated` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): ?\DateTime | setDateCreated(?\DateTime dateCreated): void |
| `dateModified` | `?DateTime` | Optional | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): ?\DateTime | setDateModified(?\DateTime dateModified): void |
| `deleted` | `?bool` | Optional | Only returned if the resource has been successfully deleted. | getDeleted(): ?bool | setDeleted(?bool deleted): void |
| `from` | [`?AddressUs`](../../doc/models/address-us.md) | Optional | - | getFrom(): ?AddressUs | setFrom(?AddressUs from): void |
| `id` | `string` | Required | Unique identifier prefixed with `psc_`.<br>**Constraints**: *Pattern*: `^psc_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `frontTemplateId` | `?string` | Required | The unique ID of the HTML template used for the front of the postcard. Only filled out when the request contains a valid postcard template ID.<br>**Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getFrontTemplateId(): ?string | setFrontTemplateId(?string frontTemplateId): void |
| `backTemplateId` | `?string` | Required | The unique ID of the HTML template used for the back of the postcard. Only filled out when the request contains a valid postcard template ID.<br>**Constraints**: *Pattern*: `^tmpl_[a-zA-Z0-9]+$` | getBackTemplateId(): ?string | setBackTemplateId(?string backTemplateId): void |
| `frontTemplateVersionId` | `?string` | Optional | The unique ID of the specific version of the HTML template used for the front of the postcard. Only filled out when the request contains a valid postcard template ID.<br>**Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getFrontTemplateVersionId(): ?string | setFrontTemplateVersionId(?string frontTemplateVersionId): void |
| `backTemplateVersionId` | `?string` | Optional | The unique ID of the specific version of the HTML template used for the back of the postcard. Only filled out when the request contains a valid postcard template ID.<br>**Constraints**: *Pattern*: `^vrsn_[a-zA-Z0-9]+$` | getBackTemplateVersionId(): ?string | setBackTemplateVersionId(?string backTemplateVersionId): void |
| `trackingEvents` | [`?(TrackingEventNormal[])`](../../doc/models/tracking-event-normal.md) | Optional | An array of tracking_event objects ordered by ascending `time`. Will not be populated for postcards created in test mode. | getTrackingEvents(): ?array | setTrackingEvents(?array trackingEvents): void |
| `url` | `string` | Required | A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.<br>**Constraints**: *Pattern*: `^https://lob-assets\.com/(letters\|postcards\|bank-accounts\|checks\|self-mailers\|cards)/[a-z]{3,4}_[a-z0-9]{15,16}(\.pdf\|_thumb_[a-z]+_[0-9]+\.png)\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$` | getUrl(): string | setUrl(string url): void |
| `campaignId` | `?string` | Optional | The unique ID of the associated campaign if the resource was generated from a campaign. | getCampaignId(): ?string | setCampaignId(?string campaignId): void |
| `useType` | [`?array`](../../doc/models/object-enum.md) | Optional | - | getUseType(): ?array | setUseType(?array useType): void |
| `status` | [`?string(ThestatusofthebuckslipEnum)`](../../doc/models/thestatusofthebuckslip-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `failureReason` | `?string` | Optional | A string describing the reason for failure if the postcard failed to render. | getFailureReason(): ?string | setFailureReason(?string failureReason): void |
| `object` | [`?string(Object10Enum)`](../../doc/models/object-10-enum.md) | Optional | - | getObject(): ?string | setObject(?string object): void |

## Example (as JSON)

```json
{
  "to": {
    "key1": "val1",
    "key2": "val2"
  },
  "carrier": "USPS",
  "id": "id4",
  "front_template_id": "front_template_id4",
  "back_template_id": "back_template_id4",
  "url": "url8",
  "description": "description4",
  "metadata": {
    "key0": "metadata1"
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

