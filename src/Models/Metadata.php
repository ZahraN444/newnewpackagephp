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
 * The list of column headers in your file as an array that you want as metadata associated with each
 * mailpiece. See our <a href="https://help.lob.com/print-and-mail/building-a-mail-strategy/campaign-or-
 * triggered-sends/campaign-audience-guide#required-columns-2" target="_blank">Campaign Audience
 * Guide</a> for additional details.
 */
class Metadata implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $columns;

    /**
     * @param string[] $columns
     */
    public function __construct(array $columns)
    {
        $this->columns = $columns;
    }

    /**
     * Returns Columns.
     * The list of column names from the csv file which you want associated with each of your mailpieces
     *
     * @return string[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * Sets Columns.
     * The list of column names from the csv file which you want associated with each of your mailpieces
     *
     * @required
     * @maps columns
     *
     * @param string[] $columns
     */
    public function setColumns(array $columns): void
    {
        $this->columns = $columns;
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
        $json['columns'] = $this->columns;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
