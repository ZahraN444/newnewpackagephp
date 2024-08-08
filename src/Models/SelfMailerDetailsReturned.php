<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

/**
 * Properties that the self mailers in your Creative should have. Check within in order to add a QR
 * code to your creative.
 */
class SelfMailerDetailsReturned implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mailType;

    /**
     * @var string|null
     */
    private $size;

    /**
     * @var string|null
     */
    private $insideOriginalUrl;

    /**
     * @var string|null
     */
    private $outsideOriginalUrl;

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
     * @factory \LobLib\Models\SelfMailerSizeEnum::checkValue
     */
    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    /**
     * Returns Inside Original Url.
     * The original URL of the `inside` template.
     */
    public function getInsideOriginalUrl(): ?string
    {
        return $this->insideOriginalUrl;
    }

    /**
     * Sets Inside Original Url.
     * The original URL of the `inside` template.
     *
     * @maps inside_original_url
     */
    public function setInsideOriginalUrl(?string $insideOriginalUrl): void
    {
        $this->insideOriginalUrl = $insideOriginalUrl;
    }

    /**
     * Returns Outside Original Url.
     * The original URL of the `outside` template.
     */
    public function getOutsideOriginalUrl(): ?string
    {
        return $this->outsideOriginalUrl;
    }

    /**
     * Sets Outside Original Url.
     * The original URL of the `outside` template.
     *
     * @maps outside_original_url
     */
    public function setOutsideOriginalUrl(?string $outsideOriginalUrl): void
    {
        $this->outsideOriginalUrl = $outsideOriginalUrl;
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
        if (isset($this->mailType)) {
            $json['mail_type']            = MailTypeEnum::checkValue($this->mailType);
        }
        if (isset($this->size)) {
            $json['size']                 = SelfMailerSizeEnum::checkValue($this->size);
        }
        if (isset($this->insideOriginalUrl)) {
            $json['inside_original_url']  = $this->insideOriginalUrl;
        }
        if (isset($this->outsideOriginalUrl)) {
            $json['outside_original_url'] = $this->outsideOriginalUrl;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
