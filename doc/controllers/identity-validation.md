# Identity Validation

```php
$identityValidationController = $client->getIdentityValidationController();
```

## Class Name

`IdentityValidationController`


# Identity Validation

Validates whether a given name is associated with an address.

```php
function identityValidation(array $body)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`array`](../../doc/models/object-enum.md) | Body, Required | - |

## Response Type

[RecipientValidation](../../doc/models/recipient-validation.md)|[CompanyValidation](../../doc/models/company-validation.md)

## Example Usage

```php
$body = ApiHelper::deserialize('{"recipient":"Larry Lobster","primary_line":"210 King St.","secondary_line":"","city":"San Francisco","state":"CA","zip_code":"94107"}');

$result = $identityValidationController->identityValidation($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error | [`Domains0Error1Exception`](../../doc/models/domains-0-error-1-exception.md) |

