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
 * Find the full table [here](#tag/Tracking-Events). A detailed substatus about the event:
 * * `package_accepted` - Package has been accepted into the carrier network for delivery.
 * * `package_arrived` - Package has arrived at an intermediate location in the carrier network.
 * * `package_departed` - Package has departed from an intermediate location in the carrier network.
 * * `package_processing` - Package is processing at an intermediate location in the carrier network.
 * * `package_processed` - Package has been processed at an intermediate location.
 * * `package_in_local_area` - Package is at a location near the end destination.
 * * `delivery_scheduled` - Package is scheduled for delivery.
 * * `out_for_delivery` - Package is out for delivery.
 * * `pickup_available` - Package is available for pickup at carrier location.
 * * `delivered` - Package has been delivered.
 * * `package_forwarded` - Package has been forwarded.
 * * `returned_to_sender` - Package is to be returned to sender.
 * * `address_issue` - Address information is incorrect. Contact carrier to ensure delivery.
 * * `contact_carrier` - Contact the carrier for more information.
 * * `delayed` - Delivery of package is delayed.
 * * `delivery_attempted` - Delivery of package has been attempted. Contact carrier to ensure delivery.
 * * `delivery_rescheduled` - Delivery of package has been rescheduled.
 * * `location_inaccessible` - Delivery location inaccessible to carrier. Contact carrier to ensure
 * delivery.
 * * `notice_left` - Carrier left notice during attempted delivery. Follow carrier instructions on
 * notice.
 * * `package_damaged` - Package has been damaged. Contact carrier for more details.
 * * `package_disposed` - Package has been disposed.
 * * `package_held` - Package held at carrier location. Contact carrier for more details.
 * * `package_lost` - Package has been lost. Contact carrier for more details.
 * * `package_unclaimed` - Package is unclaimed.
 * * `package_undeliverable` - Package is not able to be delivered.
 * * `reschedule_delivery` - Contact carrier to reschedule delivery.
 * * `other` - Unrecognized carrier status.
 */
class EventEnum
{
    public const PACKAGE_ACCEPTED = 'package_accepted';

    public const PACKAGE_ARRIVED = 'package_arrived';

    public const PACKAGE_DEPARTED = 'package_departed';

    public const PACKAGE_PROCESSING = 'package_processing';

    public const PACKAGE_PROCESSED = 'package_processed';

    public const PACKAGE_IN_LOCAL_AREA = 'package_in_local_area';

    public const DELIVERY_SCHEDULED = 'delivery_scheduled';

    public const OUT_FOR_DELIVERY = 'out_for_delivery';

    public const PICKUP_AVAILABLE = 'pickup_available';

    public const DELIVERED = 'delivered';

    public const PACKAGE_FORWARDED = 'package_forwarded';

    public const RETURNED_TO_SENDER = 'returned_to_sender';

    public const ADDRESS_ISSUE = 'address_issue';

    public const CONTACT_CARRIER = 'contact_carrier';

    public const DELAYED = 'delayed';

    public const DELIVERY_ATTEMPTED = 'delivery_attempted';

    public const DELIVERY_RESCHEDULED = 'delivery_rescheduled';

    public const LOCATION_INACCESSIBLE = 'location_inaccessible';

    public const NOTICE_LEFT = 'notice_left';

    public const PACKAGE_DAMAGED = 'package_damaged';

    public const PACKAGE_DISPOSED = 'package_disposed';

    public const PACKAGE_HELD = 'package_held';

    public const PACKAGE_LOST = 'package_lost';

    public const PACKAGE_UNCLAIMED = 'package_unclaimed';

    public const PACKAGE_UNDELIVERABLE = 'package_undeliverable';

    public const RESCHEDULE_DELIVERY = 'reschedule_delivery';

    public const OTHER = 'other';

    private const _ALL_VALUES = [
        self::PACKAGE_ACCEPTED,
        self::PACKAGE_ARRIVED,
        self::PACKAGE_DEPARTED,
        self::PACKAGE_PROCESSING,
        self::PACKAGE_PROCESSED,
        self::PACKAGE_IN_LOCAL_AREA,
        self::DELIVERY_SCHEDULED,
        self::OUT_FOR_DELIVERY,
        self::PICKUP_AVAILABLE,
        self::DELIVERED,
        self::PACKAGE_FORWARDED,
        self::RETURNED_TO_SENDER,
        self::ADDRESS_ISSUE,
        self::CONTACT_CARRIER,
        self::DELAYED,
        self::DELIVERY_ATTEMPTED,
        self::DELIVERY_RESCHEDULED,
        self::LOCATION_INACCESSIBLE,
        self::NOTICE_LEFT,
        self::PACKAGE_DAMAGED,
        self::PACKAGE_DISPOSED,
        self::PACKAGE_HELD,
        self::PACKAGE_LOST,
        self::PACKAGE_UNCLAIMED,
        self::PACKAGE_UNDELIVERABLE,
        self::RESCHEDULE_DELIVERY,
        self::OTHER
    ];

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
        throw new Exception("$value is invalid for EventEnum.");
    }
}
