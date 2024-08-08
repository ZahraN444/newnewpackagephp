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
 * Specifies the location of the address information that will show through the double-window envelope.
 * To see how this will impact your letter design, view our letter template.
 * Some values are exclusive to certain customers. Upgrade to the appropriate <a href="https:
 * //dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a> to gain access.
 * * `top_first_page` - (default) print address information at the top of your provided first page
 * * `insert_blank_page` - insert a blank address page at the beginning of your file (you will be
 * charged for the extra page)
 * * `bottom_first_page_center` - **(exclusive, deprecation planned within a few months)** print
 * address information at the bottom center of your provided first page
 * * `bottom_first_page` - **(exclusive)** print address information at the bottom of your provided
 * first page
 */
class AddressPlacementEnum
{
    public const TOP_FIRST_PAGE = 'top_first_page';

    public const INSERT_BLANK_PAGE = 'insert_blank_page';

    public const BOTTOM_FIRST_PAGE_CENTER = 'bottom_first_page_center';

    public const BOTTOM_FIRST_PAGE = 'bottom_first_page';

    private const _ALL_VALUES =
        [self::TOP_FIRST_PAGE, self::INSERT_BLANK_PAGE, self::BOTTOM_FIRST_PAGE_CENTER, self::BOTTOM_FIRST_PAGE];

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
        throw new Exception("$value is invalid for AddressPlacementEnum.");
    }
}
