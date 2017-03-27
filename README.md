PDF-API-PHP-Client
================================

This is PHP client to consume PDF API

Where to get API Key
====================

You can visit https://www.vedicrishiastro.com/astro-api/ to get the astrology API key to be used for your websites or
mobile applications.

How to Use
==========

1. Copy PdfClient.php class file to your local or server file system

2. Instantiate ```PdfClient``` class as follows as follows -
    ```php
    $clientInstance = new PdfClient($userId, $apiKey);
    ```
    Replace ``` $userId ``` and ``` $apiKey``` with your id and keys respectively.
    You can get the API key details from https://www.vedicrishiastro.com/astro-api/

3. Call the api as follows:
    ```php
    $PdfResponse = $clientInstance->call($date, $month, $year, $hour, $min, $lat, $lon, $tzone);

    ```
    View test.php for more details about calling PDF API.
    
4. The ``` $PdfResponse ``` will be a JSON encoded data returned as an API response. It would contain the response status and link to PDF . 
    ```js
    [
        {
            "status" : true, // true or false
            "pdf_url" : "http://ec2-52-58-178-221.eu-central-1.compute.amazonaws.com/pdfs/pdf-1465733471262.pdf"
        }
    ]
    ```
For PDF API documentation, visit - http://www.vedicrishiastro.com/docs/pdf-docs.php
