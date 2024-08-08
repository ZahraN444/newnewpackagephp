# Campaigns

The campaigns endpoint allows you to create and view campaigns that can be used to send multiple letters or postcards.
The API provides endpoints for creating campaigns, updating campaigns, retrieving individual campaigns, listing campaigns, and deleting
campaigns.

```php
$campaignsController = $client->getCampaignsController();
```

## Class Name

`CampaignsController`

## Methods

* [Campaigns List](../../doc/controllers/campaigns.md#campaigns-list)
* [Campaign Create](../../doc/controllers/campaigns.md#campaign-create)
* [Campaign Retrieve](../../doc/controllers/campaigns.md#campaign-retrieve)
* [Campaign Update](../../doc/controllers/campaigns.md#campaign-update)
* [Campaign Delete](../../doc/controllers/campaigns.md#campaign-delete)
* [Campaign Send](../../doc/controllers/campaigns.md#campaign-send)


# Campaigns List

Returns a list of your campaigns. The campaigns are returned sorted by creation date, with the most recently created campaigns appearing first.

```php
function campaignsList(
    ?int $limit = 10,
    ?array $mInclude = null,
    ?Beforeafter $beforeAfter = null
): AllCampaigns
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `beforeAfter` | [`?Beforeafter`](../../doc/models/beforeafter.md) | Query, Optional | `before` and `after` are both optional but only one of them can be in the query at a time. |

## Response Type

[`AllCampaigns`](../../doc/models/all-campaigns.md)

## Example Usage

```php
$limit = 10;

$result = $campaignsController->campaignsList($limit);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "id": "cmp_e05ee61ff80764b",
      "billing_group_id": "bg_fe3079dcdd80e5ae",
      "name": "My Campaign",
      "description": "My Campaign's description",
      "schedule_type": "immediate",
      "send_date": null,
      "target_delivery_date": null,
      "cancel_window_campaign_minutes": 60,
      "metadata": {},
      "use_type": "marketing",
      "is_draft": true,
      "deleted": false,
      "creatives": [],
      "uploads": [],
      "auto_cancel_if_ncoa": false,
      "date_created": "2017-09-05T17:47:53.767Z",
      "date_modified": "2017-09-05T17:47:53.767Z",
      "object": "campaign"
    }
  ],
  "object": "list",
  "previous_url": null,
  "next_url": null,
  "count": 1
}
```


# Campaign Create

Creates a new campaign with the provided properties. See how to launch your first campaign [here](https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-triggered-sends/launch-your-first-campaign).

```php
function campaignCreate(
    string $contentType,
    string $name,
    string $scheduleType,
    FileWrapper $useType,
    ?string $xLangOutput = null,
    ?string $billingGroupId = null,
    ?string $description = null,
    ?\DateTime $targetDeliveryDate = null,
    ?\DateTime $sendDate = null,
    ?int $cancelWindowCampaignMinutes = null,
    ?array $metadata = null,
    ?bool $autoCancelIfNcoa = null
): Campaign
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `name` | `string` | Form, Required | Name of the campaign. |
| `scheduleType` | [`string(CmpScheduleTypeEnum)`](../../doc/models/cmp-schedule-type-enum.md) | Form, Required | - |
| `useType` | `FileWrapper` | Form, Required | - |
| `xLangOutput` | [`?string(XLangOutput1Enum)`](../../doc/models/x-lang-output-1-enum.md) | Header, Optional | * `native` - Translate response to the native language of the country in the request<br>* `match` - match the response to the language in the request<br><br>Default response is in English. |
| `billingGroupId` | `?string` | Form, Optional | Unique identifier prefixed with `bg_`. |
| `description` | `?string` | Form, Optional | An internal description that identifies this resource. Must be no longer than 255 characters. |
| `targetDeliveryDate` | `?DateTime` | Form, Optional | If `schedule_type` is `target_delivery_date`, provide a targeted delivery date for mail pieces in this campaign. |
| `sendDate` | `?DateTime` | Form, Optional | If `schedule_type` is `scheduled_send_date`, provide a date to send this campaign. |
| `cancelWindowCampaignMinutes` | `?int` | Form, Optional | A window, in minutes, within which the campaign can be canceled. |
| `metadata` | `?array<string,string>` | Form, Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. |
| `autoCancelIfNcoa` | `?bool` | Form, Optional | Whether or not a mail piece should be automatically canceled and not sent if the address is updated via NCOA. |

## Response Type

[`Campaign`](../../doc/models/campaign.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$name = 'My Demo Campaign';

$scheduleType = CmpScheduleTypeEnum::IMMEDIATE;

$useType = FileWrapper::createFromPath('dummy_file');

$description = 'My Campaign\'s description';

$result = $campaignsController->campaignCreate(
    $contentType,
    $name,
    $scheduleType,
    $useType,
    null,
    null,
    $description
);
```

## Example Response *(as JSON)*

```json
{
  "id": "cmp_e05ee61ff80764b",
  "billing_group_id": "bg_fe3079dcdd80e5ae",
  "name": "My Campaign",
  "description": "My Campaign's description",
  "schedule_type": "immediate",
  "cancel_window_campaign_minutes": 60,
  "metadata": {},
  "use_type": "marketing",
  "is_draft": true,
  "deleted": false,
  "creatives": [],
  "uploads": [],
  "auto_cancel_if_ncoa": false,
  "date_created": "2017-09-05T17:47:53.767Z",
  "date_modified": "2017-09-05T17:47:53.767Z",
  "object": "campaign"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Campaign Retrieve

Retrieves the details of an existing campaign. You need only supply the unique campaign identifier that was returned upon campaign creation.

```php
function campaignRetrieve(string $cmpId): Campaign
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cmpId` | `string` | Template, Required | id of the campaign |

## Response Type

[`Campaign`](../../doc/models/campaign.md)

## Example Usage

```php
$cmpId = 'cmp_id0';

$result = $campaignsController->campaignRetrieve($cmpId);
```

## Example Response *(as JSON)*

```json
{
  "id": "cmp_e05ee61ff80764b",
  "billing_group_id": "bg_fe3079dcdd80e5ae",
  "name": "My Campaign",
  "description": "My Campaign's description",
  "schedule_type": "immediate",
  "cancel_window_campaign_minutes": 60,
  "metadata": {},
  "use_type": "marketing",
  "is_draft": true,
  "deleted": false,
  "creatives": [],
  "uploads": [],
  "auto_cancel_if_ncoa": false,
  "date_created": "2017-09-05T17:47:53.767Z",
  "date_modified": "2017-09-05T17:47:53.767Z",
  "object": "campaign"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Campaign Update

Update the details of an existing campaign. You need only supply the unique identifier that was returned upon campaign creation.

```php
function campaignUpdate(
    string $cmpId,
    string $contentType,
    ?string $name = null,
    ?string $description = null,
    ?string $scheduleType = null,
    ?\DateTime $targetDeliveryDate = null,
    ?\DateTime $sendDate = null,
    ?int $cancelWindowCampaignMinutes = null,
    ?array $metadata = null,
    ?bool $isDraft = null,
    ?FileWrapper $useType = null,
    ?bool $autoCancelIfNcoa = null
): Campaign
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cmpId` | `string` | Template, Required | id of the campaign |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `name` | `?string` | Form, Optional | - |
| `description` | `?string` | Form, Optional | An internal description that identifies this resource. Must be no longer than 255 characters. |
| `scheduleType` | [`?string(CmpScheduleTypeEnum)`](../../doc/models/cmp-schedule-type-enum.md) | Form, Optional | - |
| `targetDeliveryDate` | `?DateTime` | Form, Optional | If `schedule_type` is `target_delivery_date`, provide a targeted delivery date for mail pieces in this campaign. |
| `sendDate` | `?DateTime` | Form, Optional | If `schedule_type` is `scheduled_send_date`, provide a date to send this campaign. |
| `cancelWindowCampaignMinutes` | `?int` | Form, Optional | A window, in minutes, within which the campaign can be canceled. |
| `metadata` | `?array<string,string>` | Form, Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. |
| `isDraft` | `?bool` | Form, Optional | Whether or not the campaign is still a draft. Can either be excluded or `false`. |
| `useType` | `?FileWrapper` | Form, Optional | - |
| `autoCancelIfNcoa` | `?bool` | Form, Optional | Whether or not a mail piece should be automatically canceled and not sent if the address is updated via NCOA. |

## Response Type

[`Campaign`](../../doc/models/campaign.md)

## Example Usage

```php
$cmpId = 'cmp_id0';

$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$description = 'Test campaign';

$result = $campaignsController->campaignUpdate(
    $cmpId,
    $contentType,
    null,
    $description
);
```

## Example Response *(as JSON)*

```json
{
  "id": "cmp_e05ee61ff80764b",
  "billing_group_id": "bg_fe3079dcdd80e5ae",
  "name": "My Campaign",
  "description": "My Campaign's description",
  "schedule_type": "immediate",
  "cancel_window_campaign_minutes": 60,
  "metadata": {},
  "use_type": "marketing",
  "is_draft": true,
  "deleted": false,
  "creatives": [],
  "uploads": [],
  "auto_cancel_if_ncoa": false,
  "date_created": "2017-09-05T17:47:53.767Z",
  "date_modified": "2017-09-05T17:47:53.767Z",
  "object": "campaign"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Campaign Delete

Delete an existing campaign. You need only supply the unique identifier that was returned upon campaign creation. Deleting a campaign also deletes any associated mail pieces that have been created but not sent. A campaign's `send_date` matches its associated mail pieces' `send_date`s.

```php
function campaignDelete(string $cmpId): CampaignsResponse4
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cmpId` | `string` | Template, Required | id of the campaign |

## Response Type

[`CampaignsResponse4`](../../doc/models/campaigns-response-4.md)

## Example Usage

```php
$cmpId = 'cmp_id0';

$result = $campaignsController->campaignDelete($cmpId);
```

## Example Response *(as JSON)*

```json
{
  "id": "cmp_e05ee61ff80764b",
  "deleted": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Campaign Send

Sends a campaign. You need only supply the unique campaign identifier that was returned upon campaign creation.

```php
function campaignSend(string $cmpId): Campaign
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `cmpId` | `string` | Template, Required | id of the campaign |

## Response Type

[`Campaign`](../../doc/models/campaign.md)

## Example Usage

```php
$cmpId = 'cmp_id0';

$result = $campaignsController->campaignSend($cmpId);
```

## Example Response *(as JSON)*

```json
{
  "id": "cmp_e05ee61ff80764b",
  "billing_group_id": "bg_fe3079dcdd80e5ae",
  "name": "My Campaign",
  "description": "My Campaign's description",
  "schedule_type": "immediate",
  "cancel_window_campaign_minutes": 60,
  "metadata": {},
  "use_type": "marketing",
  "is_draft": true,
  "deleted": false,
  "creatives": [],
  "uploads": [],
  "auto_cancel_if_ncoa": false,
  "date_created": "2017-09-05T17:47:53.767Z",
  "date_modified": "2017-09-05T17:47:53.767Z",
  "object": "campaign"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

