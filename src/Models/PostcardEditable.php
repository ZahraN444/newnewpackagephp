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

class PostcardEditable implements \JsonSerializable
{
    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $mailType;

    /**
     * @var array
     */
    private $mergeVariables = [];

    /**
     * @var array|null
     */
    private $sendDate;

    /**
     * @var string|null
     */
    private $size;

    /**
     * @var string|InlineAddressUs|InlineAddressIntl
     */
    private $to;

    /**
     * @var string|InlineAddressUs|null
     */
    private $from;

    /**
     * @var array
     */
    private $front;

    /**
     * @var array
     */
    private $back;

    /**
     * @var string|null
     */
    private $billingGroupId;

    /**
     * @var QrCode4|null
     */
    private $qrCode;

    /**
     * @var array
     */
    private $useType;

    /**
     * @param string|InlineAddressUs|InlineAddressIntl $to
     * @param array $front
     * @param array $back
     * @param array $useType
     */
    public function __construct($to, array $front, array $back, array $useType)
    {
        $this->to = $to;
        $this->front = $front;
        $this->back = $back;
        $this->useType = $useType;
    }

    /**
     * Returns Description.
     * An internal description that identifies this resource. Must be no longer than 255 characters.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * An internal description that identifies this resource. Must be no longer than 255 characters.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * An internal description that identifies this resource. Must be no longer than 255 characters.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Metadata.
     * Use metadata to store custom information for tagging and labeling back to your internal systems.
     * Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must
     * be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" :
     * "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more
     * information.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Use metadata to store custom information for tagging and labeling back to your internal systems.
     * Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must
     * be at most 500 characters. Neither can contain the characters `"` and `\`. i.e. '{"customer_id" :
     * "NEWYORK2015"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more
     * information.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Mail Type.
     */
    public function getMailType(): ?string
    {
        return $this->mailType;
    }

    /**
     * Sets Mail Type.
     *
     * @maps mail_type
     * @factory \LobLib\Models\MailTypeEnum::checkValue
     */
    public function setMailType(?string $mailType): void
    {
        $this->mailType = $mailType;
    }

    /**
     * Returns Merge Variables.
     * You can input a merge variable payload object to your template to render dynamic content. For
     * example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to
     * render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the
     * object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`.
     * The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it
     * can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of
     * the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`,
     * `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `` ` ``, `{`, `|`, `}`, `~`. More instructions can be found
     * in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-
     * personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge
     * variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account"
     * target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do
     * not pass them here, you will either receive an error or the variable will render as an empty string.
     */
    public function getMergeVariables(): ?array
    {
        if (count($this->mergeVariables) == 0) {
            return null;
        }
        return $this->mergeVariables['value'];
    }

    /**
     * Sets Merge Variables.
     * You can input a merge variable payload object to your template to render dynamic content. For
     * example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to
     * render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the
     * object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`.
     * The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it
     * can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of
     * the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`,
     * `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `` ` ``, `{`, `|`, `}`, `~`. More instructions can be found
     * in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-
     * personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge
     * variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account"
     * target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do
     * not pass them here, you will either receive an error or the variable will render as an empty string.
     *
     * @maps merge_variables
     */
    public function setMergeVariables(?array $mergeVariables): void
    {
        $this->mergeVariables['value'] = $mergeVariables;
    }

    /**
     * Unsets Merge Variables.
     * You can input a merge variable payload object to your template to render dynamic content. For
     * example, if you have a template like: `{{variable_name}}`, pass in `{"variable_name": "Harry"}` to
     * render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the
     * object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`.
     * The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it
     * can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of
     * the following special characters: `!`, `"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`,
     * `<`, `=`, `>`, `@`, `[`, `\`, `]`, `^`, `` ` ``, `{`, `|`, `}`, `~`. More instructions can be found
     * in <a href="https://help.lob.com/print-and-mail/designing-mail-creatives/dynamic-
     * personalization#using-html-and-merge-variables-10" target="_blank">our guide to using html and merge
     * variables</a>. Depending on your <a href="https://dashboard.lob.com/#/settings/account"
     * target="_blank">Merge Variable strictness</a> setting, if you define variables in your HTML but do
     * not pass them here, you will either receive an error or the variable will render as an empty string.
     */
    public function unsetMergeVariables(): void
    {
        $this->mergeVariables = [];
    }

    /**
     * Returns Send Date.
     */
    public function getSendDate(): ?array
    {
        return $this->sendDate;
    }

    /**
     * Sets Send Date.
     *
     * @maps send_date
     */
    public function setSendDate(?array $sendDate): void
    {
        $this->sendDate = $sendDate;
    }

