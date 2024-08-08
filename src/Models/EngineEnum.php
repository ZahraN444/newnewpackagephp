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
 * The engine used to combine HTML template with merge variables.
 * * `legacy` - Lob's original engine
 * * `handlebars`
 */
class EngineEnum
{
    public const LEGACY = 'legacy';

    public const HANDLEBARS = 'handlebars';

    private const _ALL_VALUES = [self::LEGACY, self::HANDLEBARS];

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
        throw new Exception("$value is invalid for EngineEnum.");
    }
}
