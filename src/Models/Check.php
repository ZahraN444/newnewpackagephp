<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use LobLib\Utils\DateTimeHelper;
use stdClass;

class Check implements \JsonSerializable
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
    private $mailType;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var int|null
     */
    private $checkNumber;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var array
     */
    private $useType;

    /**
     * @var AddressUs|null
     */
    private $from;

    /**
     * @var string
     */
    private $id;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var BankAccount
     */
    private $bankAccount;

    /**
     * @var string|null
     */
    private $checkBottomTemplateId;

    /**
     * @var string|null
     */
    private $attachmentTemplateId;

    /**
     * @var string|null
     */
    private $checkBottomTemplateVersionId;

    /**
     * @var string|null
     */
    private $attachmentTemplateVersionId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var ToAddressUsChk
     */
    private $to;

    /**
     * @var string
     */
    private $carrier;

    /**
     * @var Thumbnail[]|null
     */
    private $thumbnails;

    /**
     * @var \DateTime|null
     */
    private $expectedDeliveryDate;

    /**
     * @var array
     */
    private $trackingEvents = [];

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $failureReason = [];

    /**
     * @var string|null
     */
    private $object;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var bool|null
     */
    private $deleted;

    /**
     * @param array $useType
     * @param string $id
     * @param float $amount
     * @param BankAccount $bankAccount
     * @param string $url
     * @param ToAddressUsChk $to
     * @param \DateTime $dateCreated
     * @param \DateTime $dateModified
     */
    public function __construct(
        array $useType,
        string $id,
        float $amount,
        BankAccount $bankAccount,
        string $url,
        ToAddressUsChk $to,
        \DateTime $dateCreated,
        \DateTime $dateModified
    ) {
        $this->useType = $useType;
        $this->id = $id;
        $this->amount = $amount;
        $this->bankAccount = $bankAccount;
        $this->url = $url;
        $this->to = $to;
        $this->dateCreated = $dateCreated;
        $this->dateModified = $dateModified;
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
     * @factory \LobLib\Models\MailType2Enum::checkValue
     */
    public function setMailType(?string $mailType): void
    {
        $this->mailType = $mailType;
    }

    /**
     * Returns Memo.
     * Text to include on the memo line of the check.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     * Text to include on the memo line of the check.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * Text to include on the memo line of the check.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Check Number.
     * An integer that designates the check number.
     * If `check_number` is not provided, checks created from a new `bank_account` will start at `10000`
     * and increment with each check created with the `bank_account`.
     * A provided `check_number` overrides the defaults. Subsequent checks created with the same
     * `bank_account` will increment from the provided check number.
     */
    public function getCheckNumber(): ?int
    {
        return $this->checkNumber;
    }

    /**
     * Sets Check Number.
     * An integer that designates the check number.
     * If `check_number` is not provided, checks created from a new `bank_account` will start at `10000`
     * and increment with each check created with the `bank_account`.
     * A provided `check_number` overrides the defaults. Subsequent checks created with the same
     * `bank_account` will increment from the provided check number.
     *
     * @maps check_number
     */
    public function setCheckNumber(?int $checkNumber): void
    {
        $this->checkNumber = $checkNumber;
    }

    /**
     * Returns Message.
     * Max of 400 characters to be included at the bottom of the check page.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Max of 400 characters to be included at the bottom of the check page.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
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
     * Returns From.
     */
    public function getFrom(): ?AddressUs
    {
        return $this->from;
    }

    /**
     * Sets From.
     *
     * @maps from
     */
    public function setFrom(?AddressUs $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns Id.
     * Unique identifier prefixed with `chk_`.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier prefixed with `chk_`.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Amount.
     * The payment amount to be sent in US dollars.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The payment amount to be sent in US dollars.
     *
     * @required
     * @maps amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Bank Account.
     */
    public function getBankAccount(): BankAccount
    {
        return $this->bankAccount;
    }

    /**
     * Sets Bank Account.
     *
     * @required
     * @maps bank_account
     */
    public function setBankAccount(BankAccount $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * Returns Check Bottom Template Id.
     */
    public function getCheckBottomTemplateId(): ?string
    {
        return $this->checkBottomTemplateId;
    }

    /**
     * Sets Check Bottom Template Id.
     *
     * @maps check_bottom_template_id
     */
    public function setCheckBottomTemplateId(?string $checkBottomTemplateId): void
    {
        $this->checkBottomTemplateId = $checkBottomTemplateId;
    }

    /**
     * Returns Attachment Template Id.
     */
    public function getAttachmentTemplateId(): ?string
    {
        return $this->attachmentTemplateId;
    }

    /**
     * Sets Attachment Template Id.
     *
     * @maps attachment_template_id
     */
    public function setAttachmentTemplateId(?string $attachmentTemplateId): void
    {
        $this->attachmentTemplateId = $attachmentTemplateId;
    }

    /**
     * Returns Check Bottom Template Version Id.
     */
    public function getCheckBottomTemplateVersionId(): ?string
    {
        return $this->checkBottomTemplateVersionId;
    }

    /**
     * Sets Check Bottom Template Version Id.
     *
     * @maps check_bottom_template_version_id
     */
    public function setCheckBottomTemplateVersionId(?string $checkBottomTemplateVersionId): void
    {
        $this->checkBottomTemplateVersionId = $checkBottomTemplateVersionId;
    }

    /**
     * Returns Attachment Template Version Id.
     */
    public function getAttachmentTemplateVersionId(): ?string
    {
        return $this->attachmentTemplateVersionId;
    }

    /**
     * Sets Attachment Template Version Id.
     *
     * @maps attachment_template_version_id
     */
    public function setAttachmentTemplateVersionId(?string $attachmentTemplateVersionId): void
    {
        $this->attachmentTemplateVersionId = $attachmentTemplateVersionId;
    }

    /**
     * Returns Url.
     * A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to
     * prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to
     * prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns To.
     */
    public function getTo(): ToAddressUsChk
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @required
     * @maps to
     */
    public function setTo(ToAddressUsChk $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Carrier.
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * Sets Carrier.
     *
     * @maps carrier
     */
    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * Returns Thumbnails.
     *
     * @return Thumbnail[]|null
     */
    public function getThumbnails(): ?array
    {
        return $this->thumbnails;
    }

    /**
     * Sets Thumbnails.
     *
     * @maps thumbnails
     *
     * @param Thumbnail[]|null $thumbnails
     */
    public function setThumbnails(?array $thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * Returns Expected Delivery Date.
     * A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`.
     */
    public function getExpectedDeliveryDate(): ?\DateTime
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * Sets Expected Delivery Date.
     * A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`.
     *
     * @maps expected_delivery_date
     * @factory \LobLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setExpectedDeliveryDate(?\DateTime $expectedDeliveryDate): void
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
    }

    /**
     * Returns Tracking Events.
     * An array of tracking_event objects ordered by ascending `time`. Will not be populated for checks
     * created in test mode.
     *
     * @return TrackingEventNormal[]|null
     */
    public function getTrackingEvents(): ?array
    {
        if (count($this->trackingEvents) == 0) {
            return null;
        }
        return $this->trackingEvents['value'];
    }

    /**
     * Sets Tracking Events.
     * An array of tracking_event objects ordered by ascending `time`. Will not be populated for checks
     * created in test mode.
     *
     * @maps tracking_events
     *
     * @param TrackingEventNormal[]|null $trackingEvents
     */
    public function setTrackingEvents(?array $trackingEvents): void
    {
        $this->trackingEvents['value'] = $trackingEvents;
    }

    /**
     * Unsets Tracking Events.
     * An array of tracking_event objects ordered by ascending `time`. Will not be populated for checks
     * created in test mode.
     */
    public function unsetTrackingEvents(): void
    {
        $this->trackingEvents = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \LobLib\Models\ThestatusofthebuckslipEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Failure Reason.
     * A string describing the reason for failure if the check failed to render.
     */
    public function getFailureReason(): ?string
    {
        if (count($this->failureReason) == 0) {
            return null;
        }
        return $this->failureReason['value'];
    }

    /**
     * Sets Failure Reason.
     * A string describing the reason for failure if the check failed to render.
     *
     * @maps failure_reason
     */
    public function setFailureReason(?string $failureReason): void
    {
        $this->failureReason['value'] = $failureReason;
    }

    /**
     * Unsets Failure Reason.
     * A string describing the reason for failure if the check failed to render.
     */
    public function unsetFailureReason(): void
    {
        $this->failureReason = [];
    }

    /**
     * Returns Object.
     */
    public function getObject(): ?string
    {
        return $this->object;
    }

    /**
     * Sets Object.
     *
     * @maps object
     * @factory \LobLib\Models\Object5Enum::checkValue
     */
    public function setObject(?string $object): void
    {
        $this->object = $object;
    }

    /**
     * Returns Date Created.
     * A timestamp in ISO 8601 format of the date the resource was created.
     */
    public function getDateCreated(): \DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Sets Date Created.
     * A timestamp in ISO 8601 format of the date the resource was created.
     *
     * @required
     * @maps date_created
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateCreated(\DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Returns Date Modified.
     * A timestamp in ISO 8601 format of the date the resource was last modified.
     */
    public function getDateModified(): \DateTime
    {
        return $this->dateModified;
    }

    /**
     * Sets Date Modified.
     * A timestamp in ISO 8601 format of the date the resource was last modified.
     *
     * @required
     * @maps date_modified
     * @factory \LobLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateModified(\DateTime $dateModified): void
    {
        $this->dateModified = $dateModified;
    }

    /**
     * Returns Deleted.
     * Only returned if the resource has been successfully deleted.
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * Sets Deleted.
     * Only returned if the resource has been successfully deleted.
     *
     * @maps deleted
     */
    public function setDeleted(?bool $deleted): void
    {
        $this->deleted = $deleted;
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
            $json['description']                      = $this->description['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']                         = $this->metadata;
        }
        if (!empty($this->mergeVariables)) {
            $json['merge_variables']                  = $this->mergeVariables['value'];
        }
        if (isset($this->sendDate)) {
            $json['send_date']                        = $this->sendDate;
        }
        if (isset($this->mailType)) {
            $json['mail_type']                        = MailType2Enum::checkValue($this->mailType);
        }
        if (!empty($this->memo)) {
            $json['memo']                             = $this->memo['value'];
        }
        if (isset($this->checkNumber)) {
            $json['check_number']                     = $this->checkNumber;
        }
        if (isset($this->message)) {
            $json['message']                          = $this->message;
        }
        $json['use_type']                             = $this->useType;
        if (isset($this->from)) {
            $json['from']                             = $this->from;
        }
        $json['id']                                   = $this->id;
        $json['amount']                               = $this->amount;
        $json['bank_account']                         = $this->bankAccount;
        if (isset($this->checkBottomTemplateId)) {
            $json['check_bottom_template_id']         = $this->checkBottomTemplateId;
        }
        if (isset($this->attachmentTemplateId)) {
            $json['attachment_template_id']           = $this->attachmentTemplateId;
        }
        if (isset($this->checkBottomTemplateVersionId)) {
            $json['check_bottom_template_version_id'] = $this->checkBottomTemplateVersionId;
        }
        if (isset($this->attachmentTemplateVersionId)) {
            $json['attachment_template_version_id']   = $this->attachmentTemplateVersionId;
        }
        $json['url']                                  = $this->url;
        $json['to']                                   = $this->to;
        $json['carrier']                              = $this->carrier;
        if (isset($this->thumbnails)) {
            $json['thumbnails']                       = $this->thumbnails;
        }
        if (isset($this->expectedDeliveryDate)) {
            $json['expected_delivery_date']           = DateTimeHelper::toSimpleDate($this->expectedDeliveryDate);
        }
        if (!empty($this->trackingEvents)) {
            $json['tracking_events']                  = $this->trackingEvents['value'];
        }
        if (isset($this->status)) {
            $json['status']                           = ThestatusofthebuckslipEnum::checkValue($this->status);
        }
        if (!empty($this->failureReason)) {
            $json['failure_reason']                   = $this->failureReason['value'];
        }
        if (isset($this->object)) {
            $json['object']                           = Object5Enum::checkValue($this->object);
        }
        $json['date_created']                         = DateTimeHelper::toRfc3339DateTime($this->dateCreated);
        $json['date_modified']                        = DateTimeHelper::toRfc3339DateTime($this->dateModified);
        if (isset($this->deleted)) {
            $json['deleted']                          = $this->deleted;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
