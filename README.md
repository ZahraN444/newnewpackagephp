
# Getting Started with Lob

## Introduction

The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p>

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "apimatic/my-package-sdkwewe:4.5.5"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "apimatic/my-package-sdkwewe": "4.5.5"
}
```

You can also view the package at:
https://packagist.org/packages/apimatic/my-package-sdkwewe#4.5.5

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthCredentials` | [`BasicAuthCredentials`]($basicauth) | The Credentials Setter for Basic Authentication |

The API client can be initialized as follows:

```php
$client = LobClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'BasicAuthUserName',
            'BasicAuthPassword'
        )
    )
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`basicAuth (Basic Authentication)`](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/$basicauth)

## List of APIs

* [Bank Accounts](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/bank-accounts.md)
* [Billing Groups](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/billing-groups.md)
* [Buckslip Orders](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/buckslip-orders.md)
* [Card Orders](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/card-orders.md)
* [Identity Validation](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/identity-validation.md)
* [Intl Autocompletions](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/intl-autocompletions.md)
* [Intl Verifications](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/intl-verifications.md)
* [QR Codes](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/qr-codes.md)
* [Reverse Geocode Lookups](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/reverse-geocode-lookups.md)
* [Self Mailers](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/self-mailers.md)
* [Template Versions](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/template-versions.md)
* [URL Shortener](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/url-shortener.md)
* [US Autocompletions](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/us-autocompletions.md)
* [US Verifications](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/us-verifications.md)
* [Zip Lookups](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/zip-lookups.md)
* [Addresses](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/addresses.md)
* [Buckslips](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/buckslips.md)
* [Campaigns](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/campaigns.md)
* [Cards](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/cards.md)
* [Checks](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/checks.md)
* [Creatives](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/creatives.md)
* [Letters](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/letters.md)
* [Postcards](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/postcards.md)
* [Templates](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/templates.md)
* [Uploads](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/controllers/uploads.md)

## Classes Documentation

* [Utility Classes](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/utility-classes.md)
* [ApiException](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/api-exception.md)
* [HttpRequest](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/http-request.md)
* [HttpResponse](https://www.github.com/ZahraN444/newnewpackagephp/tree/4.5.5/doc/http-response.md)

