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
 * The check template used for printing. The defualt value is `common`. If you bank with JP Morgan
 * Chase and wish to use Positive Pay use the `jpm` template. `jpm` requires additional information to
 * be provided.
 */
class CheckTemplateEnum
{
    public const COMMON = 'common';

    public const JPM = 'jpm';

    private const _ALL_VALUES = [self::COMMON, self::JPM];

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
        throw new Exception("$value is invalid for CheckTemplateEnum.");
    }
}
