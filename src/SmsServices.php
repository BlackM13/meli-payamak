<?php

namespace BlackM13\MeliPayamak;

use Illuminate\Support\Facades\Http;

class SmsService
{

   protected $baseUrl = 'https://rest.payamak-panel.com/api/SendSMS';
    protected $username;
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function sendSMS($to, $from, $text, $isFlash = false)
    {
        $response = Http::post("{$this->baseUrl}/SendSMS", [
            'username' => $this->username,
            'password' => $this->password,
            'to' => $to,
            'from' => $from,
            'text' => $text,
            'isFlash' => $isFlash,
        ]);

        return $this->handleResponse($response);
    }

    public function sendSMSWithBaseServiceNumber($to, $text, $bodyId)
    {
        $response = Http::post("{$this->baseUrl}/BaseServiceNumber", [
            'username' => $this->username,
            'password' => $this->password,
            'to' => $to,
            'text' => $text,
            'bodyId' => $bodyId,
        ]);

        return $this->handleResponse($response);
    }

    public function getDeliveryStatus($recID)
    {
        $response = Http::post("{$this->baseUrl}/GetDeliveries2", [
            'username' => $this->username,
            'password' => $this->password,
            'recID' => $recID,
        ]);

        return $this->handleResponse($response);
    }

    public function getMessages($location, $from = null, $index = 0, $count = 100)
    {
        $response = Http::post("{$this->baseUrl}/GetMessages", [
            'username' => $this->username,
            'password' => $this->password,
            'location' => $location,
            'from' => $from,
            'index' => $index,
            'count' => $count,
        ]);

        return $this->handleResponse($response);
    }

    public function getCredit()
    {
        $response = Http::post("{$this->baseUrl}/GetCredit", [
            'username' => $this->username,
            'password' => $this->password,
        ]);

        return $this->handleResponse($response);
    }

    public function getBasePrice()
    {
        $response = Http::post("{$this->baseUrl}/GetBasePrice", [
            'username' => $this->username,
            'password' => $this->password,
        ]);

        return $this->handleResponse($response);
    }

    public function getUserNumbers()
    {
        $response = Http::post("{$this->baseUrl}/GetUserNumbers", [
            'username' => $this->username,
            'password' => $this->password,
        ]);

        return $this->handleResponse($response);
    }

    public function getCredit2()
    {
        $response = Http::post("{$this->baseUrl}/GetCredit2", [
            'username' => $this->username,
            'password' => $this->password,
        ]);

        return $this->handleResponse($response);
    }

    public function sendMultipleSMS($to, $from, $texts)
    {
        $response = Http::post("{$this->baseUrl}/SendMultipleSMS", [
            'username' => $this->username,
            'password' => $this->password,
            'to' => $to,
            'from' => $from,
            'text' => $texts,
        ]);

        return $this->handleResponse($response);
    }

    protected function handleResponse($response)
    {
        if ($response->successful()) {
            return json_decode($response->body(), true);
        }

        return [
            'error' => true,
            'message' => $response->body(),
            'status' => $response->status(),
        ];
    }

}
