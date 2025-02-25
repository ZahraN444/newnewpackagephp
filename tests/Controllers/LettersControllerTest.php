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
use LobLib\Controllers\LettersController;
use LobLib\Exceptions;

class LettersControllerTest extends BaseTestController
{
    /**
     * @var LettersController LettersController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getLettersController();
    }

    public function testLettersList()
    {
        // Parameters for the API call
        $limit = 10;
        $beforeAfter = null;
        $mInclude = null;
        $dateCreated = null;
        $metadata = null;
        $color = null;
        $scheduled = null;
        $sendDate = null;
        $mailType = null;
        $sortBy = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->lettersList(
                $limit,
                $beforeAfter,
                $mInclude,
                $dateCreated,
                $metadata,
                $color,
                $scheduled,
                $sendDate,
                $mailType,
                $sortBy
            );
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
                '{"data":[{"id":"ltr_5ba44b462c79f07c","description":"Demo Letter","metadata":{' .
                '},"to":{"id":"adr_asdi2y3riuasasoi","description":"Harry - Office","name":"Harr' .
                'y Zhang","company":"Lob","phone":"5555555555","email":"harry@lob.com","metadata' .
                '":{},"address_line1":"370 WATER ST","address_line2":"","address_city":"SUMMERSI' .
                'DE","address_state":"PRINCE EDWARD ISLAND","address_zip":"C1N 1C4","address_cou' .
                'ntry":"CANADA","recipient_moved":false,"date_created":"2019-09-20T00:14:00.361Z' .
                '","date_modified":"2019-09-20T00:14:00.361Z","object":"address"},"from":{"id":"' .
                'adr_210a8d4b0b76d77b","description":null,"name":"LEORE AVIDAR","company":null,"' .
                'phone":null,"email":null,"address_line1":"210 KING ST STE 6100","address_line2"' .
                ':null,"address_city":"SAN FRANCISCO","address_state":"CA","address_zip":"94107-' .
                '1741","address_country":"UNITED STATES","metadata":{},"date_created":"2018-12-0' .
                '8T03:01:07.651Z","date_modified":"2018-12-08T03:01:07.651Z","object":"address"}' .
                ',"color":true,"double_sided":false,"address_placement":"top_first_page","return' .
                '_envelope":false,"perforated_page":null,"extra_service":"certified","custom_env' .
                'elope":null,"template_id":"tmpl_a","template_version_id":"vrsn_a","mail_type":"' .
                'usps_first_class","url":"https://lob-assets.com/letters/ltr_5ba44b462c79f07c.pd' .
                'f?version=v1&expires=1568239830&signature=Ob-DUPLJLM4scWQeCDNadPJ4j33MZw16pykOx' .
                'wv2us-bA7utTYi6oZ8WrEtBYDBBo09XkapR3gdJf0NEr90xAA","merge_variables":null,"carr' .
                'ier":"USPS","tracking_number":"92071902358909000011275538","tracking_events":[{' .
                '"id":"evnt_9e84094c9368cfb","type":"certified","name":"Delivered","details":{"e' .
                'vent":"delivered","description":"Package has been delivered.","notes":"Delivere' .
                'd, Front Desk/Reception/Mail Room","action_required":false},"location":"33408",' .
                '"time":"2019-10-08T19:41:00Z","date_created":"2019-10-08T19:41:00Z","date_modif' .
                'ied":"2019-10-08T19:41:00Z","object":"tracking_event"}],"thumbnails":[{"small":' .
                '"https://lob-assets.com/letters/ltr_5ba44b462c79f07c_thumb_small_1.png?version=' .
                'v1&expires=1568239830&signature=xZUmE8rq8wSECHPEb9c37cUDZBzGUO3XK5LsIPZhI6dOXgm' .
                '6zJEn8_7tKuZ3JWBmvNJNXdTl_ufkNu4avjQUDw","medium":"https://lob-assets.com/lette' .
                'rs/ltr_5ba44b462c79f07c_thumb_medium_1.png?version=v1&expires=1568239830&signat' .
                'ure=H7354Qpcm9S4aXbrMsBe6QJ6lSNi9IWPgMJtLWLi4Kyx9tHF8Mp9YEc_IL9x89Jfw4-yRzKDXA4' .
                '10X4W0PssBQ","large":"https://lob-assets.com/letters/ltr_5ba44b462c79f07c_thumb' .
                '_large_1.png?version=v1&expires=1568239830&signature=54LUIDKZyItA9pnC87d1pJVAuw' .
                '8bhKLCsMpNWkB3LgdVWxPxxb_c1IyIWAbSR-dyOYEOlDBCc40J4Kns-O_mAg"}],"expected_deliv' .
                'ery_date":"2019-08-16","date_created":"2019-08-08T17:09:14.514Z","date_modified' .
                '":"2019-08-08T17:09:16.850Z","send_date":"2019-08-08","use_type":"marketing","f' .
                'sc":false,"object":"letter"},{"id":"ltr_da8267c6a6545cd6","description":"Demo L' .
                'etter","metadata":{},"to":{"id":"adr_210a8d4b0b76d77b","description":null,"name' .
                '":"LEORE AVIDAR","company":null,"phone":null,"email":null,"address_line1":"210 ' .
                'KING ST STE 6100","address_line2":null,"address_city":"SAN FRANCISCO","address_' .
                'state":"CA","address_zip":"94107-1741","address_country":"UNITED STATES","metad' .
                'ata":{},"date_created":"2018-12-08T03:01:07.651Z","date_modified":"2018-12-08T0' .
                '3:01:07.651Z","object":"address"},"from":{"id":"adr_210a8d4b0b76d77b","descript' .
                'ion":null,"name":"LEORE AVIDAR","company":null,"phone":null,"email":null,"addre' .
                'ss_line1":"210 KING ST STE 6100","address_line2":null,"address_city":"SAN FRANC' .
                'ISCO","address_state":"CA","address_zip":"94107-1741","address_country":"UNITED' .
                ' STATES","metadata":{},"date_created":"2018-12-08T03:01:07.651Z","date_modified' .
                '":"2018-12-08T03:01:07.651Z","object":"address"},"color":true,"double_sided":fa' .
                'lse,"address_placement":"top_first_page","return_envelope":false,"perforated_pa' .
                'ge":null,"extra_service":null,"custom_envelope":null,"mail_type":"usps_first_cl' .
                'ass","url":"https://lob-assets.com/letters/ltr_da8267c6a6545cd6.pdf?version=v1&' .
                'expires=1568239830&signature=HH-5RnbD4x0eJcnEC9HhqKSvQGsbkjovzvqSKgBijUHKIXwEKQ' .
                'J4CbYhKs_U2q2A1k20Xefcaw7bfdPKozuqCQ","merge_variables":null,"carrier":"USPS","' .
                'tracking_number":null,"tracking_events":[],"thumbnails":[{"small":"https://lob-' .
                'assets.com/letters/ltr_da8267c6a6545cd6_thumb_small_1.png?version=v1&expires=15' .
                '68239830&signature=C1Rs83187HpWGhsg_pJIOhDIKlDtC_IgBBxHiocCEzJ8CncJwqrq5yHke-p9' .
                '7Dv7o81G_pfhFmirai589O6DCw","medium":"https://lob-assets.com/letters/ltr_da8267' .
                'c6a6545cd6_thumb_medium_1.png?version=v1&expires=1568239830&signature=gz63l0yi3' .
                'sK_sXjYfIVdLSvkknJFr_O5TWRulo_iKIgS-PosIl6J0tDR6bx_Tv5Ab_w7DABg3qdKZ846MZ7TCw",' .
                '"large":"https://lob-assets.com/letters/ltr_da8267c6a6545cd6_thumb_large_1.png?' .
                'version=v1&expires=1568239830&signature=4Y1OIymaWkSO3aBIHCeshFAVnF-pDcF2FFqkx_j' .
                'ovaUFuk4FT1SI24L7_POwTRXQHlETMGlzkP_CGgqselRUAA"}],"expected_delivery_date":"20' .
                '19-08-16","date_created":"2019-08-08T17:08:12.224Z","date_modified":"2019-08-08' .
                'T17:08:13.990Z","send_date":"2019-08-08T17:08:12.224Z","cards":null,"use_type":' .
                '"marketing","fsc":true,"object":"letter"}],"object":"list","next_url":"https://' .
                'api.lob.com/v1/letters?limit=2&after=eyJkYXRlT2Zmc2V0IjoiMjAxOS0wOC0wOFQxNzowOD' .
                'oxMi4yMjRaIiwiaWRPZmZzZXQiOiJsdHJfZGE4MjY3YzZhNjU0NWNkNiJ9","previous_url":null' .
                ',"count":2}'
            )))
            ->assert();
    }
}
