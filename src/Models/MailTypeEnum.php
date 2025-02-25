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
 * A string designating the mail postage type:
 * * `usps_first_class` - (default)
 * * `usps_standard` - a <a href="https://lob.com/pricing/print-mail#compare" target="_blank">cheaper
 * option</a> which is
 * less predictable and takes longer to deliver. `usps_standard` cannot be used with `4x6`
 * postcards or for any postcards sent outside of the United States.
 */
class MailTypeEnum
{
    public const USPS_FIRST_CLASS = 'usps_first_class';

    public const USPS_STANDARD = 'usps_standard';

    private const _ALL_VALUES = [self::USPS_FIRST_CLASS, self::USPS_STANDARD];

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
        throw new Exception("$value is invalid for MailTypeEnum.");
    }
}
