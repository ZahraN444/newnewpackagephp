
# Event Type

## Structure

`EventType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | string([PostcardTypesEnum](../../doc/models/postcard-types-enum.md))\|string([SelfMailerTypesEnum](../../doc/models/self-mailer-types-enum.md))\|string([LetterTypesEnum](../../doc/models/letter-types-enum.md))\|string([CheckTypesEnum](../../doc/models/check-types-enum.md))\|string([AddressTypesEnum](../../doc/models/address-types-enum.md))\|string([BankAccountTypesEnum](../../doc/models/bank-account-types-enum.md)) | Required | This is a container for one-of cases. | getId(): string | setId(string id): void |
| `enabledForTest` | `bool` | Required | Value is `true` if the event type is enabled in both the test and live environments and `false` if it is only enabled in the live environment. | getEnabledForTest(): bool | setEnabledForTest(bool enabledForTest): void |
| `resource` | [`string(ResourceEnum)`](../../doc/models/resource-enum.md) | Required | - | getResource(): string | setResource(string resource): void |
| `object` | `string` | Required, Constant | Value is resource type.<br>**Default**: `'event_type'` | getObject(): string | setObject(string object): void |

## Example (as JSON)

```json
{
  "id": "postcard.international_exit",
  "enabled_for_test": false,
  "resource": "addresses",
  "object": "event_type"
}
```

