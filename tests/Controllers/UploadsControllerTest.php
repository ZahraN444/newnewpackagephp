<?php

declare(strict_types=1);

/*
 * LobLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace LobLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use LobLib\Controllers\UploadsController;
use LobLib\Exceptions;

class UploadsControllerTest extends BaseTestController
{
    /**
     * @var UploadsController UploadsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getUploadsController();
    }

    public function testUploadsList()
    {
        // Parameters for the API call
        $campaignId = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->uploadsList($campaignId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '[{"id":"upl_71be866e430b11e9","accountId":"fa9ea650fc7b31a89f92","campaignId":' .
                '"cmp_1933ad629bae1408","mode":"test","failuresUrl":"https://www.example.com","o' .
                'riginalFilename":"my_audience.csv","state":"Draft","totalMailpieces":100,"faile' .
                'dMailpieces":5,"validatedMailpieces":95,"bytesProcessed":17268,"dateCreated":"2' .
                '017-09-05T17:47:53.767Z","dateModified":"2017-09-05T17:47:53.767Z","requiredAdd' .
                'ressColumnMapping":{"name":"recipient_name","address_line1":"primary_line","add' .
                'ress_city":"city","address_state":"state","address_zip":"zip_code"},"optionalAd' .
                'dressColumnMapping":{"address_line2":"secondary_line","company":"company","addr' .
                'ess_country":"country"},"mergeVariableColumnMapping":{"gift_code":"code"},"meta' .
                'data":{"columns":["recipient_name","zip_code"]}}]'
            )))
            ->assert();
    }
}
