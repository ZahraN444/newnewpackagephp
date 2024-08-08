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
use LobLib\Controllers\BankAccountsController;
use LobLib\Exceptions;

class BankAccountsControllerTest extends BaseTestController
{
    /**
     * @var BankAccountsController BankAccountsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getBankAccountsController();
    }

    public function testBankAccountsList()
    {
        // Parameters for the API call
        $limit = 10;
        $beforeAfter = null;
        $mInclude = null;
        $dateCreated = null;
        $metadata = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->bankAccountsList($limit, $beforeAfter, $mInclude, $dateCreated, $metadata);
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
                '{"data":[{"id":"bank_0e3fb07eba0b35b","signature_url":"https://lob-assets.com/' .
                'letters/asd_asdfghjklqwertyu.pdf?version=45&expires=1234567890&signature=a","de' .
                'scription":"Example bank account","metadata":{},"routing_number":"122100024","a' .
                'ccount_number":"1234564789","account_type":"company","signatory":"John Doe","ba' .
                'nk_name":"JPMORGAN CHASE BANK, NA","verified":true,"date_created":"2019-03-30T1' .
                '3:13:22.200Z","date_modified":"2019-03-30T13:13:23.385Z","object":"bank_account' .
                '"},{"id":"bank_eba93f7de3c02d9","description":"Example bank account","metadata"' .
                ':{},"routing_number":"122100024","account_number":"1234564789","account_type":"' .
                'company","signatory":"John Doe","bank_name":"JPMORGAN CHASE BANK, NA","verified' .
                '":true,"date_created":"2019-03-30T13:11:06.809Z","date_modified":"2019-03-30T13' .
                ':11:07.872Z","object":"bank_account"}],"object":"list","next_url":"https://api.' .
                'lob.com/v1/bank_accounts?limit=2&after=eyJkYXRlT2Zmc2V0IjoiMjAxOS0wMy0zMFQxMzox' .
                'MTowNi44MDlaIiwiaWRPZmZzZXQiOiJiYW5rX2ViYTkzZjdkZTNjMDJkOSJ9","previous_url":nu' .
                'll,"count":2}'
            )))
            ->assert();
    }
}
