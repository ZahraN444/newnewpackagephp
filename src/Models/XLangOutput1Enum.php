<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * * `native` - Translate response to the native language of the country in the request
 * * `match` - match the response to the language in the request
 *
 * Default response is in English.
 */
class XLangOutput1Enum
{
    public const NATIVE = 'native';

    public const MATCH = 'match';

    private const _ALL_VALUES = [self::NATIVE, self::MATCH];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for XLangOutput1Enum.");
    }
}
