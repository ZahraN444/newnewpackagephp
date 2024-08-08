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
 * Result of Delivery Point Validation (DPV), which determines whether or not the address is
 * deliverable by the USPS. Possible values are:
 * * `Y` –– The address is deliverable by the USPS.
 * * `S` –– The address is deliverable by removing the provided secondary unit designator. This
 * information may be incorrect or unnecessary.
 * * `D` –– The address is deliverable to the building's default address but is missing a secondary
 * unit designator and/or number.
 * There is a chance the mail will not reach the intended recipient.
 * * `N` –– The address is not deliverable according to the USPS, but parts of the address are valid
 * (such as the street and ZIP code).
 * * `''` –– This address is not deliverable. No matching street could be found within the city or ZIP
 * code.
 */
class DpvConfirmationEnum
{
    public const Y = 'Y';

    public const S = 'S';

    public const D = 'D';

    public const N = 'N';

    private const _ALL_VALUES = [self::Y, self::S, self::D, self::N];

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
        throw new Exception("$value is invalid for DpvConfirmationEnum.");
    }
}
