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
 * Indicates the likelihood that the address is a valid, mail-receiving address. Possible values are:
 * - `high` — Over 70% of mailpieces Lob has sent to this address were delivered successfully and
 * recent mailings were also successful.
 * - `medium` — Between 40% and 70% of mailpieces Lob has sent to this address were delivered
 * successfully.
 * - `low` — Less than 40% of mailpieces Lob has sent to this address were delivered successfully and
 * recent mailings weren't successful.
 * - `""` — No tracking data exists for this address or lob deliverability was unable to find a
 * corresponding level of mail success.
 */
class LevelEnum
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
        throw new Exception("$value is invalid for LevelEnum.");
    }
}
