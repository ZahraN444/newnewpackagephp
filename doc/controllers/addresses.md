# Addresses

To add an address to your address book, you create a new address object. You can retrieve and delete individual
addresses as well as get a list of addresses. Addresses are identified by a unique random ID.

<div class="back-to-top" ><a href="#" onclick="toTopLink()">back to top</a></div>


```php
$addressesController = $client->getAddressesController();
```

## Class Name

`AddressesController`

## Methods

* [Addresses List](../../doc/controllers/addresses.md#addresses-list)
* [Address Create](../../doc/controllers/addresses.md#address-create)
* [Address Retrieve](../../doc/controllers/addresses.md#address-retrieve)
* [Address Delete](../../doc/controllers/addresses.md#address-delete)


# Addresses List

Returns a list of your addresses. The addresses are returned sorted by creation date, with the most recently created addresses appearing first.

```php
function addressesList(
    ?int $limit = 10,
    ?Beforeafter $beforeAfter = null,
    ?array $mInclude = null,
    ?array $dateCreated = null,
    ?array $metadata = null
): AllAddresses
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | How many results to return. |
| `beforeAfter` | [`?Beforeafter`](../../doc/models/beforeafter.md) | Query, Optional | `before` and `after` are both optional but only one of them can be in the query at a time. |
| `mInclude` | `?(string[])` | Query, Optional | Request that the response include the total count by specifying `include=["total_count"]`. |
| `dateCreated` | `?array<string,string>` | Query, Optional | Filter by date created. Accepted formats are ISO-8601 date or datetime, e.g. `{ "gt": "2012-01-01", "lt": "2012-01-31T12:34:56Z" }` where `gt` is >, `lt` is <, `gte` is ≥, and `lte` is ≤. |
| `metadata` | `?array<string,string>` | Query, Optional | Filter by metadata key-value pair`. |

## Response Type

[`AllAddresses`](../../doc/models/all-addresses.md)

## Example Usage

```php
$limit = 10;

$result = $addressesController->addressesList($limit);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "id": "adr_e68217bd744d65c8",
      "description": "Harry - Office",
      "name": "HARRY ZHANG",
      "company": "LOB",
      "phone": "5555555555",
      "email": "harry@lob.com",
      "address_line1": "210 KING ST STE 6100",
      "address_line2": null,
      "address_city": "SAN FRANCISCO",
      "address_state": "CA",
      "address_zip": "94107-1741",
      "address_country": "UNITED STATES",
      "metadata": {},
      "date_created": "2019-08-12T00:16:00.361Z",
      "date_modified": "2019-08-12T00:16:00.361Z",
      "object": "address"
    },
    {
      "id": "adr_asdi2y3riuasasoi",
      "description": "Harry - Office",
      "name": "Harry Zhang",
      "company": "Lob",
      "phone": "5555555555",
      "email": "harry@lob.com",
      "metadata": {},
      "address_line1": "370 WATER ST",
      "address_line2": "",
      "address_city": "SUMMERSIDE",
      "address_state": "PRINCE EDWARD ISLAND",
      "address_zip": "C1N 1C4",
      "address_country": "CANADA",
      "date_created": "2019-09-20T00:14:00.361Z",
      "date_modified": "2019-09-20T00:14:00.361Z",
      "object": "address"
    }
  ],
  "object": "list",
  "next_url": "https://api.lob.com/v1/addresses?limit=2&after=eyJkYXRlT2Zmc2V0IjoiMjAxOS0wOC0wN1QyMTo1OTo0Ni43NjRaIiwiaWRPZmZzZXQiOiJhZHJfODMwYmYwZWFiZGFhYTQwOSJ9",
  "previous_url": null,
  "count": 2
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Address Create

Creates a new address given information

```php
function addressCreate(array $body): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`array`](../../doc/models/object-enum.md) | Body, Required | - |

## Response Type

`array`

## Example Usage

```php
$body = ApiHelper::deserialize('{"description":"Harry - Office","name":"Harry Zhang","company":"Lob","email":"harry@lob.com","phone":"5555555555","address_line1":"210 King St","address_line2":"# 6100","address_city":"San Francisco","address_state":"CA","address_zip":"94107","address_country":"US"}');

$result = $addressesController->addressCreate($body);
```

## Example Response

```
{
  "id": "adr_d3489cd64c791ab5",
  "description": "Harry - Office",
  "name": "HARRY ZHANG",
  "company": "LOB",
  "phone": "5555555555",
  "email": "harry@lob.com",
  "address_line1": "210 KING ST STE 6100",
  "address_city": "SAN FRANCISCO",
  "address_state": "CA",
  "address_zip": "94107",
  "address_country": "UNITED STATES",
  "metadata": {},
  "date_created": "2017-09-05T17:47:53.767Z",
  "date_modified": "2017-09-05T17:47:53.767Z",
  "object": "address"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Address Retrieve

Retrieves the details of an existing address. You need only supply the unique identifier that was returned upon address creation.

```php
function addressRetrieve(string $adrId)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `adrId` | `string` | Template, Required | id of the address |

## Response Type

[AddressUs](../../doc/models/address-us.md)|[AddressIntl](../../doc/models/address-intl.md)

## Example Usage

```php
$adrId = 'adr_id6';

$result = $addressesController->addressRetrieve($adrId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |


# Address Delete

Deletes the details of an existing address. You need only supply the unique identifier that was returned upon address creation.

```php
function addressDelete(string $adrId): AddressesResponse1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `adrId` | `string` | Template, Required | id of the address |

## Response Type

[`AddressesResponse1`](../../doc/models/addresses-response-1.md)

## Example Usage

```php
$adrId = 'adr_id6';

$result = $addressesController->addressDelete($adrId);
```

## Example Response *(as JSON)*

```json
{
  "id": "adr_123456789",
  "deleted": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

