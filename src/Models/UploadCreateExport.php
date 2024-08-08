<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Models;

use stdClass;

class UploadCreateExport implements \JsonSerializable
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $exportId;

    /**
     * @param string $exportId
     */
    public function __construct(string $exportId)
    {
        $this->exportId = $exportId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Export Id.
     */
    public function getExportId(): string
    {
        return $this->exportId;
    }

    /**
     * Sets Export Id.
     *
     * @required
     * @maps exportId
     */
    public function setExportId(string $exportId): void
    {
        $this->exportId = $exportId;
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
        $json['message']  = $this->message;
        $json['exportId'] = $this->exportId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
