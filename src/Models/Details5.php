<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class Details5 implements \JsonSerializable
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
    private $frontOriginalUrl;

    /**
     * @var string|null
     */
    private $backOriginalUrl;

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
     * @factory \LobLib\Models\PostcardSizeEnum::checkValue
     */
    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    /**
     * Returns Front Original Url.
     * The original URL of the `front` template.
     */
    public function getFrontOriginalUrl(): ?string
    {
        return $this->frontOriginalUrl;
    }

    /**
     * Sets Front Original Url.
     * The original URL of the `front` template.
     *
     * @maps front_original_url
     */
    public function setFrontOriginalUrl(?string $frontOriginalUrl): void
    {
        $this->frontOriginalUrl = $frontOriginalUrl;
    }

    /**
     * Returns Back Original Url.
     * The original URL of the `back` template.
     */
    public function getBackOriginalUrl(): ?string
    {
        return $this->backOriginalUrl;
    }

    /**
     * Sets Back Original Url.
     * The original URL of the `back` template.
     *
     * @maps back_original_url
     */
    public function setBackOriginalUrl(?string $backOriginalUrl): void
    {
        $this->backOriginalUrl = $backOriginalUrl;
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
            $json['mail_type']          = MailTypeEnum::checkValue($this->mailType);
        }
        if (isset($this->size)) {
            $json['size']               = PostcardSizeEnum::checkValue($this->size);
        }
        if (isset($this->frontOriginalUrl)) {
            $json['front_original_url'] = $this->frontOriginalUrl;
        }
        if (isset($this->backOriginalUrl)) {
            $json['back_original_url']  = $this->backOriginalUrl;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
