<?php

require 'sdk.php';

class PdfClient
{
    private $userId = null;
    private $apiKey = null;
    private $language = null;

    //TODO: MUST enable this on production- MUST
    //private $apiEndPoint = "https://json.astrologyapi.com/v1/";

    //TODO: MUST- comment this and uncomment https url above on production for added security

    /**
     * @param $uid string userId for AstrologyAPI
     * @param $key string api key for AstrologyAPI access
     */
    public function __construct($uid, $key)
    {
        $this->userId = $uid;
        $this->apiKey = $key;
    }


    /*
    A Function to set the Language of Response.
    Just call this function and you can change the language.
    This function should be passed either 'en' for English or 'hi' for Hindi.
*/
    public function setLanguage( $language )
    {
        $this->language = $language;
    }

    private function packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {
        return array(
            'day' => $date,
            'month' => $month,
            'year' => $year,
            'hour' => $hour,
            'min' => $minute,
            'lat' => $latitude,
            'lon' => $longitude,
            'tzone' => $timezone
        );
    }

    //*************************************Get PDF*********************************************//

    public function call($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone)
    {
        $data = $this->packageHoroData($date, $month, $year, $hour, $minute, $latitude, $longitude, $timezone);
        $response = getCurlReponse($this->userId, $this->apiKey, $data, $this->language);
        return $response;
    }

}