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
use LobLib\Controllers\SelfMailersController;
use LobLib\Exceptions;
use LobLib\Models;

class SelfMailersControllerTest extends BaseTestController
{
    /**
     * @var SelfMailersController SelfMailersController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSelfMailersController();
    }

    public function testSelfMailersList()
    {
        // Parameters for the API call
        $limit = 10;
        $beforeAfter = null;
        $mInclude = null;
        $dateCreated = null;
        $metadata = null;
        $size = null;
        $scheduled = null;
        $sendDate = null;
        $mailType = null;
        $sortBy = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->selfMailersList(
                $limit,
                $beforeAfter,
                $mInclude,
                $dateCreated,
                $metadata,
                $size,
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
                '{"data":[{"id":"sfm_7239rhwqkrfaskas","description":"April Campaign","metadata' .
                '":{},"to":{"id":"adr_asdi2y3riuasasoi","description":"Harry - Office","name":"H' .
                'arry Zhang","company":"Lob","phone":"5555555555","email":"harry@lob.com","metad' .
                'ata":{},"address_line1":"370 WATER ST","address_line2":"","address_city":"SUMME' .
                'RSIDE","address_state":"PRINCE EDWARD ISLAND","address_zip":"C1N 1C4","address_' .
                'country":"CANADA","recipient_moved":false,"date_created":"2019-09-20T00:14:00.3' .
                '61Z","date_modified":"2019-09-20T00:14:00.361Z","object":"address"},"from":{"id' .
                '":"adr_210a8d4b0b76d77b","description":null,"name":null,"company":"LOB","phone"' .
                ':null,"email":null,"address_line1":"210 KING ST STE 6100","address_line2":null,' .
                '"address_city":"SAN FRANCISCO","address_state":"CA","address_zip":"94107-1741",' .
                '"address_country":"UNITED STATES","metadata":{},"date_created":"2018-12-08T03:0' .
                '1:07.651Z","date_modified":"2018-12-08T03:01:07.651Z","object":"address"},"url"' .
                ':"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf.pdf?version=v1&expir' .
                'es=1618781264&signature=YP_bCwrgVA2lz1Gr1YVCJN1f-WspUGsH0aJp2ihjfLXU7lDUV12_xRv' .
                '4uPch0mfWeOOxEqpyP8hGpgvjmQKNAw","outside_template_id":"tmpl_a3cb937f26d7eec","' .
                'inside_template_id":"tmpl_a3cb937f26d7eec","inside_template_version_id":"vrsn_b' .
                'fdf70893b00a85","outside_template_version_id":"vrsn_bfdf70893b00a85","carrier":' .
                '"USPS","tracking_events":[],"thumbnails":[{"small":"https://lob-assets.com/self' .
                '-mailers/sfm_8ffbe811dea49dcf_thumb_small_1.png?version=v1&expires=1618781264&s' .
                'ignature=A7q5HbRO53sUYYnwGlmP5mTS6ylLE7kS2mYhfcEOdexjyqG7UseK0MD26DppE4Q0aE4u2m' .
                'sDVMxd5ukjMerYCg","medium":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea' .
                '49dcf_thumb_medium_1.png?version=v1&expires=1618781264&signature=b9pynuawVpU_vr' .
                'hnT_mTpksdE-FLF_ZjdIBOFR_ltIzEGlx-VKD4VvZrqP98lG2D8V7UKQ7SdRr2nUAk4LxvCg","larg' .
                'e":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_large_1.png?' .
                'version=v1&expires=1618781264&signature=g2jifhCselPqIj8au6lsbJMNFN8ZX3aM6GkLoAX' .
                'iHBCS8X5mF9nhVbmO0odpnmwNlV1CWIp-MXVsZkC3NmxqBQ"},{"small":"https://lob-assets.' .
                'com/self-mailers/sfm_8ffbe811dea49dcf_thumb_small_2.png?version=v1&expires=1618' .
                '781264&signature=biJY4-ZbNNRydPYg3cZkq7wxjILbPBK_nIVyoyQsg5X5q4jlsa-2fzeMa48V9j' .
                'prUetsC6WEuYvasHosRfG_DQ","medium":"https://lob-assets.com/self-mailers/sfm_8ff' .
                'be811dea49dcf_thumb_medium_2.png?version=v1&expires=1618781264&signature=xEAX7b' .
                'URyc8fSphacuo5yb7iVIpT8Xvq05KgMaNQS4r3aCpx0z1p42wbPmW758B5Ae0li1YDYvVyzS7qJIoWA' .
                'w","large":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_larg' .
                'e_2.png?version=v1&expires=1618781264&signature=NieHDnoQ7STZUvofHrFt7S987CzIkUJ' .
                'WpaSgpVQPZw-C3_wwTPsIrvxYdXEuFrr6ciTUcxRBFPlE0lurmMkyCA"}],"merge_variables":{"' .
                'name":null},"size":"6x18_bifold","mail_type":"usps_first_class","expected_deliv' .
                'ery_date":"2021-03-24","date_created":"2021-03-16T18:40:40.504Z","date_modified' .
                '":"2021-03-16T18:41:06.691Z","send_date":"2021-03-16T18:45:40.493Z","deleted":t' .
                'rue,"use_type":"marketing","fsc":false,"object":"self_mailer"},{"id":"sfm_8ffbe' .
                '811dea49dcf","description":"April Campaign","metadata":{},"to":{"id":"adr_f9228' .
                'b743884ff98","description":null,"name":"AYA","company":null,"phone":null,"email' .
                '":null,"address_line1":"2812 PARK RD","address_line2":null,"address_city":"CHAR' .
                'LOTTE","address_state":"NC","address_zip":"28209-1314","address_country":"UNITE' .
                'D STATES","metadata":{},"date_created":"2021-03-16T18:40:40.410Z","date_modifie' .
                'd":"2021-03-16T18:40:40.410Z","deleted":true,"object":"address"},"from":{"id":"' .
                'adr_210a8d4b0b76d77b","description":null,"name":null,"company":"LOB","phone":nu' .
                'll,"email":null,"address_line1":"210 KING ST STE 6100","address_line2":null,"ad' .
                'dress_city":"SAN FRANCISCO","address_state":"CA","address_zip":"94107-1741","ad' .
                'dress_country":"UNITED STATES","metadata":{},"date_created":"2018-12-08T03:01:0' .
                '7.651Z","date_modified":"2018-12-08T03:01:07.651Z","object":"address"},"url":"h' .
                'ttps://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf.pdf?version=v1&expires=' .
                '1618781264&signature=YP_bCwrgVA2lz1Gr1YVCJN1f-WspUGsH0aJp2ihjfLXU7lDUV12_xRv4uP' .
                'ch0mfWeOOxEqpyP8hGpgvjmQKNAw","outside_template_id":"tmpl_a3cb937f26d7eec","ins' .
                'ide_template_id":"tmpl_a3cb937f26d7eec","inside_template_version_id":"vrsn_bfdf' .
                '70893b00a85","outside_template_version_id":"vrsn_bfdf70893b00a85","carrier":"US' .
                'PS","tracking_events":[],"thumbnails":[{"small":"https://lob-assets.com/self-ma' .
                'ilers/sfm_8ffbe811dea49dcf_thumb_small_1.png?version=v1&expires=1618781264&sign' .
                'ature=A7q5HbRO53sUYYnwGlmP5mTS6ylLE7kS2mYhfcEOdexjyqG7UseK0MD26DppE4Q0aE4u2msDV' .
                'Mxd5ukjMerYCg","medium":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49d' .
                'cf_thumb_medium_1.png?version=v1&expires=1618781264&signature=b9pynuawVpU_vrhnT' .
                '_mTpksdE-FLF_ZjdIBOFR_ltIzEGlx-VKD4VvZrqP98lG2D8V7UKQ7SdRr2nUAk4LxvCg","large":' .
                '"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_large_1.png?ver' .
                'sion=v1&expires=1618781264&signature=g2jifhCselPqIj8au6lsbJMNFN8ZX3aM6GkLoAXiHB' .
                'CS8X5mF9nhVbmO0odpnmwNlV1CWIp-MXVsZkC3NmxqBQ"},{"small":"https://lob-assets.com' .
                '/self-mailers/sfm_8ffbe811dea49dcf_thumb_small_2.png?version=v1&expires=1618781' .
                '264&signature=biJY4-ZbNNRydPYg3cZkq7wxjILbPBK_nIVyoyQsg5X5q4jlsa-2fzeMa48V9jprU' .
                'etsC6WEuYvasHosRfG_DQ","medium":"https://lob-assets.com/self-mailers/sfm_8ffbe8' .
                '11dea49dcf_thumb_medium_2.png?version=v1&expires=1618781264&signature=xEAX7bURy' .
                'c8fSphacuo5yb7iVIpT8Xvq05KgMaNQS4r3aCpx0z1p42wbPmW758B5Ae0li1YDYvVyzS7qJIoWAw",' .
                '"large":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_large_2' .
                '.png?version=v1&expires=1618781264&signature=NieHDnoQ7STZUvofHrFt7S987CzIkUJWpa' .
                'SgpVQPZw-C3_wwTPsIrvxYdXEuFrr6ciTUcxRBFPlE0lurmMkyCA"}],"merge_variables":{"nam' .
                'e":null},"size":"6x18_bifold","mail_type":"usps_first_class","expected_delivery' .
                '_date":"2021-03-24","date_created":"2021-03-16T18:40:40.504Z","date_modified":"' .
                '2021-03-16T18:41:06.691Z","send_date":"2021-03-16T18:45:40.493Z","deleted":true' .
                ',"use_type":"marketing","fsc":true,"object":"self_mailer"}],"object":"list","ne' .
                'xt_url":null,"previous_url":null,"count":2}'
            )))
            ->assert();
    }

    public function testSelfMailerCreate()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"description":"Demo Self Mailer job","to":"adr_bae820679f3f536b","from":"adr_210a' .
            '8d4b0b76d77b","inside":"https://lob.com/selfmailerinside.pdf","outside":"https://lo' .
            'b.com/selfmaileroutside.pdf","size":"12x9_bifold","metadata":{"spiffy":"true"},"mai' .
            'l_type":"usps_standard","merge_variables":{"name":"Harry"},"send_date":"2017-11-01T' .
            '00:00:00.000Z","use_type":"marketing","qr_code":{"position":"relative","redirect_ur' .
            'l":"https://www.lob.com","width":"2.5","top":"2.5","right":"2.5","pages":"inside,ou' .
            'tside"},"fsc":true}',
            Models\SelfMailerEditable::class
        );
        $idempotencyKey = '026e7634-24d7-486c-a0bb-4a17fd0eebc5';
        $idempotencyKey2 =
            '026e7634-24d7-486c-a0bb-4a17fd0eebc5';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->selfMailerCreate($body, $idempotencyKey, $idempotencyKey2);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['ratelimit-limit'] = ["", false];
        $headers['ratelimit-remaining'] = ["", false];
        $headers['ratelimit-reset'] = ["", false];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"sfm_8ffbe811dea49dcf","description":"April Campaign","metadata":{},"to"' .
                ':{"id":"adr_bae820679f3f536b","description":null,"name":"HARRY ZHANG","company"' .
                ':null,"phone":null,"email":null,"address_line1":"210 KING ST STE 6100","address' .
                '_line2":null,"address_city":"SAN FRANCISCO","address_state":"CA","address_zip":' .
                '"94107-1741","address_country":"UNITED STATES","metadata":{},"date_created":"20' .
                '17-09-05T17:47:53.767Z","date_modified":"2017-09-05T17:47:53.767Z","deleted":tr' .
                'ue,"object":"address"},"from":{"id":"adr_210a8d4b0b76d77b","description":null,"' .
                'name":"LEORE AVIDAR","company":null,"phone":null,"email":null,"address_line1":"' .
                '210 KING ST STE 6100","address_line2":null,"address_city":"SAN FRANCISCO","addr' .
                'ess_state":"CA","address_zip":"94107-1741","address_country":"UNITED STATES","m' .
                'etadata":{},"date_created":"2017-09-05T17:47:53.767Z","date_modified":"2017-09-' .
                '05T17:47:53.767Z","deleted":true,"object":"address"},"url":"https://lob-assets.' .
                'com/self-mailers/sfm_8ffbe811dea49dcf.pdf?version=v1&expires=1618512040&signatu' .
                're=qvyCqXI1ndBvc4AjvG8FlirqLXEcfmYo4sDrRtabaXMOsX88to9G3K49uIk_aqevvZXe8HoRYD_n' .
                'WydbQHqaCA","outside_template_id":"tmpl_a3cb937f26d7eec","inside_template_id":"' .
                'tmpl_a3cb937f26d7eec","inside_template_version_id":"vrsn_bfdf70893b00a85","outs' .
                'ide_template_version_id":"vrsn_bfdf70893b00a85","carrier":"USPS","tracking_even' .
                'ts":[],"thumbnails":[{"small":"https://lob-assets.com/self-mailers/sfm_8ffbe811' .
                'dea49dcf_thumb_small_1.png?version=v1&expires=1618512040&signature=-bipeUHP-hAM' .
                'cCBSrWM0ZH1VwRdSPNVGGZN9hAZKr6Lh4ly6uxvratVd5LXJCK_zOEMYk_mTWASt0ge7OY6SDA","me' .
                'dium":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_medium_1.' .
                'png?version=v1&expires=1618512040&signature=ryxN7bsXGtw_GRFSP3Cs3A3IYjxZi3cW9BH' .
                'DCNgMt6p3nobVmsc_iFHt2e-S7ndAXhhN7nP-MQVov3bt3r37BQ","large":"https://lob-asset' .
                's.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_large_1.png?version=v1&expires=16' .
                '18512040&signature=kBrm00xkyCkJNJRHxH8HshFaebtOxnzjVWOs1VVmGMuw8H6OBNcMAMxt9s49' .
                'K0jlpHoh3Nr9uSncEZMQaaNjAg"},{"small":"https://lob-assets.com/self-mailers/sfm_' .
                '8ffbe811dea49dcf_thumb_small_2.png?version=v1&expires=1618512040&signature=3gTg' .
                'U7Fd3KoT_vNlQnTGptRps5ZgnkhSnPrAwk7L98higIzSwfKoLvuu_DIpMM48dHbxckKT9waR8euJ4KS' .
                'DBQ","medium":"https://lob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_m' .
                'edium_2.png?version=v1&expires=1618512040&signature=Ue1lw5CMj7KRx6cMQL8xPeazaHC' .
                'dJzWcACd1w3acuYPnWkVIpSt62OIO7hAtpAQK9xm1dhhlFj0rqRZMdRMMBA","large":"https://l' .
                'ob-assets.com/self-mailers/sfm_8ffbe811dea49dcf_thumb_large_2.png?version=v1&ex' .
                'pires=1618512040&signature=cICc7HEm1xG_eyM4a_wtvPk2FqoLRmtgGa29kJisWnMIYBL0Okyz' .
                'G4ZCYGMhp-5cZpJlSpXfTgGKh_Qmeo1TDw"}],"merge_variables":{"name":null},"size":"6' .
                'x18_bifold","mail_type":"usps_first_class","expected_delivery_date":"2021-03-24' .
                '","date_created":"2021-03-16T18:40:40.504Z","date_modified":"2021-03-16T18:40:4' .
                '0.504Z","send_date":"2021-03-16T18:45:40.493Z","use_type":"marketing","fsc":fal' .
                'se,"object":"self_mailer"}'
            )))
            ->assert();
    }
}
