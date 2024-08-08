
# Link Response

## Structure

`LinkResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier prefixed with `lnk_`. | getId(): ?string | setId(?string id): void |
| `campaignId` | `?string` | Optional | Unique identifier prefixed with `cmp_`.<br>**Constraints**: *Pattern*: `^cmp_[a-zA-Z0-9]+$` | getCampaignId(): ?string | setCampaignId(?string campaignId): void |
| `domainId` | `?string` | Optional | A unique identifier for the registered domain. | getDomainId(): ?string | setDomainId(?string domainId): void |
| `resourceId` | `?string` | Optional | The unique ID of the associated resource where the link was used. | getResourceId(): ?string | setResourceId(?string resourceId): void |
| `redirectLink` | `?string` | Optional | The original target URL. | getRedirectLink(): ?string | setRedirectLink(?string redirectLink): void |
| `shortLink` | `?string` | Optional | The shortened URL for the associated original URL. | getShortLink(): ?string | setShortLink(?string shortLink): void |
| `metadataTag` | `?array<string,string>` | Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | getMetadataTag(): ?array | setMetadataTag(?array metadataTag): void |
| `billingGroupId` | `?string` | Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. | getBillingGroupId(): ?string | setBillingGroupId(?string billingGroupId): void |

## Example (as JSON)

```json
{
  "id": "id6",
  "campaign_id": "campaign_id6",
  "domain_id": "domain_id8",
  "resource_id": "resource_id2",
  "redirect_link": "redirect_link6"
}
```

