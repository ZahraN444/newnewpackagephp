
# Event Enum

Find the full table [here](#tag/Tracking-Events). A detailed substatus about the event:

* `package_accepted` - Package has been accepted into the carrier network for delivery.
* `package_arrived` - Package has arrived at an intermediate location in the carrier network.
* `package_departed` - Package has departed from an intermediate location in the carrier network.
* `package_processing` - Package is processing at an intermediate location in the carrier network.
* `package_processed` - Package has been processed at an intermediate location.
* `package_in_local_area` - Package is at a location near the end destination.
* `delivery_scheduled` - Package is scheduled for delivery.
* `out_for_delivery` - Package is out for delivery.
* `pickup_available` - Package is available for pickup at carrier location.
* `delivered` - Package has been delivered.
* `package_forwarded` - Package has been forwarded.
* `returned_to_sender` - Package is to be returned to sender.
* `address_issue` - Address information is incorrect. Contact carrier to ensure delivery.
* `contact_carrier` - Contact the carrier for more information.
* `delayed` - Delivery of package is delayed.
* `delivery_attempted` - Delivery of package has been attempted. Contact carrier to ensure delivery.
* `delivery_rescheduled` - Delivery of package has been rescheduled.
* `location_inaccessible` - Delivery location inaccessible to carrier. Contact carrier to ensure delivery.
* `notice_left` - Carrier left notice during attempted delivery. Follow carrier instructions on notice.
* `package_damaged` - Package has been damaged. Contact carrier for more details.
* `package_disposed` - Package has been disposed.
* `package_held` - Package held at carrier location. Contact carrier for more details.
* `package_lost` - Package has been lost. Contact carrier for more details.
* `package_unclaimed` - Package is unclaimed.
* `package_undeliverable` - Package is not able to be delivered.
* `reschedule_delivery` - Contact carrier to reschedule delivery.
* `other` - Unrecognized carrier status.

## Enumeration

`EventEnum`

## Fields

| Name |
|  --- |
| `PACKAGE_ACCEPTED` |
| `PACKAGE_ARRIVED` |
| `PACKAGE_DEPARTED` |
| `PACKAGE_PROCESSING` |
| `PACKAGE_PROCESSED` |
| `PACKAGE_IN_LOCAL_AREA` |
| `DELIVERY_SCHEDULED` |
| `OUT_FOR_DELIVERY` |
| `PICKUP_AVAILABLE` |
| `DELIVERED` |
| `PACKAGE_FORWARDED` |
| `RETURNED_TO_SENDER` |
| `ADDRESS_ISSUE` |
| `CONTACT_CARRIER` |
| `DELAYED` |
| `DELIVERY_ATTEMPTED` |
| `DELIVERY_RESCHEDULED` |
| `LOCATION_INACCESSIBLE` |
| `NOTICE_LEFT` |
| `PACKAGE_DAMAGED` |
| `PACKAGE_DISPOSED` |
| `PACKAGE_HELD` |
| `PACKAGE_LOST` |
| `PACKAGE_UNCLAIMED` |
| `PACKAGE_UNDELIVERABLE` |
| `RESCHEDULE_DELIVERY` |
| `OTHER` |

