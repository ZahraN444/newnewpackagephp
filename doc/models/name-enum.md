
# Name Enum

Name of tracking event (for normal postcards, self mailers, letters, and checks):

* `Mailed` - The mailpiece has been handed off to and accepted by USPS
  and is en route. <a href="https://help.lob.com/print-and-mail/getting-data-and-results/tracking-your-mail#mailed-tracking-events-4" target="_blank">More about
  Mailed.</a>
  Note this data is only available in Enterprise editions of
  Lob. <a href="https://lob.com/support/contact#contact" target="_blank">Contact Sales</a> if
  you want access to this feature.

* `In Transit` - The mailpiece is being processed at the entry/origin facility.

* `In Local Area` - The mailpiece is being processed at the destination facility.

* `Processed for Delivery` - The mailpiece has been greenlit for
  delivery at the recipient's nearest postal facility. The mailpiece
  should reach the mailbox within 1 business day of this tracking
  event.

* `Delivered` - The mail piece has been delivered to
  the recipient’s address. The final scan is generated when the mail
  carrier's GPS unit leaves the delivery area.

* `Re-Routed` - The mailpiece is re-routed due to recipient change of
  address, address errors, or USPS relabeling of barcode/ID tag
  area.

* `Returned to Sender` - The mailpiece is being returned to sender due
  to barcode, ID tag area, or address errors.

* `International Exit` - The mail piece has been processed to
  ship to a destination abroad. This is typically the last
  scan a US-originated international mail piece will receive
  from the USPS.

<a href="https://help.lob.com/print-and-mail/getting-data-and-results/tracking-your-mail#mailed-tracking-events-4" target="_blank">More about tracking</a>

## Enumeration

`NameEnum`

## Fields

| Name |
|  --- |
| `MAILED` |
| `ENUM_IN_TRANSIT` |
| `ENUM_IN_LOCAL_AREA` |
| `ENUM_PROCESSED_FOR_DELIVERY` |
| `DELIVERED` |
| `REROUTED` |
| `ENUM_RETURNED_TO_SENDER` |
| `ENUM_INTERNATIONAL_EXIT` |