    /**
     * Returns Size.
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * Sets Size.
     *
     * @maps size
     * @factory \LobLib\Models\PostcardSizeEnum::checkValue
     */
    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    /**
     * Returns To.
     * Must either be an address ID or an inline object with correct address parameters. If an object is
     * used, an address will be created, corrected, and standardized for free whenever possible using our
     * US Address Verification engine (if it is a US address), and returned back with an ID. Depending on
     * your <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail
     * Edition</a>, US addresses may also be run through <a href="#tag/National-Change-of-Address">National
     * Change of Address Linkage(NCOALink)</a>. Non-US addresses will be standardized into uppercase only.
     * If a US address used does not meet your account’s <a href="https://dashboard.lob.
     * com/#/settings/account" target="_blank">US Mail strictness setting</a>, the request will fail. <a
     * href="https://help.lob.com/print-and-mail/all-about-addresses" target="_blank">Lob Guide:
     * Verification of Mailing Addresses</a>
     *
     * @return string|InlineAddressUs|InlineAddressIntl
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Must either be an address ID or an inline object with correct address parameters. If an object is
     * used, an address will be created, corrected, and standardized for free whenever possible using our
     * US Address Verification engine (if it is a US address), and returned back with an ID. Depending on
     * your <a href="https://dashboard.lob.com/#/settings/editions" target="_blank">Print & Mail
     * Edition</a>, US addresses may also be run through <a href="#tag/National-Change-of-Address">National
     * Change of Address Linkage(NCOALink)</a>. Non-US addresses will be standardized into uppercase only.
     * If a US address used does not meet your account’s <a href="https://dashboard.lob.
     * com/#/settings/account" target="_blank">US Mail strictness setting</a>, the request will fail. <a
     * href="https://help.lob.com/print-and-mail/all-about-addresses" target="_blank">Lob Guide:
     * Verification of Mailing Addresses</a>
     *
     * @required
     * @maps to
     * @mapsBy oneOf(string,oneOf(InlineAddressUs,InlineAddressIntl))
     *
     * @param string|InlineAddressUs|InlineAddressIntl $to
     */
    public function setTo($to): void
    {
        $this->to = $to;
    }

    /**
     * Returns From.
     * *Required* if `to` address is international. Must either be an address ID or an inline object with
     * correct address parameters. Must either be an address ID or an inline object with correct address
     * parameters. All addresses will be standardized into uppercase without being modified by verification.
     *
     * @return string|InlineAddressUs|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets From.
     * *Required* if `to` address is international. Must either be an address ID or an inline object with
     * correct address parameters. Must either be an address ID or an inline object with correct address
     * parameters. All addresses will be standardized into uppercase without being modified by verification.
     *
     * @maps from
     * @mapsBy anyOf(oneOf(string,InlineAddressUs),null)
     *
     * @param string|InlineAddressUs|null $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
    }

    /**
     * Returns Front.
     */
    public function getFront(): array
    {
        return $this->front;
    }

    /**
     * Sets Front.
     *
     * @required
     * @maps front
     */
    public function setFront(array $front): void
    {
        $this->front = $front;
    }

    /**
     * Returns Back.
     */
    public function getBack(): array
    {
        return $this->back;
    }

    /**
     * Sets Back.
     *
     * @required
     * @maps back
     */
    public function setBack(array $back): void
    {
        $this->back = $back;
    }

    /**
     * Returns Billing Group Id.
     * An optional string with the billing group ID to tag your usage with. Is used for billing purposes.
     * Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more
     * information.
     */
    public function getBillingGroupId(): ?string
    {
        return $this->billingGroupId;
    }

    /**
     * Sets Billing Group Id.
     * An optional string with the billing group ID to tag your usage with. Is used for billing purposes.
     * Requires special activation to use. See <a href="#tag/Billing-Groups">Billing Group API</a> for more
     * information.
     *
     * @maps billing_group_id
     */
    public function setBillingGroupId(?string $billingGroupId): void
    {
        $this->billingGroupId = $billingGroupId;
    }

    /**
     * Returns Qr Code.
     */
    public function getQrCode(): ?QrCode4
    {
        return $this->qrCode;
    }

    /**
     * Sets Qr Code.
     *
     * @maps qr_code
     */
    public function setQrCode(?QrCode4 $qrCode): void
    {
        $this->qrCode = $qrCode;
    }

    /**
     * Returns Use Type.
     */
    public function getUseType(): array
    {
        return $this->useType;
    }

    /**
     * Sets Use Type.
     *
     * @required
     * @maps use_type
     */
    public function setUseType(array $useType): void
    {
        $this->useType = $useType;
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
        if (!empty($this->description)) {
            $json['description']      = $this->description['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']         = $this->metadata;
        }
        if (isset($this->mailType)) {
            $json['mail_type']        = MailTypeEnum::checkValue($this->mailType);
        }
        if (!empty($this->mergeVariables)) {
            $json['merge_variables']  = $this->mergeVariables['value'];
        }
        if (isset($this->sendDate)) {
            $json['send_date']        = $this->sendDate;
        }
        if (isset($this->size)) {
            $json['size']             = PostcardSizeEnum::checkValue($this->size);
        }
        $json['to']                   =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->to,
                'oneOf(string,oneOf(InlineAddressUs,InlineAddressIntl))'
            );
        if (isset($this->from)) {
            $json['from']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->from,
                    'anyOf(oneOf(string,InlineAddressUs),null)'
                );
        }
        $json['front']                = $this->front;
        $json['back']                 = $this->back;
        if (isset($this->billingGroupId)) {
            $json['billing_group_id'] = $this->billingGroupId;
        }
        if (isset($this->qrCode)) {
            $json['qr_code']          = $this->qrCode;
        }
        $json['use_type']             = $this->useType;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
