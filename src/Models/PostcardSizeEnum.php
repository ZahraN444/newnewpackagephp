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
 * Specifies the size of the postcard. Only `4x6` postcards can be sent to international destinations.
 */
class PostcardSizeEnum
{
    public const ENUM_4X6 = '4x6';

    public const ENUM_6X9 = '6x9';

    public const ENUM_6X11 = '6x11';

    private const _ALL_VALUES = [self::ENUM_4X6, self::ENUM_6X9, self::ENUM_6X11];

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
        throw new Exception("$value is invalid for PostcardSizeEnum.");
    }
}
