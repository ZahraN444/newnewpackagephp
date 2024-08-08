# URL Shortener

```php
$uRLShortenerController = $client->getURLShortenerController();
```

## Class Name

`URLShortenerController`

## Methods

* [Domain Get](../../doc/controllers/url-shortener.md#domain-get)
* [Domain Delete](../../doc/controllers/url-shortener.md#domain-delete)
* [Domain Create](../../doc/controllers/url-shortener.md#domain-create)
* [Domain List](../../doc/controllers/url-shortener.md#domain-list)
* [Domain Delete Links](../../doc/controllers/url-shortener.md#domain-delete-links)
* [Links List](../../doc/controllers/url-shortener.md#links-list)
* [Links Get](../../doc/controllers/url-shortener.md#links-get)
* [Link Update](../../doc/controllers/url-shortener.md#link-update)
* [Links Delete](../../doc/controllers/url-shortener.md#links-delete)
* [Link Create](../../doc/controllers/url-shortener.md#link-create)
* [Link Bulk Create](../../doc/controllers/url-shortener.md#link-bulk-create)


# Domain Get

Retrieve details for a single domain.

```php
function domainGet(string $domainId): DomainResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `domainId` | `string` | Template, Required | Unique identifier for a domain. |

## Response Type

[`DomainResponse`](../../doc/models/domain-response.md)

## Example Usage

```php
$domainId = 'domain_id2';

$result = $uRLShortenerController->domainGet($domainId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Domain Delete

Delete a registered domain. This operation can only be performed if all associated links with the domain are deleted.

```php
function domainDelete(string $domainId): DomainResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `domainId` | `string` | Template, Required | Unique identifier for a domain. |

## Response Type

[`DomainResponse`](../../doc/models/domain-response.md)

## Example Usage

```php
$domainId = 'domain_id2';

$result = $uRLShortenerController->domainDelete($domainId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Domain Create

Add a new custom domain that can be used to create custom links.

```php
function domainCreate(string $contentType, string $domain): DomainResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `domain` | `string` | Form, Required | The registered domain/hostname. |

## Response Type

[`DomainResponse`](../../doc/models/domain-response.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$domain = 'domain6';

$result = $uRLShortenerController->domainCreate(
    $contentType,
    $domain
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Domain List

Retrieve a list of all created domains.

```php
function domainList(): DomainsResponse
```

## Response Type

[`DomainsResponse`](../../doc/models/domains-response.md)

## Example Usage

```php
$result = $uRLShortenerController->domainList();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Domain Delete Links

Delete all associated links for a domain

```php
function domainDeleteLinks(string $domainId): DomainsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `domainId` | `string` | Template, Required | Unique identifier for a domain. |

## Response Type

[`DomainsResponse`](../../doc/models/domains-response.md)

## Example Usage

```php
$domainId = 'domain_id2';

$result = $uRLShortenerController->domainDeleteLinks($domainId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`DomainsLinks0Error1Exception`](../../doc/models/domains-links-0-error-1-exception.md) |


# Links List

Retrieves a list of shortened links. The list is sorted by  creation date, with the most recently created appearing first.

```php
function linksList(
    ?int $limit = 10,
    ?int $offset = 0,
    ?array $mInclude = null,
    ?array $dateCreated = null,
    ?array $metadata = null,
    ?string $campaignId = null,
    ?bool $clicked = null,
    ?string $billingGroupId = null
): LinksResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `offset` | `?int` | Query, Optional | An integer that designates the offset at which to begin returning results. Defaults to 0. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `dateCreated` | `?array<string,string>` | Query, Optional | Filter by date created. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `metadata` | `?array<string,string>` | Query, Optional | Filter by metadata key-value pair`. |
| `campaignId` | `?string` | Query, Optional | Filter the links generated for a particular campaign using its campaign id. |
| `clicked` | `?bool` | Query, Optional | Retrieve the list of links that have been opened. |
| `billingGroupId` | `?string` | Query, Optional | Filter the links generated for a particular billing group id. |

## Response Type

[`LinksResponse`](../../doc/models/links-response.md)

## Example Usage

```php
$limit = 10;

$offset = 0;

$result = $uRLShortenerController->linksList(
    $limit,
    $offset
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Links0Error1Exception`](../../doc/models/links-0-error-1-exception.md) |


# Links Get

Retrievs a single shortened link.

```php
function linksGet(string $linkId): LinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `linkId` | `string` | Template, Required | Unique identifier for a link. |

## Response Type

[`LinkResponse`](../../doc/models/link-response.md)

## Example Usage

```php
$linkId = 'link_id0';

$result = $uRLShortenerController->linksGet($linkId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Links0Error1Exception`](../../doc/models/links-0-error-1-exception.md) |


# Link Update

Update any of the properties of a shortened link.

```php
function linkUpdate(
    string $linkId,
    string $contentType,
    string $redirectLink,
    ?string $domain = null,
    ?string $slug = null,
    ?array $metadataTag = null,
    ?string $billingGroupId = null
): LinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `linkId` | `string` | Template, Required | Unique identifier for a link. |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `redirectLink` | `string` | Form, Required | The original target URL. |
| `domain` | `?string` | Form, Optional | The registered domain to be used for the short URL. |
| `slug` | `?string` | Form, Optional | The unique path for the shortened URL, if empty a unique path will be used. |
| `metadataTag` | `?array<string,string>` | Form, Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. |
| `billingGroupId` | `?string` | Form, Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. |

## Response Type

[`LinkResponse`](../../doc/models/link-response.md)

## Example Usage

```php
$linkId = 'link_id0';

$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$redirectLink = 'redirect_link0';

$result = $uRLShortenerController->linkUpdate(
    $linkId,
    $contentType,
    $redirectLink
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Links Delete

Delete the shortened link.

```php
function linksDelete(string $linkId): LinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `linkId` | `string` | Template, Required | Unique identifier for a link. |

## Response Type

[`LinkResponse`](../../doc/models/link-response.md)

## Example Usage

```php
$linkId = 'link_id0';

$result = $uRLShortenerController->linksDelete($linkId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Links0Error1Exception`](../../doc/models/links-0-error-1-exception.md) |


# Link Create

Given a long URL, shorten your URL either by using a custom domain or Lob's own short domain.

```php
function linkCreate(
    string $contentType,
    string $redirectLink,
    ?string $domain = null,
    ?string $slug = null,
    ?array $metadataTag = null,
    ?string $billingGroupId = null
): LinkResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `contentType` | [`string(ContentTypeEnum)`](../../doc/models/content-type-enum.md) | Header, Required | - |
| `redirectLink` | `string` | Form, Required | The original target URL. |
| `domain` | `?string` | Form, Optional | The registered domain to be used for the short URL. |
| `slug` | `?string` | Form, Optional | The unique path for the shortened URL, if empty a unique path will be used. |
| `metadataTag` | `?array<string,string>` | Form, Optional | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" : "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. |
| `billingGroupId` | `?string` | Form, Optional | An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more information. |

## Response Type

[`LinkResponse`](../../doc/models/link-response.md)

## Example Usage

```php
$contentType = ContentTypeEnum::ENUM_APPLICATIONXWWWFORMURLENCODED;

$redirectLink = 'redirect_link0';

$result = $uRLShortenerController->linkCreate(
    $contentType,
    $redirectLink
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Link Bulk Create

Shortens a list of links in a single request.

```php
function linkBulkCreate(array $body): LinksResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`LinkSingle[]`](../../doc/models/link-single.md) | Body, Required | - |

## Response Type

[`LinksResponse`](../../doc/models/links-response.md)

## Example Usage

```php
$body = [
    LinkSingleBuilder::init(
        'redirect_link6'
    )->build()
];

$result = $uRLShortenerController->linkBulkCreate($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

