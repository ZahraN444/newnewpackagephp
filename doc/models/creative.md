
# Creative

## Structure

`Creative`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dateCreated` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was created. | getDateCreated(): \DateTime | setDateCreated(\DateTime dateCreated): void |
| `dateModified` | `DateTime` | Required | A timestamp in ISO 8601 format of the date the resource was last modified. | getDateModified(): \DateTime | setDateModified(\DateTime dateModified): void |
| `deleted` | `bool` | Required | Only returned if the resource has been successfully deleted. | getDeleted(): bool | setDeleted(bool deleted): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'creative'` | getObject(): string | setObject(string object): void |
| `resourceType` | `string` | Required, Constant | Mailpiece type for the creative<br>**Default**: `'postcard'` | getResourceType(): string | setResourceType(string resourceType): void |
| `details` | [`Details`](../../doc/models/details.md) | Required | - | getDetails(): Details | setDetails(Details details): void |
| `from` | string\|Inline[AddressUs](../../doc/models/address-us.md) | Required | This is a container for one-of cases. | getFrom(): | setFrom( from): void |
| `description` | `?string` | Required | An internal description that identifies this resource. Must be no longer than 255 characters.<br>**Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `array<string,string>` | Required | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadata(): array | setMetadata(array metadata): void |
| `id` | `string` | Required | Unique identifier prefixed with `crv_`.<br>**Constraints**: *Pattern*: `^crv_[a-zA-Z0-9]+$` | getId(): string | setId(string id): void |
| `templatePreviewUrls` | [`array`](../../doc/models/object-enum.md) | Required | Preview URLs associated with a creative's artwork asset(s) if the creative uses HTML templates as assets. An empty object will be returned if no `template_preview`s have been generated. | getTemplatePreviewUrls(): array | setTemplatePreviewUrls(array templatePreviewUrls): void |
| `templatePreviews` | [`array[]`](../../doc/models/object-enum.md) | Required | A list of template preview objects if the creative uses HTML template(s) as artwork asset(s). An empty array will be returned if no `template_preview`s have been generated for the creative. | getTemplatePreviews(): array | setTemplatePreviews(array templatePreviews): void |
| `campaigns` | [`CampaignItem[]`](../../doc/models/campaign-item.md) | Required | Array of campaigns associated with the creative ID | getCampaigns(): array | setCampaigns(array campaigns): void |

## Example (as JSON)

```json
{
  "date_created": "2016-03-13T12:52:32.123Z",
  "date_modified": "2016-03-13T12:52:32.123Z",
  "deleted": false,
  "object": "creative",
  "resource_type": "postcard",
  "details": {
    "double_sided": true,
    "mail_type": "usps_first_class",
    "size": "6x11",
    "front_original_url": "front_original_url4",
    "back_original_url": "back_original_url6",
    "address_placement": "top_first_page"
  },
  "from": "String5",
  "description": "description8",
  "metadata": {
    "key0": "metadata5",
    "key1": "metadata4"
  },
  "id": "crv_2a3b096c409b32c",
  "template_preview_urls": {
    "key1": "val1",
    "key2": "val2"
  },
  "template_previews": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "campaigns": [
    {
      "id": "cmp_ed76e33e7ac4d0bd",
      "name": "My postman Campaign 2",
      "description": "Created via postman again",
      "schedule_type": "immediate",
      "send_date": "2016-03-13T12:52:32.123Z",
      "target_delivery_date": "2016-03-13T12:52:32.123Z",
      "cancel_window_campaign_minutes": 124,
      "metadata": {},
      "use_type": {
        "key1": "val1",
        "key2": "val2"
      },
      "is_draft": true,
      "deleted": false,
      "creatives": [],
      "uploads": [],
      "auto_cancel_if_ncoa": false,
      "date_created": "2022-07-26T20:20:25.016Z",
      "date_modified": "2022-07-26T20:20:25.016Z",
      "object": "campaign",
      "billing_group_id": "billing_group_id8"
    }
  ]
}
```

