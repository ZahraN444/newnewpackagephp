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
 * Indicates the likelihood the recipient name and address match based on our custom internal
 * calculation. Possible values are:
 * - `high` — Has a Lob confidence score greater than 70.
 * - `medium` — Has a Lob confidence score between 40 and 70.
 * - `low` — Has a Lob confidence score less than 40.
 * - `""` — No tracking data exists for this address.
 */
class ConfidenceEnum
{
    public const HIGH = 'high';

    public const MEDIUM = 'medium';

    public const LOW = 'low';

    private const _ALL_VALUES = [self::HIGH, self::MEDIUM, self::LOW];

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
        throw new Exception("$value is invalid for ConfidenceEnum.");
    }
}
