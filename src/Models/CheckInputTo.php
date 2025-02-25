<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use LobLib\ApiHelper;
use stdClass;

class CheckInputTo implements \JsonSerializable
{
    /**
     * @var string|Addressobjwithnamedefined|Addressobjwithcompanydefined|null
     */
    private $to;

    /**
     * Returns To.
     * Must either be an address ID or an inline object with correct address parameters. Checks cannot be
     * sent internationally (`address_country` must be `US`). The total string of the sum of
     * `address_line1` and `address_line2` must be no longer than 50 characters combined. If an object is
     * used, an address will be created, corrected, and standardized for free whenever possible using our
     * US Address Verification engine, and returned back with an ID. Depending on your <a href="https:
     * //dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a>, addresses may
     * also be run through [National Change of Address (NCOALink)](#tag/National-Change-of-Address). If an
     * address used does not meet your account’s <a href="https://dashboard.lob.com/#/settings/account"
     * target="_blank">US Mail Strictness Setting</a>, the request will fail. <a href="https://help.lob.
     * com/print-and-mail/all-about-addresses" target="_blank">More about verification of mailing
     * addresses</a>
     *
     * @return string|Addressobjwithnamedefined|Addressobjwithcompanydefined|null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Must either be an address ID or an inline object with correct address parameters. Checks cannot be
     * sent internationally (`address_country` must be `US`). The total string of the sum of
     * `address_line1` and `address_line2` must be no longer than 50 characters combined. If an object is
     * used, an address will be created, corrected, and standardized for free whenever possible using our
     * US Address Verification engine, and returned back with an ID. Depending on your <a href="https:
     * //dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail Edition</a>, addresses may
     * also be run through [National Change of Address (NCOALink)](#tag/National-Change-of-Address). If an
     * address used does not meet your account’s <a href="https://dashboard.lob.com/#/settings/account"
     * target="_blank">US Mail Strictness Setting</a>, the request will fail. <a href="https://help.lob.
     * com/print-and-mail/all-about-addresses" target="_blank">More about verification of mailing
     * addresses</a>
     *
     * @maps to
     * @mapsBy anyOf(oneOf(string,anyOf(Addressobjwithnamedefined,Addressobjwithcompanydefined)),null)
     *
     * @param string|Addressobjwithnamedefined|Addressobjwithcompanydefined|null $to
     */
    public function setTo($to): void
    {
        $this->to = $to;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->to)) {
            $json['to'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->to,
                    'anyOf(oneOf(string,anyOf(Addressobjwithnamedefined,Addressobjwithcompanydefined)' .
                    '),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
